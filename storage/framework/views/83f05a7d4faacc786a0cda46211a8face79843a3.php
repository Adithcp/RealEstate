<div class="lg:col-span-4 md:col-span-12">
    <?php if($logo = Arr::get($config, 'logo')): ?>
        <a href="<?php echo e(Arr::get($config, 'url')); ?>" class="text-[22px] focus:outline-none">
            <img src="<?php echo e(RvMedia::getImageUrl($logo)); ?>" alt="<?php echo e(theme_option('site_title')); ?>">
        </a>
    <?php endif; ?>
    <?php if($description = Arr::get($config, 'description')): ?>
        <p class="mt-6 text-gray-300"><?php echo BaseHelper::clean($description); ?></p>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/////widgets/site-information/templates/frontend.blade.php ENDPATH**/ ?>