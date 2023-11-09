<div class="container mt-16 lg:mt-24">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal"><?php echo BaseHelper::clean($shortcode->title); ?></h3>
        <p class="max-w-xl mx-auto text-slate-400"><?php echo BaseHelper::clean($shortcode->subtitle); ?></p>
    </div>
    <?php switch($shortcode->style):
        case ('list'): ?>
            <?php echo Theme::partial('real-estate.properties.items-list', compact('properties')); ?>

            <?php break; ?>
        <?php default: ?>
            <?php echo Theme::partial('real-estate.properties.items', compact('properties')); ?>

            <?php break; ?>
    <?php endswitch; ?>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/shortcodes/featured-properties/index.blade.php ENDPATH**/ ?>