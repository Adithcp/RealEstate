<?php
    $field['options'] = config('core.base.general.google_fonts', []);

    $customGoogleFonts = config('core.base.general.custom_google_fonts');

    if ($customGoogleFonts) {
        $field['options'] = array_merge($field['options'], explode(',', $customGoogleFonts));
    }

    $customFonts = config('core.base.general.custom_fonts');

    if ($customFonts) {
        $field['options'] = array_merge($field['options'], explode(',', $customFonts));
    }
?>

<?php echo Form::customSelect($name, ['' => __('-- Select --')] + array_combine($field['options'], $field['options']), $selected, ['class' => 'select2_google_fonts_picker']); ?>


<?php if (! $__env->hasRenderedOnce('a5f3138f-0232-409d-9eaa-cd77dacc3d53')): $__env->markAsRenderedOnce('a5f3138f-0232-409d-9eaa-cd77dacc3d53'); ?>
    <?php $__env->startPush('footer'); ?>
        <?php echo Html::style(BaseHelper::getGoogleFontsURL() . '/css?family=' . implode('|', array_map('urlencode', array_filter($field['options']))) . '&display=swap'); ?>

    <?php $__env->stopPush(); ?>
<?php endif; ?>

<?php /**PATH /var/www/admin/platform/core/base/resources/views/forms/partials/google-fonts.blade.php ENDPATH**/ ?>