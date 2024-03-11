<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Sampah</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SH</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown ">
                {{-- jika di klik link active --}}

                <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">Data Manajemen User</li>
            <li class="dropdown" >
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Data User</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link " href="#">Data User</a></li>
                    <li><a class="nav-link {{ request()->is('role/*') ? 'active' : '' }}" href="{{ route('role.index') }}">Atur Role</a></li>
                </ul>
            </li>


            <li class="menu-header">Data Master</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Menu Master</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('category.index') }}">Data Kategori</a></li>
                    <li><a class="nav-link" href="{{ route('items.index') }}">Data Item</a></li>
                </ul>
            </li>
            <li class="menu-header">Pages</li>
            <li class=active><a class="nav-link" href="blank.html"><i class="far fa-square"></i>
                    <span>Blank Page</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
