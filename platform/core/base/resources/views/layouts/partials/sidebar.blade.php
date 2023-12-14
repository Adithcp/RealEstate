@foreach ($menus = DashboardMenu::getAll() as $menu)
    @if(in_array($menu['id'],['cms-core-page', 'cms-plugins-newsletter', 'cms-plugins-consult', 'cms-plugins-package', 'cms-plugins-contact', 'cms-plugins-payments',  'cms-core-media', 'cms-core-appearance', 'cms-core-plugins', 'cms-plugin-translation', 'cms-core-platform-administration']))
        <?php continue; ?>
    @endif
    @php $menu = apply_filters(BASE_FILTER_DASHBOARD_MENU, $menu); @endphp
    <li class="nav-item @if ($menu['active']) active @endif" id="{{ $menu['id'] }}">
        <a href="{{ $menu['url'] }}" class="nav-link nav-toggle">
            <i class="{{ $menu['icon'] }}"></i>
            <span class="title">
                {{ !is_array(trans($menu['name'])) ? trans($menu['name']) : null }}
                {!! apply_filters(BASE_FILTER_APPEND_MENU_NAME, null, $menu['id']) !!}</span>
            @if (isset($menu['children']) && count($menu['children'])) <span class="arrow @if ($menu['active']) open @endif"></span> @endif
        </a>
        @if (isset($menu['children']) && count($menu['children']))
            <ul class="sub-menu @if (!$menu['active']) hidden-ul @endif">
                @foreach ($menu['children'] as $item)
                
                @if(($menu['id'] == 'cms-plugins-real-estate' && in_array($item['id'],['cms-plugins-real-estate-invoice','cms-plugins-real-estate-invoice-template','cms-plugins-real-estate-custom-fields','cms-plugins-real-estate-settings'])) || ($menu['id'] == 'cms-core-settings' && !in_array($item['id'],['cms-plugins-language'])) || ($menu['id'] == 'cms-plugins-blog' && in_array($item['id'],['cms-plugins-blog-categories', 'cms-plugins-blog-tags'])))
                    <?php continue; ?>
                @endif
                    <li class="nav-item @if ($item['active']) active @endif" id="{{ $item['id'] }}">
                        <a href="{{ $item['url'] }}" class="nav-link">
                            <i class="{{ $item['icon'] }}"></i>
                            {{ trans($item['name']) }}
                            {!! apply_filters(BASE_FILTER_APPEND_MENU_NAME, null, $item['id']) !!}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach
