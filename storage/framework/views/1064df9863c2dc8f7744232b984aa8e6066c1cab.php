<div class="container mt-16 lg:mt-24">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal"><?php echo BaseHelper::clean($shortcode->title); ?></h3>
        <p class="max-w-xl mx-auto text-slate-400"><?php echo BaseHelper::clean($shortcode->subtitle); ?></p>
    </div>

    <?php echo $__env->make(Theme::getThemeNamespace('views.real-estate.partials.agents-list'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/shortcodes/featured-agents/index.blade.php ENDPATH**/ ?>