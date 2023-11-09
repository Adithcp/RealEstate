<?php if(is_plugin_active('language')): ?>
    <?php
        $supportedLocales = Language::getSupportedLocales();
    ?>
    <?php if($supportedLocales && count($supportedLocales) > 1): ?>
        <?php
            $languageDisplay = setting('language_display', 'all');
        ?>
        <li class="inline-block pe-2 wrapper-dropdown-language-switcher h-16 ps-5 hidden lg:inline-block">
            <div class="relative">
                <?php if(setting('language_switcher_display', 'dropdown') == 'dropdown'): ?>
                    <button type="button" class="flex items-center w-full px-2 py-2 font-medium text-gray-700 rounded-md language-switcher-nav-light dark:text-white hover:text-primary" id="button-language-switcher" aria-expanded="true" aria-haspopup="true">
                        <?php if(($languageDisplay == 'all' || $languageDisplay == 'flag')): ?>
                            <span>
                                <?php echo language_flag(Language::getCurrentLocaleFlag(), Language::getCurrentLocaleName()); ?>

                            </span>
                        <?php endif; ?>
                        <?php if(($languageDisplay == 'all' || $languageDisplay == 'name')): ?>
                            <span class="leading-none mt-[2px] ms-2">
                                <?php echo e(Language::getCurrentLocaleName()); ?>

                            </span>
                        <?php endif; ?>
                        <i class="mt-1 ms-2 font-weight-[700] leading-none mdi mdi-chevron-down"></i>
                    </button>
                    <div class="absolute end-0 z-10 w-40 mt-2 transition duration-100 ease-out origin-top-right transform scale-95 bg-white rounded-md shadow-md opacity-0 dropdown-language-switcher dark:shadow-slate-800 focus:outline-none dark:bg-slate-900" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <?php $__currentLoopData = $supportedLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($localeCode != Language::getCurrentLocale()): ?>
                                    <a href="<?php echo e(Language::getSwitcherUrl($localeCode, $properties['lang_code'])); ?>" class="flex items-center gap-2 px-4 py-2 leading-none text-gray-700 dark:text-white hover:text-primary" role="menuitem" tabindex="-1" id="menu-item-0">
                                        <?php if(($languageDisplay === 'all' || $languageDisplay === 'flag')): ?>
                                            <?php echo language_flag($properties['lang_flag'], $properties['lang_name']); ?>

                                        <?php endif; ?>
                                        <span class="mt-1 leading-none"><?php echo e($properties['lang_name']); ?></span>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php else: ?>
                    <?php $__currentLoopData = $supportedLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($localeCode != Language::getCurrentLocale()): ?>
                            <a href="<?php echo e(Language::getSwitcherUrl($localeCode, $properties['lang_code'])); ?>" class="w-full px-2 py-2 font-medium text-gray-700 rounded-md">
                                <?php if(($languageDisplay == 'all' || $languageDisplay == 'flag')): ?>
                                    <span class="inline-block"><?php echo language_flag($properties['lang_flag'], $properties['lang_name']); ?></span>
                                <?php endif; ?>
                                <?php if(($languageDisplay == 'all' || $languageDisplay == 'name')): ?>
                                    <span class="inline-block"><?php echo e($properties['lang_name']); ?></span>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/admin/platform/themes/hously/partials/language-switcher/language-switcher.blade.php ENDPATH**/ ?>