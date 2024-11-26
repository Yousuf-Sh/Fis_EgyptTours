  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboarde</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('add.event')}}">
        <i class="bi bi-journal-text"></i>
          <span>Create Events</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('manage.event')}}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Manage Events</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link " href="index-admin.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard Admin</span>
        </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('manage.user')}}">
        <i class="bi bi-person"></i>
          <span>Users</span>
        </a>
      
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('manage.chapter')}}">
              <i class="bi bi-circle"></i><span>Chapter</span>
            </a>
          </li>
          <li>
            <a href="{{route('manage.category')}}">
              <i class="bi bi-circle"></i><span>Categories</span>
            </a>
          </li>
          <li>
            <a href="{{route('manage.type')}}">
              <i class="bi bi-circle"></i><span>Type</span>
            </a>
          </li>
          <li>
            <a href="{{route('manage.location')}}">
              <i class="bi bi-circle"></i><span>Location</span>
            </a>
          </li>
          
        </ul>
      </li>
      

    </ul>

  </aside><!-- End Sidebar-->