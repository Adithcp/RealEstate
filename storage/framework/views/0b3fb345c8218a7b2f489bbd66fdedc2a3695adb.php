<?php
    Theme::asset()->container('footer')->usePath()->add('wishlist', 'js/wishlist.js');

    $currentLayout = $currentLayout ?? (BaseHelper::stringify(request()->query('layout')) ?? (theme_option('properties_list_layout') ?: 'grid'));

    if (! in_array($currentLayout, ['grid', 'list'])) {
        $currentLayout = 'grid';
    }
?>

<?php echo Theme::partial("real-estate.properties.items-$currentLayout", compact('properties')); ?>


<?php if($properties instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
    <?php echo e($properties->links(Theme::getThemeNamespace('partials.pagination'))); ?>

<?php endif; ?>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/real-estate/properties/items.blade.php ENDPATH**/ ?>