<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('packages/installer::installer.welcome.templateTitle')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <?php echo e(trans('packages/installer::installer.welcome.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
    <div class="max-w-2xl mx-auto">
        <div class="py-6 md:py-40">
            <p class="text-center text-slate-600">
                <?php echo e(trans('packages/installer::installer.welcome.message')); ?>

            </p>
        </div>
    </div>

    <div class="text-center mt-10">
        <a
            href="<?php echo e(URL::signedRoute('installers.requirements', [], \Carbon\Carbon::now()->addMinutes(30))); ?>"
            class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl hover:text-white hover:shadow-2xl focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        >
            <?php echo e(trans('packages/installer::installer.welcome.next')); ?>

            <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
        </a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('packages/installer::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/admin/platform/packages/installer/resources/views/welcome.blade.php ENDPATH**/ ?>