<?php
    Theme::set('pageCoverImage', $page->getMetaData('cover_image', true));
    Theme::set('pageDescription', $page->description);
    Theme::set('navStyle', $page->getMetaData('navbar_style', true));
?>

<?php echo apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, Html::tag('div', BaseHelper::clean($page->content), ['class' => 'ck-content'])->toHtml(), 
$page); ?>

<?php /**PATH /var/www/admin/platform/themes/hously/views/page.blade.php ENDPATH**/ ?>