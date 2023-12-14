<?php

namespace Botble\RealEstate\Forms;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Forms\FormAbstract;
// use Botble\Blog\Http\Requests\TagRequest;
use Botble\RealEstate\Models\Review;
use Botble\RealEstate\Repositories\Interfaces\PropertyInterface;

class ReviewForm extends FormAbstract
{
    public function __construct(
        protected PropertyInterface $propertyRepository,
    ) {
        parent::__construct();
    }
    public function buildForm(): void
    {
        $property = $this->propertyRepository->pluck('name', 'id');
        $this
            ->setupModel(new Review())
            // ->setValidatorClass(TagRequest::class)
            ->withCustomFields()
            ->add('property_id', 'customSelect', [
                'label' => trans('core/base::forms.form_name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => trans('core/base::forms.form_name_placeholder'),
                    // 'data-counter' => 120,
                ],
                'choices' => [0 => trans('plugins/real-estate::forms.property')] + $property,
            ])
            ->add('form_star', 'number', [
                'label' => trans('core/base::forms.form_star'),
                'label_attr' => ['class' => 'control-label'],
                'wrapper' => [
                    'class' => 'form-group mb-3 col-md-4',
                ],
                'attr' => [
                    'placeholder' => trans('core/base::forms.form_star'),
                ],
                'rules' => ['numeric', 'min:0', 'max:5'],
            ])
            ->add('content', 'textarea', [
                'label' => trans('core/base::forms.form_content'),
                'label_attr' => ['class' => 'control-label'],
                'attr' => [
                    'rows' => 4,
                    'placeholder' => trans('core/base::forms.form_content_placeholder'),
                    'data-counter' => 400,
                ],
            ])
            ->add('status', 'customSelect', [
                'label' => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'choices' => BaseStatusEnum::labels(),
            ])
            ->setBreakFieldPoint('status');
    }
}
