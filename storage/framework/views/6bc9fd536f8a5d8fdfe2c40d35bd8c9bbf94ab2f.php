<div class="container mt-16 lg:mt-24">
    <div class="grid grid-cols-1 text-center">
        <h3 class="mb-6 text-2xl font-medium leading-normal text-black md:text-3xl md:leading-normal dark:text-white">
            <?php echo BaseHelper::clean($shortcode->title); ?>

        </h3>

        <?php if($subtitle = $shortcode->subtitle): ?>
            <p class="max-w-xl mx-auto text-slate-400"><?php echo BaseHelper::clean($subtitle); ?></p>
        <?php endif; ?>

        <?php if($buttonLabel = $shortcode->button_label): ?>
            <div class="mt-6">
                <a href="<?php echo e($shortcode->button_url); ?>" class="text-white rounded-md bg-primary btn hover:bg-secondary">
                    <i class="align-middle mdi mdi-phone me-2"></i> <?php echo e($buttonLabel); ?>

                </a>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/shortcodes/get-in-touch/index.blade.php ENDPATH**/ ?>