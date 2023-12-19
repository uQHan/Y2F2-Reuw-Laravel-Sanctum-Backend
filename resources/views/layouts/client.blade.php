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
						<div class="float-end float-md-none">
							<a href="" class="btn btn-outline-dark border-0 rounded-5 text-decoration-none m-1 m-md-2">
								<i class="fa-solid fa-spider p-1 p-md-2" style="font-size: 32px;"></i>
							</a>
						</div>
						<div class="float-end float-md-none">
							<a href="" class="btn btn-outline-dark border-0 rounded-5 text-decoration-none m-1 m-md-2 py-2">
								<i class="fa-solid fa-house icon me-md-3"></i>
								<span class="fw-bold d-none d-md-inline"
									style="font-size: 24px; vertical-align: top">Home</span>
							</a>
						</div>
						<div class="float-end float-md-none">
							<a href="" class="btn btn-outline-dark border-0 rounded-5 text-decoration-none m-1 m-md-2 py-2">
								<i class="fa-solid fa-magnifying-glass icon me-md-3"></i>
								<span class="fw-bold d-none d-md-inline"
									style="font-size: 24px; vertical-align: top">Explore</span>
							</a>
						</div>
						<div class="float-end float-md-none">
							<a href="" class="btn btn-outline-dark border-0 rounded-5 text-decoration-none m-1 m-md-2 py-2">
								<i class="fa-regular fa-bookmark icon me-md-3"></i>
								<span class="fw-bold d-none d-md-inline"
									style="font-size: 24px; vertical-align: top">Bookmark</span>
							</a>
						</div>
						<div class="float-end float-md-none">
							<a href="" class="btn btn-outline-dark border-0 rounded-5 text-decoration-none m-1 m-md-2 py-2">
								<i class="fa-regular fa-user-circle icon me-md-3"></i>
								<span class="fw-bold d-none d-md-inline"
									style="font-size: 24px; vertical-align: top">Profile</span>
							</a>
						</div>
					</div>
				</div>
				<div class="main-content bg-secondary col-10 col-md-9 col-lg-7 cover text-white">
					{{-- border border-dark border-top-0 border-bottom-0 --}}
					@yield('content')
				</div>
				<div class="sidebar d-none d-lg-block col-lg-3">
					@yield('rightbar')
					<div class="pt-2 sticky-top">
						<div>
							@if (Auth::check())
							<a href="{{ url('logout') }}"
								class="float-end btn btn-outline-dark rounded-5 btn-light me-2"><b>Register</b></a>
							@endif
							@if (Auth::guest())
							<a href="{{ url('welcome') }}" 
								class="float-end btn btn-outline-dark rounded-5"><b>Log in</b></a>
							<a href="{{ url('welcome') }}"
								class="float-end btn btn-outline-dark rounded-5 btn-light me-2"><b>Register</b></a>
							@endif
						</div>
						<div class="container">
							<div class="input-group pt-5 rounded-5">
								<span class="input-group-text rounded-start-pill"><i class="fa fa-magnifying-glass"></i></span>
								<input type="text" class="form-control form-input rounded-end-pill"
									placeholder="Search anything...">
							</div>
							<div class="card mt-4 btn btn-outline-dark text-start">
								<div class="card-body">
									<h5 class="card-title">What's new?</h5>
									<p class="card-text">New thing appear every hour or so, so this is card is kinda meaningless
									</p>
								</div>
							</div>
							<div class="card mt-4 btn btn-outline-dark text-start">
								<div class="card-body">
									<h5 class="card-title">Recent update?</h5>
									<p class="card-text">Same as the above I think, man I really hope didnt prcastinate this much
									</p>
								</div>
							</div>
						</div>
					</div>
					{{-- <div class="pb-4 fixed-bottom">
						<button class="btn  border-0 rounded-5"><i class="fa fa-moon" style="font-size: 24px"></i></button>
					</div> --}}
				</div>
			</div>
		</div>
	</main>
	<footer>
		<!-- place footer here -->
	</footer>

	<!-- Bootstrap JavaScript Libraries -->
	@include('library.script')
	@yield('js')
</body>

</html>