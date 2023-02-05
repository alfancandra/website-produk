<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('adm.dashboardadmin') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Data</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('adm.produk.index') }}">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Produk</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('adm.pemesanan.index') }}">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Pemesanan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('adm.info.index') }}">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Info</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('adm.user.index') }}">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">User</span>
            </a>
        </li>
        
    </ul>
</nav>
