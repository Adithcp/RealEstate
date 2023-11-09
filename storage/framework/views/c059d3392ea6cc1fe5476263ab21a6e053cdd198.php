<div>
    <label for="choices-category-<?php echo e($type); ?>" class="font-medium form-label text-slate-900 dark:text-white"><?php echo e(__('Select Category:')); ?></label>
    <div class="relative mt-2 filter-search-form filter-border">
        <i class="mdi mdi-home-outline icons"></i>
        <select class="form-select z-2" data-trigger name="category_id" id="choices-category-<?php echo e($id ?? $type); ?>" aria-label="<?php echo e(__('Category')); ?>">
            <option value=""><?php echo e(__('All Category')); ?></option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/filters/category.blade.php ENDPATH**/ ?>