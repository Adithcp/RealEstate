<?php $__currentLoopData = $menu_nodes->loadMissing('metadata'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="my-2.5">
        <a href="<?php echo e(url($item->url)); ?>" class="duration-500 ease-in-out text-slate-300 hover:text-slate-400">
            <i class="<?php echo e($item->icon_font ?? 'mdi mdi-chevron-right'); ?> me-1"></i>
            <?php echo e($item->title); ?>

        </a>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/footer-menu.blade.php ENDPATH**/ ?>