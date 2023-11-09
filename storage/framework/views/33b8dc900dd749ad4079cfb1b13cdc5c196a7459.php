<?php switch($style ?? 1):
    case (2): ?>
        <div class="flex items-center">
            <div class="rating-star">
                <span class="rating-star-item" style="width: <?php echo e($avgStar * 20); ?>%"></span>
            </div>
            <p class="mt-2 text-sm font-medium text-gray-500 dark:text-gray-400"><?php echo e(__(':avg out of 5', ['avg' => number_format($avgStar, 1)])); ?></p>
        </div>
        <?php break; ?>
    <?php default: ?>
        <div class="mb-0 text-lg font-medium list-none ps-0">
            <div class="rating-star">
                <span class="rating-star-item" style="width: <?php echo e($avgStar * 20); ?>%"></span>
            </div>
            <div class="inline text-black dark:text-white text-sm">(<?php echo e(number_format($count)); ?>)</div>
        </div>
        <?php break; ?>
<?php endswitch; ?>
<?php /**PATH /var/www/admin/platform/themes/hously/views/real-estate/partials/review-star.blade.php ENDPATH**/ ?>