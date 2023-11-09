<?php if (! $__env->hasRenderedOnce('fc1468ca-fa0c-4ed8-96cc-c86c6285a80e')): $__env->markAsRenderedOnce('fc1468ca-fa0c-4ed8-96cc-c86c6285a80e'); ?>
    <div id="admin-notification">
        <div id="notification-sidebar" class="sidebar show-notification-sidebar">
            <a class="close-btn" id="close-notification"><i class="fa fa-times"></i></a>

            <h2 class="title-notification-heading"><?php echo e(trans('core/base::notifications.notifications')); ?></h2>
            <p class="action-notification" <?php if(isset($adminNotifications) && count($adminNotifications)): ?> style="display: block" <?php endif; ?>>
                <a class="me-2 mark-read-all" href="<?php echo e(route('notifications.read-all-notification')); ?>"><?php echo e(trans('core/base::notifications.mark_as_read')); ?></a>
                <span><a class="delete-all-notifications" href="<?php echo e(route('notifications.destroy-all-notification')); ?>"><?php echo e(trans('core/base::notifications.clear')); ?></a></span>
            </p>
            <ul class="list-group list-item-notification"></ul>
        </div>
        <div class="has-loading" id="loading-notification" style="display: none;"><i class="fa fa-spinner fa-spin"></i></div>
    </div>

    <div id="sidebar-notification-backdrop"></div>
<?php endif; ?>

<?php /**PATH /var/www/admin/platform/core/base/resources/views/notification/notification-content.blade.php ENDPATH**/ ?>