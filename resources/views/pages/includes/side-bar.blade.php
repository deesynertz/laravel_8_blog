<nav id="sidebar" aria-label="Main Navigation">
  <!-- Side Header -->
  <div class="content-header bg-white-5">
      <!-- Logo -->
      <a class="font-w600 text-dual" href="{{ route('dashboard') }}">
          <span class="smini-visible text-center">
            <img src="{{ asset('media/favicons/deesynertz32x32.png') }}" 
            class="m-0" alt="logo">
          </span>

          <span class="smini-hide font-size-h5 tracking-wider">
              {{ config('app.name') }}<span class="font-w400"></span>
          </span>
      </a>
      <!-- END Logo -->

  </div>
  <!-- END Side Header -->

  <!-- Sidebar Scrolling -->
  <div class="js-sidebar-scroll">
      <!-- Side Navigation -->
      <div class="content-side">
          <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link {{ request()->is('dashboard') ? ' active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
            </li>
            
            <li class="nav-main-item open">
                <a class="nav-main-link {{ 
                request()->is('project') ? ' active' : 
                request()->is('project/create') ? ' active' : 
                request()->is('project/edit') ? ' active' : '' }}" 
                href="/project">
                    <i class="nav-main-link-icon fa fa-cubes"></i>
                    <span class="nav-main-link-name">Projects</span>
                </a>
            </li>
            <li class="nav-main-heading">More</li>
            <li class="nav-main-item open">
                <a class="nav-main-link" href="/" target="_blank">
                    <i class="nav-main-link-icon si si-globe"></i>
                    <span class="nav-main-link-name">View Site</span>
                </a>
            </li>
          </ul>
      </div>
      <!-- END Side Navigation -->
  </div>
  <!-- END Sidebar Scrolling -->
</nav>





{{-- <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
        <i class="nav-main-link-icon si si-bulb"></i>
        <span class="nav-main-link-name">Examples</span>
    </a>
    <ul class="nav-main-submenu">
        <li class="nav-main-item">
            <a class="nav-main-link {{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                <span class="nav-main-link-name">DataTables</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}" href="/pages/slick">
                <span class="nav-main-link-name">Slick Slider</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
                <span class="nav-main-link-name">Blank</span>
            </a>
        </li>
    </ul>
</li> --}}