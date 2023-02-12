         <ul class="navbar-nav bg-cstm sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            @if(auth()->user()->role == 'admin')
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon">
                    {{-- <i class="fas fa-running"></i> --}}
                    <img src="logosekolah.png" alt="" width="50" height="50">
                </div>
                <div class="sidebar-brand-text mx-3">X-kull</div>
            </a>
            @endif
            @if(auth()->user()->role == 'siswa')
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboardsiswa">
                <div class="sidebar-brand-icon">
                    {{-- <i class="fas fa-running"></i> --}}
                    <img src="logosekolah.png" alt="" width="50" height="50">
                </div>
                <div class="sidebar-brand-text mx-3">X-kull</div>
            </a>
            @endif
            @if(auth()->user()->role == 'pelatih')
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/ekstrapelatih">
                <div class="sidebar-brand-icon">
                    {{-- <i class="fas fa-running"></i> --}}
                    <img src="logosekolah.png" alt="" width="50" height="50">
                </div>
                <div class="sidebar-brand-text mx-3">X-kull</div>
            </a>
            @endif
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
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users"></i>
                    <span>Akun</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar akun:</h6>
                        <a class="collapse-item" href="/akunadmin">Admin</a>
                        <a class="collapse-item" href="/akunsiswa">Siswa</a>
                        <a class="collapse-item" href="/akunpelatih">Pelatih</a>
                    </div>
                </div>
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
            @if(auth()->user()->role == 'pelatih')
            <li class="nav-item">
                <a class="nav-link" href="/ekstrapelatih">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="/pelatihekstra">
                    <i class="fas fa-list"></i>
                    <span>Ekstra</span></a>
            </li>
            @endif


<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
