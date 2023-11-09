<div class="container mt-16 lg:mt-24">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal"><?php echo BaseHelper::clean($shortcode->title); ?></h3>
        <p class="max-w-xl mx-auto text-slate-400"><?php echo BaseHelper::clean($shortcode->subtitle); ?></p>
    </div>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
        <?php $__currentLoopData = range(1, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="relative overflow-hidden text-center transition-all duration-500 ease-in-out bg-white group lg:px-10 rounded-xl dark:bg-slate-900">
                <div class="relative -m-3 overflow-hidden text-transparent">
                    <i data-feather="hexagon" class="w-32 h-32 mx-auto fill-primary/5"></i>
                    <div class="absolute start-0 end-0 flex items-center justify-center mx-auto text-4xl align-middle transition-all duration-500 ease-in-out top-2/4 -translate-y-2/4 text-primary rounded-xl">
                        <i class="<?php echo e($shortcode->{'icon_' . $i}); ?>"></i>
                    </div>
                </div>
                <div class="mt-6">
                    <?php if($title = $shortcode->{'title_' . $i}): ?>
                        <h3 class="text-xl font-medium"><?php echo BaseHelper::clean($title); ?></h3>
                    <?php endif; ?>
                    <?php if($description = $shortcode->{'description_' . $i}): ?>
                        <p class="mt-3 text-slate-400"><?php echo BaseHelper::clean($description); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/shortcodes/how-it-works/index.blade.php ENDPATH**/ ?>