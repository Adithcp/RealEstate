<li class="relative md:flex md:flex-1">
    <?php if((Request::is('install/environment') || Request::is('install/environment/save') || Request::is('install/account')) && $currentStep !== 3): ?>
        <a href="<?php echo e(URL::signedRoute('installers.environment', [], \Carbon\Carbon::now()->addMinutes(30))); ?>" class="group flex w-full items-center">
            <span class="flex items-center px-6 py-4 text-sm font-medium">
                <?php if($currentStep == 3): ?>
                    <span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-indigo-600 group-hover:border-indigo-400">
                        <span class="text-gray-500 group-hover:text-gray-900">03</span>
                    </span>
                    <span class="ms-4 text-sm font-medium text-indigo-600"><?php echo trans('packages/installer::installer.environment.wizard.title'); ?></span>
                <?php elseif($currentStep > 3): ?>
                    <span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-indigo-600 group-hover:bg-indigo-800">
                        <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span class="ms-4 text-sm font-medium text-indigo-600"><?php echo trans('packages/installer::installer.environment.wizard.title'); ?></span>
                <?php else: ?>
                    <span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-gray-300 group-hover:border-gray-400">
                        <span class="text-gray-500 group-hover:text-gray-900">03</span>
                    </span>
                    <span class="ms-4 text-sm font-medium text-gray-900"><?php echo trans('packages/installer::installer.environment.wizard.title'); ?></span>
                <?php endif; ?>
            </span>
        </a>
    <?php else: ?>
        <span class="flex items-center px-6 py-4 text-sm font-medium">
            <?php if($currentStep == 3): ?>
                <span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-indigo-600 group-hover:border-indigo-400">
                    <span class="text-gray-500 group-hover:text-gray-900">03</span>
                </span>
                <span class="ms-4 text-sm font-medium text-indigo-600"><?php echo trans('packages/installer::installer.environment.wizard.title'); ?></span>
            <?php elseif($currentStep > 3): ?>
                <span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-indigo-600 group-hover:bg-indigo-800">
                    <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                    </svg>
                </span>
                <span class="ms-4 text-sm font-medium text-indigo-600"><?php echo trans('packages/installer::installer.environment.wizard.title'); ?></span>
            <?php else: ?>
                <span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-gray-300 group-hover:border-gray-400">
                <span class="text-gray-500 group-hover:text-gray-900">03</span>
            </span>
            <span class="ms-4 text-sm font-medium text-gray-900"><?php echo trans('packages/installer::installer.environment.wizard.title'); ?></span>
            <?php endif; ?>
        </span>
    <?php endif; ?>

    <div class="absolute top-0 right-0 hidden h-full w-5 md:block" aria-hidden="true">
        <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
            <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round" />
        </svg>
    </div>
</li>
<?php /**PATH /var/www/admin/platform/packages/installer/resources/views/partials/step-3.blade.php ENDPATH**/ ?>