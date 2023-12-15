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
        <div class="container-fluid container-xxl bg-light">
            <div class="row">
                <div class="sidebar col-2 col-md-3 col-lg-2 text-secondary px-1">
                    <div class="sticky-top pt-5">
                    </div>
                </div>
                <div class="main-content bg-secondary col-10 col-md-9 col-lg-7 
					{{-- border border-dark border-top-0 border-bottom-0  --}}
					cover text-white">
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