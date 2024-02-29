<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #e8723b">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <img src="{{ asset('assets/img/logo.png') }}" alt="" width="100" height="auto">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        GIS Content
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('spot.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Spot</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('centre-point.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Center Point </span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Frontend Content
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('program.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Program</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('qna.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>QnA</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('team.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Team</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('partnership.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Partnership</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('event.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Event</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
