<?php

namespace Botble\Faq\Http\Controllers;

use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Facades\PageTitle;
use Botble\Base\Forms\FormBuilder;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Base\Traits\HasDeleteManyItemsTrait;
use Botble\Faq\Forms\FaqForm;
use Botble\Faq\Http\Requests\FaqRequest;
use Botble\Faq\Models\Faq;
use Botble\Faq\Repositories\Interfaces\FaqInterface;
use Botble\Faq\Tables\FaqTable;
use Exception;
use Illuminate\Http\Request;

class FaqController extends BaseController
{
    use HasDeleteManyItemsTrait;

    public function __construct(protected FaqInterface $faqRepository)
    {
    }

    public function index(FaqTable $table)
    {
        PageTitle::setTitle(trans('plugins/faq::faq.name'));

        return $table->renderTable();
    }

    public function create(FormBuilder $formBuilder)
    {
        PageTitle::setTitle(trans('plugins/faq::faq.create'));

        return $formBuilder->create(FaqForm::class)->renderForm();
    }

    public function store(FaqRequest $request, BaseHttpResponse $response)
    {
        $faq = $this->faqRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(FAQ_MODULE_SCREEN_NAME, $request, $faq));

        return $response
            ->setPreviousUrl(route('faq.index'))
            ->setNextUrl(route('faq.edit', $faq->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    public function edit(Faq $faq, FormBuilder $formBuilder)
    {
        PageTitle::setTitle(trans('core/base::forms.edit_item', ['name' => $faq->question]));

        return $formBuilder->create(FaqForm::class, ['model' => $faq])->renderForm();
    }

    public function update(Faq $faq, FaqRequest $request, BaseHttpResponse $response)
    {
        $faq->fill($request->input());

        $this->faqRepository->createOrUpdate($faq);

        event(new UpdatedContentEvent(FAQ_MODULE_SCREEN_NAME, $request, $faq));

        return $response
            ->setPreviousUrl(route('faq.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    public function destroy(Faq $faq, Request $request, BaseHttpResponse $response)
    {
        try {
            $this->faqRepository->delete($faq);

            event(new DeletedContentEvent(FAQ_MODULE_SCREEN_NAME, $request, $faq));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }

    public function deletes(Request $request, BaseHttpResponse $response)
    {
        return $this->executeDeleteItems($request, $response, new Faq(), FAQ_MODULE_SCREEN_NAME);
    }
}
