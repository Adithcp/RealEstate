<div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px]">
    <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="overflow-hidden duration-500 ease-in-out bg-white shadow property-item group rounded-xl dark:bg-slate-900 hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700">
            <div class="relative overflow-hidden">
                <a href="<?php echo e($account->url); ?>">
                    <img src="<?php echo e(RvMedia::getImageUrl($account->avatar_url, 'small', false, RvMedia::getDefaultImage())); ?>" alt="<?php echo e($account->name); ?>" class="transition-all duration-500 hover:scale-110 w-full">
                </a>
            </div>

            <div class="p-6">
                <div class="flex items-center justify-between">
                    <a href="<?php echo e($account->url); ?>" class="text-lg font-medium uppercase duration-500 ease-in-out hover:text-primary" title="<?php echo e($account->name); ?>">
                        <?php echo BaseHelper::clean($account->name); ?>

                    </a>
                    <?php if($account->email && ! setting('real_estate_hide_agency_email', 0)): ?>
                        <a href="mailto:<?php echo e($account->email); ?>" class="bg-primary text-white px-2.5 py-1.5 rounded-full hover:bg-secondary transition-all" title="<?php echo e($account->name); ?>">
                            <i class="mdi mdi-email-outline"></i>
                        </a>
                    <?php endif; ?>
                </div>
                <ul class="list-none ps-0 border-t dark:border-t-slate-600 mt-5 pt-5 mb-0 space-y-3">
                    <li>
                        <i class="mdi mdi-home-outline me-1 text-xl"></i>
                        <span>
                            <?php if($account->properties_count === 1): ?>
                                <?php echo e(__(':count property', ['count' => number_format($account->properties_count)])); ?>

                            <?php else: ?>
                                <?php echo e(__(':count properties', ['count' => number_format($account->properties_count)])); ?>

                            <?php endif; ?>
                        </span>
                    </li>
                    <?php if($account->email && ! setting('real_estate_hide_agency_email', 0)): ?>
                        <li class="hover:text-primary">
                            <i class="mdi mdi-email-outline me-1"></i>
                            <a href="mailto:<?php echo e($account->email); ?>"><?php echo e($account->email); ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if($account->phone && ! setting('real_estate_hide_agency_phone', 0)): ?>
                        <li class="hover:text-primary">
                            <i class="mdi mdi-phone-outline me-1"></i>
                            <a href="tel:<?php echo e($account->phone); ?>" dir="ltr"><?php echo e($account->phone); ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/views/real-estate/partials/agents-list.blade.php ENDPATH**/ ?>