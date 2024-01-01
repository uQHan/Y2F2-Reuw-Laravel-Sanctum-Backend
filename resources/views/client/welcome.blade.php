<!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@include('library.head')
</head>

<body>
	<header>
		<!-- place navbar here -->
	</header>
	<main>
		<div class="container-fluid">
			<div class=" row">
				<div class="col-12 col-md-7 welcome-blue-gradient cover">
					<p class="fw-bold text-white text-center align-middle mt-5" style="font-size: 42px;">
						<br>
						<br>
						<br>
						Welcome to <span class="emp-block">Reuw</span>
						<br>
						<br>
						<br>
						Login or Sign up
						<br>
						to continue
					</p>
					@if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="alert alert-warning col-6 offset-3 mt-4">{{$error}}</p>
                @endforeach
                @endif
				</div>
				<div class="col-12 col-md-5 cover">
					<a href="mailto:hanng.22ite@vku.udn.vn" class="text-decoration-none text-black">
						<p class="text-end">hanng.22ite@vku.udn.vn</p>
					</a>

					<div class="d-flex flex-column align-items-center justify-content-center m-5 row">
						<div class="text-center">
							<a href="#" class="btn emp-block border-0 rounded-5 text-decoration-none m-1 m-md-2">
								<i class="fa-solid fa-spider p-1 p-md-2" style="font-size: 32px;"></i>
							</a>
						</div>
						<div class="accordion accordion-flush col-12 col-lg-10" id="welcomeForm">
							<div class="accordion-item">
								<div class="accordion-header pt-5" id="loginHeader">
									<h3 class="text-center mb-5" data-bs-toggle="collapse" href="#loginForm" role="button"
										aria-expanded="true" aria-controls="loginForm">Log in</h3>
								</div>
								<div id="loginForm" class="accordion-collapse collapse show" data-bs-parent="#welcomeForm">
									<div class="accordion-body">
										<form class="container" aria-labelledby="loginHeader" method="post" action="/login">
											@csrf
											<div class="form-group mb-2">
												Email*
												<input name="loginEmail" type="email" class="form-control"
													placeholder="Enter email">
												@error('email')
												<div class="text-danger">{{ $message }}</div>
												@enderror
											</div>
											<div class="form-group mb-2">
												Password*
												<input name="loginPassword" type="password" class="form-control"
													placeholder="Password">
											</div>
											<div class="d-flex justify-content-between">
												<label>
													<input name="loginRemember" type="checkbox"> Remember Me
												</label>
												<label class="pull-right">
													<a href="#" class="text-decoration-none link-secondary">Forgotten Password?</a>
												</label>
											</div>
											<div class="d-flex justify-content-around mt-3">
												<button type="submit"
													class="btn w-50 m-2 rounded-0 btn-outline btn-outline-dark fw-bold">Log
													In</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-header pt-5" id="registerHeader">
									<h3 class="text-center mb-5" data-bs-toggle="collapse" href="#registerForm" role="button"
										aria-expanded="false" aria-controls="registerForm">Sign up</h3>
								</div>
								<div id="registerForm" class="accordion-collapse collapse" data-bs-parent="#welcomeForm">
									<div class="accordion-body">
										<form class="container" aria-labelledby="registerHeader" method="post" action="/register">
											@csrf
											<div class="form-group mb-2">
												Email*
												<input name="registerEmail" type="email" class="form-control"
													placeholder="Enter email">
												{{-- @error('register')
												<div class="text-danger">{{ $message }}</div>
												@enderror --}}
											</div>
											<hr>
											<div class="form-group mb-2">
												Password*
												<input name="registerPassword" type="password" class="form-control"
													placeholder="Password">
											</div>
											<div class="form-group mb-2">
												Confirm password*
												<input name="registerPassword_confirmation" type="password" class="form-control"
													placeholder="Password">
											</div>
											<div class="d-flex justify-content-end">
												<label class="pull-right">
													<p data-bs-toggle="collapse" href="#loginForm" role="button" aria-expanded="true"
														aria-controls="loginForm" class="text-decoration-none link-secondary">Already
														have an
														account?</p>
												</label>
											</div>
											<div class="d-flex justify-content-around mt-3">
												<button type="submit"
													class="btn w-50 m-2 rounded-0 btn-outline btn-outline-dark fw-bold">Sign
													Up</button>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
							<div class="d-flex justify-content-around mt-5">
								<a href="{{url('home')}}" class="text-decoration-none">Proceed as guest</a>
							</div>
					</div>
				</div>

			</div>
		</div>
	</main>
	<footer>
		@include('components.footer')
	</footer>
	<!-- Bootstrap JavaScript Libraries -->
	@include('library.script')
</body>

</html>