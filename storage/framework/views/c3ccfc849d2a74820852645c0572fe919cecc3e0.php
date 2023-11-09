<?php $__env->startSection('template_title', trans('packages/installer::installer.requirements.templateTitle')); ?>

<?php $__env->startSection('container'); ?>
    <?php $__currentLoopData = $requirements['requirements']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $requirement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-slate-100 rounded-lg overflow-auto mb-6 last:mb-0">
            <div class="border-b flex items-center justify-between bg-blue-100 text-white py-4 px-5">
                <p class="text-base text-slate-900 font-medium leading-6">
                    <?php echo e(ucfirst($type)); ?>

                    <?php if($type === 'php'): ?>
                        <span><?php echo e(__('version :version required', ['version' => $phpSupportInfo['minimum']])); ?></span>
                    <?php endif; ?>
                </p>
                <?php if($type === 'php'): ?>
                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['text-green-600' => $phpSupportInfo['supported'], 'text-red-600' => ! $phpSupportInfo['supported']]) ?>">
                        <span class="font-semibold"><?php echo e($phpSupportInfo['current']); ?></span>
                        <i class="<?php echo \Illuminate\Support\Arr::toCssClasses(['fa fa-fw', 'fa-check-circle' => $phpSupportInfo['supported'], 'fa-exclamation-circle' => ! $phpSupportInfo['supported']]) ?>"></i>
                    </div>
                <?php endif; ?>
            </div>
            <div class="p-5">
                <ul>
                    <?php $__currentLoopData = $requirements['requirements'][$type]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extension => $enabled): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="flex justify-between items-center border-b last:border-none pb-3 mb-3 last:pb-0 last:mb-0">
                            <span class="text-gray-800 font-weight-bold">
                                <?php echo e($type !== 'permissions' ? ucfirst($extension) : $extension); ?>

                            </span>
                            <i class="<?php echo \Illuminate\Support\Arr::toCssClasses(['right-2 fa fa-fw', 'text-green-600 fa-check-circle' => $enabled, 'text-red-600 fa-exclamation-circle' => ! $enabled]) ?>"></i>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if(! isset($requirements['errors']) && $phpSupportInfo['supported']): ?>
        <div class="text-center mt-10">
            <a
                class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl hover:text-white hover:shadow-2xl focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                href="<?php echo e(URL::signedRoute('installers.environment', [], \Carbon\Carbon::now()->addMinutes(30))); ?>"
            >
                <?php echo e(trans('packages/installer::installer.permissions.next')); ?>

                <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
            </a>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('packages/installer::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/admin/platform/packages/installer/resources/views//requirements.blade.php ENDPATH**/ ?>