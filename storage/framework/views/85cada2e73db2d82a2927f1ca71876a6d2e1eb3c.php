<div class="container mt-16 lg:mt-24">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal"><?php echo BaseHelper::clean($shortcode->title); ?></h3>
        <p class="max-w-xl mx-auto text-slate-400"><?php echo BaseHelper::clean($shortcode->subtitle); ?></p>
    </div>
    <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo Theme::partial('blog.post-item', compact('post')); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/shortcodes/featured-posts/index.blade.php ENDPATH**/ ?>