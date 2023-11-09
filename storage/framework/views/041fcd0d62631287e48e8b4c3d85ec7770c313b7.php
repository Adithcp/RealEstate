<div>
    <label for="project-<?php echo e($type); ?>" class="font-medium form-label text-slate-900 dark:text-white"><?php echo e(__('Project:')); ?></label>
    <div class="relative mt-2 filter-search-form filter-border">
        <i class="mdi mdi-magnify icons"></i>
        <input name="project" type="text" id="project-<?php echo e($type); ?>" class="border-0 form-input filter-input-box bg-gray-50 dark:bg-slate-800" autocomplete="off" placeholder="<?php echo e(__('Search your project')); ?>" data-url="<?php echo e(route('public.ajax.projects-filter')); ?>" value="<?php echo e(BaseHelper::stringify(request()->query('project'))); ?>">
        <i class="absolute hidden mdi mdi-loading mdi-spin top-5 end-5"></i>
    </div>
</div>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/filters/by-project.blade.php ENDPATH**/ ?>