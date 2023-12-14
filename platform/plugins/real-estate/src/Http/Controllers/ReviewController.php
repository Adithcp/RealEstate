<?php

namespace Botble\RealEstate\Http\Controllers;

use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Facades\Assets;
use Botble\Base\Facades\PageTitle;
use Botble\Base\Forms\FormBuilder;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\RealEstate\Repositories\Interfaces\ReviewInterface;
use Botble\RealEstate\Repositories\Interfaces\PropertyInterface;
use Botble\RealEstate\Tables\ReviewTable;
use Botble\RealEstate\Forms\ReviewForm;
use Botble\RealEstate\Models\Property;
use Exception;
use Illuminate\Http\Request;

class ReviewController extends BaseController
{
    public function __construct(
        protected ReviewInterface $reviewRepository,
        protected PropertyInterface $propertyrepository
        )
    {
    }

    public function index(ReviewTable $dataTable)
    {
        PageTitle::setTitle(trans('plugins/real-estate::review.name'));

        Assets::addStylesDirectly('vendor/core/plugins/real-estate/css/review.css');

        return $dataTable->renderTable();
    }

    public function create(FormBuilder $formBuilder)
    {
        PageTitle::setTitle(trans('plugins/real-estate::review.create'));

        return $formBuilder->create(ReviewForm::class)->renderForm();
    }

    public function store(Request $request, BaseHttpResponse $response)
    {
        $property = Property::find($request->property_id);
        $review = $this->reviewRepository->createOrUpdate(array_merge($request->input(), [
            'account_id' => $property->author_id,
            'reviewable_type' => "Botble\RealEstate\Models\Property",
            'reviewable_id' => $request->property_id,
            'star' => $request->form_star,
            'content' => $request->content,
        ]));
        event(new CreatedContentEvent(REVIEW_MODULE_SCREEN_NAME, $request, $review));

        return $response
            ->setPreviousUrl(route('review.index'))
            // ->setNextUrl(route('tags.edit', $tag->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    public function destroy(int|string $id, Request $request, BaseHttpResponse $response)
    {
        try {
            $review = $this->reviewRepository->findOrFail($id);
            $this->reviewRepository->delete($review);

            event(new DeletedContentEvent(REVIEW_MODULE_SCREEN_NAME, $request, $review));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }

    public function deletes(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $review = $this->reviewRepository->findOrFail($id);
            $this->reviewRepository->delete($review);

            event(new DeletedContentEvent(REVIEW_MODULE_SCREEN_NAME, $request, $review));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
