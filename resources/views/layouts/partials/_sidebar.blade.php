<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false"
                aria-controls="error">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Look Up</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('lookups.index') }}">List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('lookups.create') }}">Create New</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#" aria-expanded="false">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Customers</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('customers.index') }}">List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('customers.create') }}">Create New</a></li>
                </ul>
            </div>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="../../../docs/documentation.html">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li> --}}
    </ul>
</nav>
