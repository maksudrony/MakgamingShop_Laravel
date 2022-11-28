
      
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        {{-- <a class="sidebar-brand brand-logo" href=""><img src="assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href=""><img src="assets/images/logo-mini.svg" alt="logo" /></a> --}}
        <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
          <h1 class="fw-bold m-0 text-primary">Mak<span class="text-white">Gaming</span></h1>
      </a>
      </div>
      
      <ul class="nav">
          
        
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/users') }}">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Users</span>
          </a>
        </li>
        
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/gpumenu') }}">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Gpu</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/rammenu') }}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Ram</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/keyboardmenu') }}">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Keyboard</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/monitormenu') }}">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Monitor</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/viewcontact') }}">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Contact</span>
          </a>
        </li>
        
      </ul>
    </nav>
    
     