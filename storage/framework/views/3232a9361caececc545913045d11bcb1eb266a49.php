<div>
    <label for="choices-bedrooms-<?php echo e($type); ?>" class="font-medium form-label text-slate-900 dark:text-white"><?php echo e(__('Bedrooms:')); ?></label>
    <div class="relative mt-2 filter-search-form filter-border">
        <i class="mdi mdi-currency-usd icons"></i>
        <select data-trigger name="bedroom" id="choices-bedrooms-<?php echo e($id ?? $type); ?>" aria-label="<?php echo e(__('Bedrooms')); ?>">
            <option value=""><?php echo e(__('All Bedrooms')); ?></option>
            <?php $__currentLoopData = range(1, 5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($i); ?>"><?php if($i !== 5): ?>
                        <?php echo e(trans_choice(__('1 bedroom|:number bedrooms'), $i, ['number' => $i])); ?>

                    <?php else: ?>
                        <?php echo e(__('5+ bedrooms')); ?>

                    <?php endif; ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/filters/bedroom.blade.php ENDPATH**/ ?>