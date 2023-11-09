<div class="input-group color-picker" data-color="<?php echo e($value ?? '#000'); ?>">
    <?php echo Form::text($name, $value ?? '#000', array_merge(['class' => 'form-control'], $attributes)); ?>

    <span class="input-group-text">
    <span class="input-group-text colorpicker-input-addon"><i></i></span>
  </span>
</div>

<?php if (! $__env->hasRenderedOnce('0890e0d4-8c20-4d96-9081-4257c0b48904')): $__env->markAsRenderedOnce('0890e0d4-8c20-4d96-9081-4257c0b48904'); ?>
    <?php if(request()->ajax()): ?>
        <script src="<?php echo e(asset('vendor/core/core/base/libraries/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')); ?>"></script>
        <link rel="stylesheet" href="<?php echo e(asset('vendor/core/core/base/libraries/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')); ?>">
    <?php endif; ?>
<?php endif; ?>

<?php /**PATH /var/www/admin/platform/core/base/resources/views/forms/partials/color.blade.php ENDPATH**/ ?>