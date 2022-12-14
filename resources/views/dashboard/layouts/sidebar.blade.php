<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column mt-2">
      
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/user') || Request::is('dashboard/user/*') ? 'active text-light' : 'text-secondary' }}" aria-current="page" href="/dashboard/user">
          <span data-feather="user" class="align-text-bottom"></span>
          My Profile
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active text-light' : 'text-secondary' }}" aria-current="page" href="/dashboard">
          <span data-feather="file-text" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-secondary {{ Request::is('dashboard/posts*') ? 'active text-light' : 'text-secondary' }}" href="/dashboard/posts">
          <span data-feather="layout" class="align-text-bottom"></span>
          My Posts
        </a>
      </li>

      <hr class="text-primary">

      <li class="nav-item mx-3">
        <div class="form-check form-switch">
          <input type="checkbox" class="form-check-input" id="darkSwitch" />
          <label class="custom-control-label" for="darkSwitch"><i class="bi bi-circle-half"></i></label>
        </div>

      </li>

      <li class="nav-item">
        <a class="nav-link text-secondary" aria-current="page" href="/posts">
          <span data-feather="layers" class="align-text-bottom"></span>
          Leave Dashboard
        </a>
      </li>

      <li class="nav-item">
        <form action="{{ route('logout.logoutSubmit') }}" method="POST">
          @csrf
    
          <button type="submit" class="nav-link text-secondary bg-transparent border-0">
            <span data-feather="log-out" class="align-text-bottom">
            </span> Log out
          </button>
        </form>
      </li>

      @can('admin')

      <hr class="text-danger">
      
      <li class="nav-item">
        <a class="nav-link text-danger" aria-current="page">
          <span data-feather="user" class="align-text-bottom text-danger"></span>
          Administrator
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-secondary d-flex flex-row" aria-current="page">
          ?????????
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active text-light' : 'text-secondary' }}" aria-current="page" href="/dashboard/categories">
          <span data-feather="columns" class="align-text-bottom"></span>
          Manage Categories
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/users*') ? 'active text-light' : 'text-secondary' }}" aria-current="page" href="/dashboard/users">
          <span data-feather="users" class="align-text-bottom"></span>
          Manage Users
        </a>
      </li>
      @endcan

    </ul>
  </div>
</nav>