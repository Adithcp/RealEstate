<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('template_title', trans('packages/installer::installer.title')); ?></title>

    <link rel="icon" href="<?php echo e(asset('vendor/core/core/base/images/favicon.png')); ?>">
    <link href="<?php echo e(asset('vendor/core/core/base/libraries/font-awesome/css/fontawesome.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('vendor/core/packages/installer/css/style.css')); ?>?v=<?php echo e(get_cms_version()); ?>" rel="stylesheet"/>

    <link rel="preconnect" href="<?php echo e(BaseHelper::getGoogleFontsURL()); ?>">
    <link href="<?php echo e(BaseHelper::getGoogleFontsURL()); ?>/css?family=Lato:400,700%7cPoppins:200,400,500,700" rel="stylesheet">

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <?php
        $currentStep = match (true) {
            Route::is('installers.welcome') => 1,
            Route::is('installers.requirements') => 2,
            Route::is('installers.environment') => 3,
            Route::is('installers.create_account') => 4,
            Route::is('installers.final') => 5,
            default => 1,
        };
    ?>
    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 bg-opacity-25 min-h-screen h-auto justify-center items-center py-20">
        <div class="text-center mb-10">
            <h2 class="text-white font-semibold text-3xl">
                <?php echo e(trans('packages/installer::installer.installation')); ?>

            </h2>
        </div>
        <div class="bg-white w-full rounded-xl mx-auto max-w-7xl px-4 py-8 lg:py-8 lg:px-8 shadow-2xl">
            <?php echo $__env->make('packages/installer::partials.progress', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <main class="pt-10 pb-4">
                <?php echo $__env->make('packages/installer::partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('container'); ?>
            </main>
        </div>
    </div>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH /var/www/admin/platform/packages/installer/resources/views/master.blade.php ENDPATH**/ ?>