<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    
    <div class="sidebar-brand-text mx-3">
        @auth
        <span class="text-white">{{ auth()->user()->name }}</span>
        @endauth
    </div>
</a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>



    <!-- Nav Item - Charts -->
    @auth
    @if(auth()->user()->role === 'admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.getallusers') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>User</span>
            </a>
        </li>
    @endif
@endauth


@auth
    @if(auth()->user()->role === 'admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.getpages_created') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Pages</span>
            </a>
        </li>
    @endif
@endauth

@auth
    @if(auth()->user()->role === 'admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.plans') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Plans</span>
            </a>
        </li>
    @endif
@endauth


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->