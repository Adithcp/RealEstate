<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['class' => 'get-started-modal','size' => 'lg','options' => ['data-step' => 1],'header' => false,'footer' => false,'title' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'get-started-modal','size' => 'lg','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['data-step' => 1]),'header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
     <?php $__env->endSlot(); ?>
    <div class="get-start-wrapper">
        <div class="text-center">
            <p><img src="<?php echo e(asset('vendor/core/packages/get-started/images/confetti.png')); ?>" alt="Icon">
            </p>
            <br>
            <h4><?php echo e(trans('packages/get-started::get-started.welcome_title')); ?></h4>
            <p><?php echo e(trans('packages/get-started::get-started.welcome_description')); ?></p>
            <br>
            <br>
            <form action="<?php echo e(route('get-started.save')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="step" value="1">
                <button class="btn btn-primary btn-bigger"
                        type="submit"><?php echo e(trans('packages/get-started::get-started.get_started')); ?></button>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['class' => 'get-started-modal','size' => 'lg','options' => ['data-step' => 2],'header' => false,'footer' => false,'title' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'get-started-modal','size' => 'lg','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['data-step' => 2]),'header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
     <?php $__env->endSlot(); ?>
    <div class="get-start-wrapper">
        <div>
            <h4><?php echo e(trans('packages/get-started::get-started.customize_branding_title')); ?></h4>
            <p><?php echo e(trans('packages/get-started::get-started.customize_branding_description')); ?></p>
            <form action="<?php echo e(route('get-started.save')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="step" value="2">
                <div class="select-colors-fonts" data-select2-dropdown-parent="true">
                    <div class="row">
                        <?php if(theme_option()->hasField('primary_color')): ?>
                            <div class="col-sm-6">
                                <h6><?php echo e(trans('packages/get-started::get-started.colors')); ?></h6>
                                <div class="form-group">
                                    <label
                                        for="primary-color"><?php echo e(trans('packages/get-started::get-started.primary_color')); ?></label>
                                    <?php echo theme_option()->renderField(theme_option()->getField('primary_color')); ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(theme_option()->hasField('primary_font')): ?>
                            <div class="col-sm-6">
                                <h6><?php echo e(trans('packages/get-started::get-started.fonts')); ?></h6>
                                <div class="form-group">
                                    <label
                                        for="primary-font"><?php echo e(trans('packages/get-started::get-started.primary_font')); ?></label>
                                    <?php echo theme_option()->renderField(theme_option()->getField('primary_font')); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h6><?php echo e(trans('packages/get-started::get-started.identify')); ?></h6>
                            <div class="form-group">
                                <label
                                    for="site-name"><?php echo e(trans('packages/get-started::get-started.site_title')); ?></label>
                                <input type="text" name="site_title" class="form-control"
                                       id="site-name" value="<?php echo e(theme_option('site_title')); ?>"
                                       placeholder="<?php echo e(trans('packages/get-started::get-started.site_title')); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label
                                    for="site-logo"><?php echo e(trans('packages/get-started::get-started.logo')); ?></label>
                                <?php echo Form::mediaImage('logo', theme_option('logo'), ['allow_thumb' => false]); ?>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label
                                    for="site-favicon"><?php echo e(trans('packages/get-started::get-started.favicon')); ?></label>
                                <?php echo Form::mediaImage('favicon', theme_option('favicon'), ['allow_thumb' => false]); ?>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label
                                    for="admin-logo"><?php echo e(trans('packages/get-started::get-started.admin_logo')); ?></label>
                                <?php echo Form::mediaImage('admin_logo', setting('admin_logo'), ['allow_thumb' => false, 'default_image' => url(config('core.base.general.logo'))]); ?>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label
                                    for="admin-favicon"><?php echo e(trans('packages/get-started::get-started.admin_favicon')); ?></label>
                                <?php echo Form::mediaImage('admin_favicon', setting('admin_favicon'), ['allow_thumb' => false, 'default_image' => url(config('core.base.general.favicon'))]); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-bigger"
                            type="submit"><?php echo e(trans('packages/get-started::get-started.next_step')); ?> <i
                            class="fas fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['class' => 'get-started-modal','size' => 'lg','options' => ['data-step' => 3],'header' => false,'footer' => false,'title' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'get-started-modal','size' => 'lg','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['data-step' => 3]),'header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
     <?php $__env->endSlot(); ?>
    <div class="get-start-wrapper" style="min-height: 0">
        <div>
            <h4><?php echo e(trans('packages/get-started::get-started.change_default_account_info_title')); ?></h4>
            <p><?php echo e(trans('packages/get-started::get-started.change_default_account_info_description')); ?></p>
            <form action="<?php echo e(route('get-started.save')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="step" value="3">
                <div class="form-group">
                    <label
                        for="primary-color"><?php echo e(trans('packages/get-started::get-started.username')); ?></label>
                    <?php echo Form::text('username', auth()->user()->username, ['class' => 'form-control']); ?>

                </div>
                <div class="form-group">
                    <label
                        for="primary-color"><?php echo e(trans('packages/get-started::get-started.email')); ?></label>
                    <?php echo Form::email('email', auth()->user()->email, ['class' => 'form-control']); ?>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label
                                for="primary-color"><?php echo e(trans('packages/get-started::get-started.password')); ?></label>
                            <?php echo Form::password('password', ['class' => 'form-control']); ?>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label
                                for="primary-font"><?php echo e(trans('packages/get-started::get-started.password_confirmation')); ?></label>
                            <?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>

                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary btn-bigger"
                            type="submit"><?php echo e(trans('packages/get-started::get-started.next_step')); ?> <i
                            class="fas fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['class' => 'get-started-modal','size' => 'lg','options' => ['data-step' => 4],'header' => false,'footer' => false,'title' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'get-started-modal','size' => 'lg','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['data-step' => 4]),'header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
     <?php $__env->endSlot(); ?>
    <div class="get-start-wrapper" style="min-height: 0">
        <div>
            <div class="text-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="success-icon text-success">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>

            <h4 class="text-center"><?php echo e(trans('packages/get-started::get-started.site_ready_title')); ?></h4>
            <p><?php echo e(trans('packages/get-started::get-started.site_ready_description')); ?></p>
            <br>
            <br>
            <form action="<?php echo e(route('get-started.save')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="step" value="4">
                <div class="text-center">
                    <button class="btn btn-primary btn-bigger"
                            type="submit"><?php echo e(trans('packages/get-started::get-started.finish')); ?> <i
                            class="fas fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['class' => 'close-get-started-modal','size' => 'lg','header' => false,'footer' => false,'title' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'close-get-started-modal','size' => 'lg','header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
     <?php $__env->endSlot(); ?>
    <div class="get-start-wrapper">
        <div class="text-center">
            <h5><?php echo e(trans('packages/get-started::get-started.exit_wizard_title')); ?></h5>
            <br>
            <p>
                <button
                    class="btn btn-primary btn-bigger js-close-wizard"><?php echo e(trans('packages/get-started::get-started.exit_wizard_confirm')); ?>

                </button>&nbsp;&nbsp;
                <button
                    class="btn btn-primary btn-bigger btn-bordered js-back-to-wizard"><?php echo e(trans('packages/get-started::get-started.exit_wizard_cancel')); ?>

                </button>
            </p>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/admin/platform/packages/get-started/resources/views/index.blade.php ENDPATH**/ ?>