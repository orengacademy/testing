<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      @guest
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

      </ul>
      @endguest


      @auth
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <!-- <li><img src="{{ URL('storage/Logo-OrenG.png') }}" width="20" height="30", class="card-img-top" alt="..."> -->
        <li><a href="/" class="nav-link px-2 text-secondary">Dashboard</a></li>
        @can('isAdmin')
        <li><a href="/engineer" class="nav-link px-2 text-white">Engineer</a></li>
<<<<<<< Updated upstream
        <li><a href="/calendar" class="nav-link px-2 text-white">Calendar</a></li>
=======
        @endcan
        <li><a href="/calendar" class="nav-link px-2 text-white">Calendar</a></li>       
>>>>>>> Stashed changes
        <li><a href="/project" class="nav-link px-2 text-white">Project</a></li>
        <li><a href="/report" class="nav-link px-2 text-white">Report</a></li>
        <li><a href="/profile" class="nav-link px-2 text-white">Profile</a></li>
        <li><a href="/leave" class="nav-link px-2 text-white">Leave</a></li>
        <li><a href="/leave" class="nav-link px-2 text-white">Payslips</a></li>
        <li><a href="/leave" class="nav-link px-2 text-white">User Management</a></li>
        <!-- <li><a href="#" class="nav-link px-2 text-white">User Management</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Leave</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Payslips</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Profile</a></li> -->
      </ul>

      {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form> --}}


        <div class="text-end">
          <!-- <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Project</a>
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Report</a>
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">User Management</a>
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Leave</a>
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Payslips</a> -->
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>
