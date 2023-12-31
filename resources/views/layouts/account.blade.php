<!DOCTYPE html>
<html lang="en">

<head>
    @yield('title')
    <title>Account</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('library.head')
    @yield('css')
</head>

<body>
    <main>
        <div class="container-fluid">
            <a href="mailto:hanng.22ite@vku.udn.vn" class="text-decoration-none text-black">
                <p class="text-end">hanng.22ite@vku.udn.vn</p>
            </a>
            @yield('content')
        </div>
    </main>
    <footer>
        @include('components.footer')
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    @include('library.script')
    @yield('js')
</body>

</html>