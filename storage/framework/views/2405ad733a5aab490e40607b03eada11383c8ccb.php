<div>
    <label for="choices-bathrooms-<?php echo e($type); ?>" class="font-medium form-label text-slate-900 dark:text-white"><?php echo e(__('Bathrooms:')); ?></label>
    <div class="relative mt-2 filter-search-form filter-border">
        <i class="mdi mdi-currency-usd icons"></i>
        <select data-trigger name="bathroom" id="choices-bathrooms-<?php echo e($id ?? $type); ?>" aria-label="<?php echo e(__('Bathrooms')); ?>">
            <option value=""><?php echo e(__('All Bathrooms')); ?></option>
            <?php $__currentLoopData = range(1, 5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($i); ?>"><?php if($i !== 5): ?>
                        <?php echo e(trans_choice(__('1 bathroom|:number bathrooms'), $i, ['number' => $i])); ?>

                    <?php else: ?>
                        <?php echo e(__('5+ bathrooms')); ?>

                    <?php endif; ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/filters/bathroom.blade.php ENDPATH**/ ?>