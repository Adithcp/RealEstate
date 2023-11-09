<div>
    <label for="min-price" class="font-medium form-label text-slate-900 dark:text-white"><?php echo e(__('Min Price:')); ?></label>
    <div class="relative mt-2 filter-search-form filter-border">
        <i class="mdi mdi-currency-usd icons"></i>
        <input name="min_price" type="number" id="min-price" class="border-0 form-input filter-input-box bg-gray-50 dark:bg-slate-800" placeholder="<?php echo e(__('Min price')); ?>">
    </div>
</div>

<div>
    <label for="max-price" class="font-medium form-label text-slate-900 dark:text-white"><?php echo e(__('Max Price:')); ?></label>
    <div class="relative mt-2 filter-search-form filter-border">
        <i class="mdi mdi-currency-usd icons"></i>
        <input name="max_price" type="number" id="max-price" class="border-0 form-input filter-input-box bg-gray-50 dark:bg-slate-800" placeholder="<?php echo e(__('Max price')); ?>">
    </div>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/filters/prices.blade.php ENDPATH**/ ?>