<!DOCTYPE html>
<?php
    $themeMode = $_COOKIE['theme'] ?? null;

    if (! in_array($themeMode, ['light', 'dark'])) {
        $themeMode = theme_option('default_theme_mode', 'system');
    }
?>
<html lang="<?php echo e(app()->getLocale()); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['scroll-smooth', $themeMode]) ?>" dir="<?php echo e(BaseHelper::siteLanguageDirection() === 'rtl' ? 'rtl' : 'ltr'); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <?php echo BaseHelper::googleFonts('https://fonts.googleapis.com/css2?family=' . urlencode(theme_option('primary_font', 'League Spartan')) . ':wght@300;400;500;600;700&display=swap'); ?>


        <style>
            :root {
                --primary-color: <?php echo e(implode(' ', BaseHelper::hexToRgb(theme_option('primary_color', '#16a34a')))); ?>;
                --secondary-color: <?php echo e(theme_option('secondary_color', '#15803D')); ?>;
                --primary-font: '<?php echo e(theme_option('primary_font', 'League Spartan')); ?>', sans-serif;
                --primary-color-rgb: <?php echo e(BaseHelper::hexToRgba(theme_option('primary_color', '#16a34a'), 0.8)); ?>;
            }
        </style>

        <script>
            window.defaultThemeMode = <?php echo json_encode(theme_option('default_theme_mode', 'system'), 512) ?>;
        </script>

        <?php echo Theme::header(); ?>

    </head>

    <body class="dark:bg-slate-900">
        <?php echo apply_filters(THEME_FRONT_BODY, null); ?>


        <div id="alert-container"></div>

        <?php if(empty($withoutNavbar)): ?>
            <?php echo Theme::partial('topnav'); ?>

        <?php endif; ?>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/header.blade.php ENDPATH**/ ?>