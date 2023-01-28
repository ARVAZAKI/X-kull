         <ul class="navbar-nav bg-cstm sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon">
                    {{-- <i class="fas fa-running"></i> --}}
                    <img src="logosekolah.png" alt="" width="50" height="50">
                </div>
                <div class="sidebar-brand-text mx-3">X-kull</div>
            </a>

            @if(auth()->user()->role == 'admin')
            <!-- Divider -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
          <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="/ekstrak">
                    <i class="fas fa-list"></i>
                    <span>Ekstra</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="/pelatih">
                    <i class="fas fa-head-side-cough"></i>
                    <span>Pelatih</span></a>
            </li>
            @endif
            @if(auth()->user()->role == 'siswa')
            <!-- Divider -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboardsiswa">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
          <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="/ekstrasiswa">
                    <i class="fas fa-list"></i>
                    <span>Ekstra</span></a>
            </li>
            @endif
            @if(auth()->user()->role == '')
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            @endif


<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
