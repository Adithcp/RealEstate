<?php if(is_plugin_active('language')): ?>
    <?php
        $supportedLocales = Language::getSupportedLocales();
        $languageDisplay = setting('language_display', 'all');
    ?>
    <?php if($supportedLocales && count($supportedLocales) > 1): ?>
        <li class="has-submenu parent-menu-item lg:hidden">
            <a href="#" class="cursor-pointer" target="_self">
                <?php if(($languageDisplay == 'all' || $languageDisplay == 'flag')): ?>
                    <span class="inline-block">
                        <?php echo language_flag(Language::getCurrentLocaleFlag(), Language::getCurrentLocaleName()); ?>

                    </span>
                <?php endif; ?>
                <span class="inline-block">
                    <?php echo e(Language::getCurrentLocaleName()); ?>

                </span>
            </a>
            <span class="me-4 menu-arrow lg:me-0 top-[18px]"></span>
            <ul class="submenu">
                <?php $__currentLoopData = $supportedLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($localeCode != Language::getCurrentLocale()): ?>
                        <li>
                            <a href="<?php echo e(Language::getSwitcherUrl($localeCode, $properties['lang_code'])); ?>" target="_self" class="sub-menu-item">
                                <?php if(($languageDisplay == 'all' || $languageDisplay == 'flag')): ?>
                                    <span class="inline-block"><?php echo language_flag($properties['lang_flag'], $properties['lang_name']); ?></span>
                                <?php endif; ?>
                                <span class="inline-block"><?php echo e($properties['lang_name']); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/language-switcher/language-switcher-mobile.blade.php ENDPATH**/ ?>