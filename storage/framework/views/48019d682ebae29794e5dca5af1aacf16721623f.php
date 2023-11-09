<?php if (! $__env->hasRenderedOnce('1addf47e-e41e-427b-96be-5f886f0c247e')): $__env->markAsRenderedOnce('1addf47e-e41e-427b-96be-5f886f0c247e'); ?>
    <li class="dropdown dropdown-extended dropdown-inbox">
        <a href="<?php echo e(route('notifications.get-notification')); ?>" data-href="<?php echo e(route('notifications.update-notifications-count')); ?>" id="open-notification" class="dropdown-toggle dropdown-header-name">
            <input type="hidden" value="1" class="current-page">
            <i class="fas fa-bell"></i>
            <?php if($countNotificationUnread): ?>
                <span class="badge badge-default"> <?php echo e($countNotificationUnread); ?> </span>
            <?php endif; ?>
        </a>
    </li>
<?php endif; ?>

<?php /**PATH /var/www/admin/platform/core/base/resources/views/notification/notification.blade.php ENDPATH**/ ?>