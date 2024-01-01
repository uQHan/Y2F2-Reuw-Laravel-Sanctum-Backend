<div class="col-2 bg-black">
  <div class="d-flex flex-column flex-shrink-0 p-3 bg-light cover sticky-top">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <span class="fs-4 ms-5">Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="{{ url('/dashboard') }}" class="nav-link link-dark">
          <i class="fa-solid fa-house icon me-md-3"></i>
          Index
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/list-users') }}" class="nav-link link-dark">
          <i class="fa-regular fa-user-circle icon me-md-3"></i>
          User
        </a>
      </li>
      <li>
        <a href="{{ url('/list-blogs') }}" class="nav-link link-dark">
          <i class="fa-solid fa-book-open icon me-md-3"></i>
          Blog
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2"
        data-bs-toggle="dropdown" aria-expanded="false">
        <img class="rounded-circle me-md-2 object-fit-cover" width="40px" height="40px"
          src="{{ asset('client/image/pfp/'. auth()->user()->settings->pfp_url)}}" alt="pfp">
        <strong class="d-none d-md-inline">{{ auth()->user()->settings->username }}</strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a href="{{ url('home') }}" class="dropdown-item" href="#">Client view</a></li>
        <li><a href="{{ url('logout') }}" class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
</div>