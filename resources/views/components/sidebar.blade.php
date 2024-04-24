<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
          <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
            @if (auth()->user()->role == 'Admin'||auth()->user()->role == 'Petugas')
          <li class="sidebar-item">
            <a class="sidebar-link" {{ request()->is('transaksi') ? 'active bg-gradient-primary' : '' }} " href="{{route('transaksi')}}">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Transaksi</span>
            </a>
          </li>
          @endif
          <li class="sidebar-item">
            <a class="sidebar-link" {{ request()->is('konsumen') ? 'active bg-gradient-primary' : '' }}" href="{{route('konsumen')}}">
              <span>
                <i class="ti ti-article"></i>
              </span>
              <span class="hide-menu">Daftar Konsumen</span>
            </a>
          </li>
          @if (auth()->user()->role == 'Admin')
          <li class="sidebar-item">
            <a class="sidebar-link" {{ request()->is('layanan') ? 'active bg-gradient-primary' : '' }}" href="{{route('layanan')}}">
              <span>
                <i class="ti ti-alert-circle"></i>
              </span>
              <span class="hide-menu">Layanan</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" {{ request()->is('pengguna') ? 'active bg-gradient-primary' : '' }}" href="{{route('pengguna')}}">
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Daftar Pengguna</span>
            </a>
          </li>
          @endif
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
