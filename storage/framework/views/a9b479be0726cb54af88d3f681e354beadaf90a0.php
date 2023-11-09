<div class="lg:col-span-2 md:col-span-3">
    <div class="tracking-[1px] text-gray-100 font-semibold"><?php echo e(Arr::get($config, 'name')); ?></div>
    <ul class="mx-0 mt-6 mb-0 list-none footer-list">
        <?php echo Menu::generateMenu([
                'slug' => Arr::get($config, 'menu_id'),
                'view' => 'footer-menu'
            ]); ?>

    </ul>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/////widgets/custom-menu/templates/frontend.blade.php ENDPATH**/ ?>