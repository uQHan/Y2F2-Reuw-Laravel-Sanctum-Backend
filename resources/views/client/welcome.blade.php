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
										<form class="container" aria-labelledby="loginHeader">
											<div class="form-group mb-2">
												Email*
												<input type="email" class="form-control" placeholder="Enter email">
											</div>
											<div class="form-group mb-2">
												Password*
												<input type="password" class="form-control" placeholder="Password">
											</div>
											<div class="d-flex justify-content-between">
												<label>
													<input type="checkbox"> Remember Me
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
										<form class="container" aria-labelledby="registerHeader">
											<div class="form-group mb-2">
												Email*
												<input type="email" class="form-control" placeholder="Enter email">
											</div>
											<div class="form-group mb-2">
												Password*
												<input type="password" class="form-control" placeholder="Password">
											</div>
											<div class="form-group mb-2">
												Confirm password*
												<input type="password" class="form-control" placeholder="Password">
											</div>
											<div class="d-flex justify-content-between">
												<label>
													<input type="checkbox"> Remember Me
												</label>
												<label class="pull-right">
													<a href="#" class="text-decoration-none link-secondary">Forgotten Password?</a>
												</label>
											</div>
											<div class="d-flex justify-content-around mt-3">
												<button type="submit"
													class="btn w-50 m-2 rounded-0 btn-outline btn-outline-dark fw-bold">Sign
													In</button>
											</div>
										</form>
									</div>
								</div>
							</div>
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