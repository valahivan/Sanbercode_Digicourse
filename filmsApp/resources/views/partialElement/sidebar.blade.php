<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
      <div class="image">
        <img src="{{asset('admin_template/dist/img/user2-160x160.jpg')}}" class="img-fluid rounded-circle" alt="User Image">
      </div>
      <div class="info">
        @auth
          <span class="text-white">{{Auth::user()->name}}</span>
        @endauth
        @guest
          <span class="text-white">Belum Login</span>
        @endguest
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="/" class="nav-link text-white">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
           </li>
            @auth
            <li class="nav-item">
              <a href="#" class="nav-link text-white">
                <i class="nav-icon fas fa-th"></i>
                <p>Genre <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/genre" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Genre</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/genre/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Genres</p>
                  </a>
                </li>
              </ul>
            </li>
            @endauth
            <li class="nav-item">
              <a href="#" class="nav-link text-white">
                <i class="nav-icon fas fa-book"></i>
                <p>Films <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/film" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Films</p>
                  </a>
                </li>
                @auth
                <li class="nav-item">
                  <a href="/film/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Films</p>
                  </a>
                </li>
                @endauth
              </ul>
            </li>
            @auth
            <li class="nav-item">
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-block my-3 text-white border border-2 border-white">Logout</button>
              </form>
            </li>
            @endauth
            @guest
              <a href="/login" class="btn btn-block my-3 text-white border border-2 border-white">Login Sekarang</a>
            @endguest
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>