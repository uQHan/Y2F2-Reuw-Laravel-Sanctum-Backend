<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moderator Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('library.head')
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container-fluid">
            <a href="mailto:hanng.22ite@vku.udn.vn" class="text-decoration-none text-black">
                <p class="text-end">hanng.22ite@vku.udn.vn</p>
            </a>
            <div class=" row">
                <div class="col-12 col-lg-4 offset-lg-4 cover">
                    <div class="d-flex flex-column align-items-center justify-content-center my-5 row">
                        <div class="text-center">
                            <a href="#" class="btn emp-block border-0 rounded-5 text-decoration-none m-1 m-md-2">
                                <i class="fa-solid fa-spider p-1 p-md-2" style="font-size: 32px; color: red"></i>
                            </a>
                        </div>
                        <div class="pt-5" id="loginHeader">
                            <h3 class="text-center mb-5" href="#loginForm">Moderator Login</h3>
                        </div>
                        <div class="col-12 col-lg-8" id="loginForm">
                            <form aria-labelledby="loginHeader">
                                @csrf
                                {{-- <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="loginEmail">
                                    <label for="loginEmail">Email address</label>
                                </div> --}}
                                <div class="form-group mb-3">
                                    <label for="email">Email*</label> 
                                    <input name="email" type="email" class="form-control" placeholder="Enter email">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="passoword">Password* </label>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                                <div class="d-flex justify-content-around mt-3">
                                    <button type="submit"
                                        class="btn w-50 m-2 rounded-0 btn-outline-dark fw-bold">Log
                                        In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-black text-white p-5">
        <div class="container row px-5">
            <div class="col">
                <strong>About</strong>
                <ul class="list-unstyled pt-2" style="line-height: 1.6rem;">
                    <li>Creator: Nguyen Gia Han (22IT.EB018)</li>
                    <li>Gmail:
                        <a href="mailto:hanng.22ite@vku.udn.vn" class="text-white">
                            hanng.22ite@vku.udn.vn
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <strong>Made with</strong>
                <ul class="list-unstyled pt-2" style="line-height: 1.6rem;">
                    <li>
                        <a href="https://laravel.com/docs/10.x" class="text-white">
                            Laravel 10.x
                        </a>
                    </li>
                    <li>
                        <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" class="text-white">
                            Bootstrap v5.3
                        </a>
                    </li>
                    <li>
                        <a href="https://jscroll.com/#/" class="text-white">
                            jScroll
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    @include('library.script')
    <script>
        function myFunction()
          {
                alert("I am an alert box!")
            }
    </script>
</body>

</html>