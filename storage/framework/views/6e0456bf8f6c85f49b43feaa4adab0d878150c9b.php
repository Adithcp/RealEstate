<ul <?php echo $options; ?>>
    <?php $__currentLoopData = $menu_nodes->loadMissing('metadata'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['has-submenu parent-menu-item' => $row->has_child, 'active' => $row->active]) ?>">
            <a href="<?php echo e(url($row->url)); ?>" target="<?php echo e($row->target); ?>" class="sub-menu-item">
                <?php if($iconImage = $row->getMetadata('icon_image', true)): ?>
                    <img src="<?php echo e(RvMedia::getImageUrl($iconImage)); ?>" class="w-3 h-3 inline-block align-top mt-[5px]" />
                <?php elseif($row->icon_font): ?>
                    <i class="<?php echo e(trim($row->icon_font)); ?>"></i>
                <?php endif; ?>
                <?php echo e($row->title); ?>

            </a>
            <?php if($row->has_child): ?>
                <span class="me-4 menu-arrow lg:me-0"></span>
                <?php echo Menu::generateMenu([
                        'menu' => $menu,
                        'view'  => 'main-menu',
                        'options' => ['class' => 'submenu'],
                        'menu_nodes' => $row->child,
                    ]); ?>

            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/main-menu.blade.php ENDPATH**/ ?>