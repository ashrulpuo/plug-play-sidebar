<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">Menu</li>
            @foreach ($menus as $menu)
            @if(!empty($menu['visible']) && empty($menu['order']))
            <li class="nav-item">
                <a href="{{ $menu['url'] }}" class="nav-link">
                    <i class="{{ $menu['icon'] }}"></i>
                    <p>
                        {{ $menu['label'] }}
                    </p>
                </a>
            </li>
            @endif
            @endforeach
            <li class="nav-header">Tetapan</li>
            @foreach ($menus as $menu)
            @if(!empty($menu['order']))
            <li class="nav-item">
                <a href="{{ $menu['url'] }}" class="nav-link">
                    <i class="{{ $menu['icon'] }}"></i>
                    <p>
                        {{ $menu['label'] }}
                    </p>
                </a>
            </li>
            @endif
            @endforeach
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>