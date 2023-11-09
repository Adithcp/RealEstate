<?php
    SeoHelper::setTitle(__('404 - Not found'));
    Theme::fireEventGlobalAssets();
?>

<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" class="light scroll-smooth" dir="<?php echo e(BaseHelper::siteLanguageDirection() === 'rtl' ? 'rtl' : 'ltr'); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php echo Theme::header(); ?>

</head>
<body class="dark:bg-slate-900">
    <?php echo apply_filters(THEME_FRONT_BODY, null); ?>


    <section class="relative bg-primary/5">
        <div class="relative container-fluid">
            <div class="grid grid-cols-1">
                <div class="flex flex-col justify-center min-h-screen px-4 py-10 md:px-10">
                    <div class="text-center">
                        <a href="<?php echo e(route('public.index')); ?>">
                            <img src="<?php echo e(RvMedia::getImageUrl(theme_option('favicon'))); ?>" style="max-height: 64px" class="mx-auto" alt="<?php echo e(theme_option('site_title')); ?>">
                        </a>
                    </div>
                    <div class="my-auto text-center title-heading">
                        <img src="<?php echo e(theme_option('404_page_image') ? RvMedia::getImageUrl(theme_option('404_page_image')) : asset('themes/hously/images/error.png')); ?>" class="mx-auto" alt="<?php echo e(theme_option('site_title')); ?>">
                        <h1 class="mt-3 mb-6 text-3xl font-bold md:text-4xl"><?php echo e(__('Page Not Found?')); ?></h1>
                        <p class="text-slate-400">
                            <?php echo e(__('Whoops, this is embarrassing.')); ?>

                            <br>
                            <?php echo e(__("Looks like the page you were looking for wasn't found.")); ?>

                        </p>
                        <div class="mt-4">
                            <a href="<?php echo e(route('public.index')); ?>" class="text-white rounded-md btn bg-primary hover:bg-secondary border-primary hover:border-secondary">
                                <?php echo e(__('Back to Home')); ?>

                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="mb-0 text-slate-400"><?php echo BaseHelper::clean(theme_option('copyright')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="fixed z-10 bottom-3 end-3">
        <a href="<?php echo e(route('public.index')); ?>" class="text-white rounded-full btn btn-icon bg-primary hover:bg-secondary">
            <i class="mdi mdi-arrow-left"></i>
        </a>
    </div>
</body>
</html>
<?php /**PATH /var/www/admin/platform/themes/hously/views/404.blade.php ENDPATH**/ ?>