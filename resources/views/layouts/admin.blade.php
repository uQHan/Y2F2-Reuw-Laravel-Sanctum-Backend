<!DOCTYPE html>
<html lang="en">

<head>
  @yield('title')
  <title>Reuw</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @include('library.head')
</head>

<body class="body-cover bg-light">
  <header>
    @yield('head')
  </header>
  <main>
    <div class="container-fluid bg-light border-right-1">
      <div class="row">
        @include('components.dashboard_sidebar')
        <div class="col-10 bg-black container">
          <div class="bg-light text-end p-4 fs-5 mb-3"><span class="text-secondary">Dashboard / </span>@yield('dashpath')</div>
          @yield('content')
        </div>
      </div>
    </div>
  </main>

  <!-- Bootstrap JavaScript Libraries -->
  @include('library.script')
  @yield('js')
</body>

</html>