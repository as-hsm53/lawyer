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
                            <div class="row">
                                @if(Session::has("message"))
                                    <div class="col-lg-12">
                                        <div class=" alert alert-success">{{session("message")}}</div>
                                    </div>
                                @elseif(Session::has("error"))
                                    <div class="col-lg-12">
                                        <div class=" alert alert-danger">{{session("error")}}</div>
                                    </div>
                                @endif
                            </div>
							<div class="with_background with_padding">

								<h4 class="text-center">
									Welcome Back!
								</h4>
								<hr class="bottommargin_30">
								<div class="wrap-forms">
									<form method="POST" action="auth">
                                        @csrf
										
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="login-email">Email address</label>
													<i class="grey fa fa-envelope-o"></i>
													<input type="email" name="email" class="form-control" id="login-email" placeholder="Email">
													@if ($errors->has('email'))
													<span class="text-danger">{{ $errors->first('email') }}</span>
													@endif
												</div>

											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="login-password">Password</label>
													<i class="grey fa fa-pencil-square-o"></i>
													<input type="password" name="password" class="form-control" id="login-password" placeholder="Password">
													@if ($errors->has('password'))
													<span class="text-danger">{{ $errors->first('password') }}</span>
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
										<button type="submit" class="theme_button block_button color1" style="margin-top: 2rem">Login</button>
									</form>
								</div>

							</div>
							<!-- .with_background -->

							<p class="divider_20 text-center">
								Don't Have An Account?
								<a href="register">Register</a>.
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