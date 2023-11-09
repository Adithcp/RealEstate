<form action="<?php echo e($actionUrl ?? RealEstateHelper::getPropertiesListPageUrl()); ?>" data-ajax-url="<?php echo e($ajaxUrl ?? route('public.properties')); ?>">
    <input type="hidden" name="type" value="<?php echo e($type); ?>">
    <div class="space-y-5 registration-form text-dark text-start">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 lg:gap-0">
            <?php echo Theme::partial('filters.keyword', compact('type')); ?>


            <?php echo Theme::partial('filters.location', compact('type')); ?>


            <?php echo Theme::partial('filters.by-project', compact('type')); ?>

        </div>

        <button type="button" class="flex items-center gap-2 toggle-advanced-search text-secondary hover:text-primary">
            <?php echo e(__('Advanced')); ?>

            <i class="mdi mdi-chevron-down-circle-outline"></i>
        </button>

        <div class="grid hidden grid-cols-1 gap-6 transition-all duration-200 ease-in-out lg:grid-cols-4 md:grid-cols-2 lg:gap-0 advanced-search">
            <?php echo Theme::partial('filters.category', compact('type', 'categories')); ?>


            <?php echo Theme::partial('filters.bedroom', compact('type')); ?>


            <?php echo Theme::partial('filters.bathroom', compact('type')); ?>


            <?php echo Theme::partial('filters.floor', compact('type')); ?>

        </div>

        <button type="submit" class="btn bg-primary hover:bg-secondary border-primary hover:border-secondary text-white submit-btn w-full md:w-1/4 !h-12 rounded transition-all ease-in-out duration-200">
            <i class="mdi mdi-magnify me-2"></i>
            <?php echo e(__('Search')); ?>

        </button>
    </div>
</form>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/filters/property.blade.php ENDPATH**/ ?>