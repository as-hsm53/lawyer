<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Justice</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" id="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body class="theme-dashboard">
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="https://html.modernwebtemplates.com/justice/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--		
		<ul>
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->
			<section class="ls ms section_padding_top_100 section_padding_bottom_100 section_full_height">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3 col-md-6">
							<div class="with_background with_padding">

								<h4 class="text-center">
									Registration
								</h4>
								<hr class="bottommargin_30">
								<div class="wrap-forms">
									<form action="registered" method="POST">
										@csrf
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="firstName">First Name</label>
													<i class="grey fa fa-user"></i>
													<input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
													@if ($errors->has('firstName'))
													<span class="text-danger"><b>{{ $errors->first('firstName') }}</b></span>
													@endif
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="lastName">Last Name</label>
													<i class="grey fa fa-user"></i>
													<input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
													@if ($errors->has('lastName'))
													<span class="text-danger"><b>{{ $errors->first('lastName') }}</b></span>
													@endif
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="qualification">Qualification</label>
													<i class="grey fa fa-graduation-cap"></i>
													<select name="qualification"  class="form-select form-select form-control" aria-label=".form-select example">
														<option value="0" selected>Select Your Practice Area</option>
														<option value="Family">Family law</option>
														<option value="Civil">Civil Law</option>
														<option value="Business">Business Law</option>
														<option value="Criminal">Criminal Law</option>
														<option value="Personal">Personal Law</option>
														<option value="Drug Offence">Drug Offense</option>
													</select>
													@if ($errors->has('qualification'))
														<span class="text-danger"><b>{{ $errors->first('qualification') }}</b></span>
													@endif
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="cityId">Select City</label>
													<i class="grey fa fa-map-marker"></i>
													<select name="cityId" class="form-select form-select form-control" aria-label=".form-select example">
														<option value="0" selected>Select City</option>
														@foreach($cities as $c)
														<option value="{{$c->id}}">{{$c->city}}</option>
														@endforeach
													</select>
													@if ($errors->has('cityId'))
														<span class="text-danger"><b>{{ $errors->first('cityId') }}</b></span>
													@endif
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="address">Address</label>
													<i class="grey fa fa-pencil-square-o"></i>
													<input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}" placeholder="Enter Area Address...">
													@if ($errors->has('address'))
														<span class="text-danger"><b>{{ $errors->first('address') }}</b></span>
													@endif
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="description">Description</label>
													<i class="grey fa fa-pencil-square-o"></i>
													<textarea type="text" class="form-control" name="description" id="description" placeholder="About You">{{ old('description') }}</textarea>
													@if ($errors->has('description'))
														<span class="text-danger"><b>{{ $errors->first('description') }}</b></span>
													@endif
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="email">Email address</label>
													<i class="grey fa fa-envelope-o"></i>
													<input type="email" name="email" class="form-control" id="email" placeholder="Email">
													@if ($errors->has('email'))
													<span class="text-danger"><b>{{ $errors->first('email') }}</b></span>
													@endif
												</div>

											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="password">Password</label>
													<i class="grey fa fa-lock"></i>
													<input type="password" name="password" class="form-control" id="password" placeholder="Password">
													@if ($errors->has('password'))
													<span class="text-danger"><b>{{ $errors->first('password') }}</b></span>
													@endif
												</div>
											</div>
										</div>
										<!-- <div class="row">
											<div class="col-sm-12">
												<div class="checkbox">
													<label>
														<input type="checkbox"> Rememrber Me
													</label>
												</div>
											</div>
										</div> -->
										<button type="submit" class="theme_button block_button color1">Login</button>
									</form>
								</div>

							</div>
							<!-- .with_background -->

							<p class="divider_20 text-center">
								Already registered?
								<a href="login">Log In</a>.
							</p>	

						</div>
						<!-- .col-* -->
					</div>
					<!-- .row -->
				</div>
				<!-- .container -->
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/vendor/Chart.bundle.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/admin-charts.js"></script>

</body>
</html>