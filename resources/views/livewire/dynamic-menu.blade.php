<ul class="nav-menu">
    @foreach($menus as $menu)
        <li class="{{ request()->routeIs($menu->route) ? 'active' : '' }}">
            <a href="{{ route($menu->route) }}">
                {{ $menu->{'name_' . session('locale')} ?? $menu->name_en }}
            </a>
        </li>
    @endforeach
</ul>
