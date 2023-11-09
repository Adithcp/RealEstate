<?php
    $navStyle = Theme::get('navStyle');
    $navClass = $navStyle === 'light' ? ' nav-light' : null;

    $logoLight = theme_option('logo');
    $logoDark = theme_option('logo_dark');
    $defaultLogo = theme_option('logo');
    $siteName = theme_option('site_title');
?>

<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <a class="logo" href="<?php echo e(route('public.index')); ?>" title="<?php echo e($siteName); ?>">
            <?php switch($navStyle):
                case ('light'): ?>
                    <span class="inline-block dark:hidden">
                        <?php if($logoLight || $logoDark): ?>
                            <img src="<?php echo e(RvMedia::getImageUrl($logoDark)); ?>" class="l-dark" height="28" alt="<?php echo e($siteName); ?>">
                            <img src="<?php echo e(RvMedia::getImageUrl($logoLight)); ?>" class="l-light" height="28" alt="<?php echo e($siteName); ?>">
                        <?php else: ?>
                            <img src="<?php echo e(RvMedia::getImageUrl($defaultLogo)); ?>" height="28" alt="<?php echo e($siteName); ?>">
                        <?php endif; ?>
                    </span>
                    <?php if($logoLight): ?>
                        <img src="<?php echo e(RvMedia::getImageUrl($logoLight)); ?>" height="28" class="hidden dark:inline-block" alt="<?php echo e($siteName); ?>">
                    <?php else: ?>
                        <img src="<?php echo e(RvMedia::getImageUrl($defaultLogo)); ?>" height="28" alt="<?php echo e($siteName); ?>">
                    <?php endif; ?>
                    <?php break; ?>
                <?php default: ?>
                    <?php if($logoLight || $logoDark): ?>
                        <img src="<?php echo e(RvMedia::getImageUrl($logoDark)); ?>" height="28" class="inline-block dark:hidden" alt="<?php echo e($siteName); ?>">
                        <img src="<?php echo e(RvMedia::getImageUrl($logoLight)); ?>" height="28" class="hidden dark:inline-block" alt="<?php echo e($siteName); ?>">
                    <?php else: ?>
                        <img src="<?php echo e(RvMedia::getImageUrl($defaultLogo)); ?>" height="28" alt="<?php echo e($siteName); ?>">
                    <?php endif; ?>
                    <?php break; ?>
            <?php endswitch; ?>
        </a>

        <div class="menu-extras">
            <div class="menu-item">
                <button type="button" class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>
        </div>

        <?php if(is_plugin_active('real-estate')): ?>
            <ul class="p-0 space-x-4 m-0 list-none buy-button">
                <?php echo Theme::partial('language-switcher.language-switcher'); ?>

                <?php if(RealEstateHelper::isLoginEnabled()): ?>
                    <li class="inline mb-0">
                        <a href="<?php echo e(route('public.account.login')); ?>" class="text-white rounded-full btn btn-icon bg-primary hover:bg-secondary border-primary dark:border-primary" aria-label="<?php echo e(__('Sign in')); ?>">
                            <i data-feather="user" class="h-4 w-4 stroke-[3]"></i>
                        </a>
                    </li>
                    <li class="hidden mb-0 sm:inline ps-1">
                        <a href="<?php echo e(route('public.account.properties.index')); ?>" class="text-white rounded-full btn bg-primary hover:bg-secondary border-primary dark:border-primary" aria-label="<?php echo e(__('Add your listing')); ?>">
                            <?php echo e(__('Add your listing')); ?>

                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        <?php endif; ?>

        <div id="navigation">
            <?php echo Menu::renderMenuLocation('main-menu', [
                    'options' => ['class' => 'navigation-menu justify-end' . $navClass],
                    'view' => 'main-menu',
                ]); ?>

            <ul class="navigation-menu">
                <?php echo Theme::partial('language-switcher.language-switcher-mobile'); ?>

            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/topnav.blade.php ENDPATH**/ ?>