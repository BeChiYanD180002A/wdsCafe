<br>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{ url('/home') }}"><img src="admin/assets/images/logo.png" alt="logo" style="width:50px;height:50px;" /></a>
        </div>
        <ul class="nav">
         
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>

            <a class="nav-link" href="{{url('/users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>

            <a class="nav-link" href="{{url('/foodmenu')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Food Menu</span>
            </a>
          </li>

            <a class="nav-link" href="{{url('/viewreservation')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Reservations</span>
            </a>
          </li>

            <a class="nav-link" href="{{url('/orders')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Orders</span>
            </a>
          </li>

        </ul>

      </nav>


