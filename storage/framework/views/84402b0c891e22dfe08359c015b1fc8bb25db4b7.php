<div class="container mt-16 lg:mt-24">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
            <?php echo BaseHelper::clean($shortcode->title); ?>

        </h3>
        <p class="max-w-xl mx-auto text-slate-400"><?php echo BaseHelper::clean($shortcode->subtitle); ?></p>
    </div>

    <?php switch($shortcode->style):
        case ('style-2'): ?>
            <div class="relative flex justify-center">
                <div class="relative w-full">
                    <div class="tiny-three-item">
                        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tiny-slide">
                                <div class="mx-3 text-center">
                                    <p class="text-lg italic text-slate-400"> " <?php echo e($testimonial->content); ?> " </p>

                                    <div class="mt-5 text-center">
                                        <ul class="mb-2 text-xl font-medium list-none text-amber-400">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                        </ul>

                                        <img src="<?php echo e(RvMedia::getImageUrl($testimonial->image)); ?>" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-700" alt="<?php echo e($testimonial->name); ?>">
                                        <span class="block mt-2 fw-semibold"><?php echo e($testimonial->name); ?></span>
                                        <span class="text-sm text-slate-400"><?php echo e($testimonial->company); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php break; ?>
        <?php default: ?>
            <div class="relative flex justify-center mt-16">
                <div class="relative w-full lg:w-1/3 md:w-1/2">
                    <div class="absolute -top-20 md:-start-24 -start-0">
                        <i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
                    </div>
                    <div class="absolute bottom-28 md:-end-24 -end-0">
                        <i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
                    </div>

                    <div class="tiny-single-item">
                        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tiny-slide">
                                <div class="text-center">
                                    <p class="text-xl italic text-slate-400"> " <?php echo e($testimonial->content); ?> " </p>

                                    <div class="mt-5 text-center">
                                        <img src="<?php echo e(RvMedia::getImageUrl($testimonial->image)); ?>" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-700" alt="<?php echo e($testimonial->name); ?>">
                                        <span class="block mt-2 fw-semibold"><?php echo e($testimonial->name); ?></span>
                                        <span class="text-sm text-slate-400"><?php echo e($testimonial->company); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php break; ?>
    <?php endswitch; ?>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/shortcodes/testimonials/index.blade.php ENDPATH**/ ?>