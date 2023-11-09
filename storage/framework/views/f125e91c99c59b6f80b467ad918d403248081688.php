<div>
    <label for="location-<?php echo e($type); ?>" class="font-medium form-label text-slate-900 dark:text-white"><?php echo e(__('Location:')); ?></label>
    <div class="relative mt-2 filter-search-form filter-border">
        <i class="mdi mdi-map-marker-outline icons"></i>
        <input name="location" type="text" id="location-<?php echo e($type); ?>" class="border-0 form-input filter-input-box bg-gray-50 dark:bg-slate-800" placeholder="<?php echo e(__('City, state')); ?>" autocomplete="off" data-url="<?php echo e(route('public.ajax.cities')); ?>">
        <i class="absolute hidden mdi mdi-loading mdi-spin top-5 end-5"></i>
    </div>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/filters/location.blade.php ENDPATH**/ ?>