<div>
    <label for="choices-floors-<?php echo e($type); ?>" class="font-medium form-label text-slate-900 dark:text-white"><?php echo e(__('Floors:')); ?></label>
    <div class="relative mt-2 filter-search-form filter-border">
        <i class="mdi mdi-currency-usd icons"></i>
        <select data-trigger name="floor" id="choices-floors-<?php echo e($id ?? $type); ?>" aria-label="<?php echo e(__('Floors')); ?>">
            <option value=""><?php echo e(__('All Floors')); ?></option>
            <?php $__currentLoopData = range(1, 5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($i); ?>"><?php if($i !== 5): ?>
                        <?php echo e(trans_choice(__('1 floor|:number floors'), $i, ['number' => $i])); ?>

                    <?php else: ?>
                        <?php echo e(__('5+ floors')); ?>

                    <?php endif; ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/filters/floor.blade.php ENDPATH**/ ?>