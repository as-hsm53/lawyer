<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from html.modernwebtemplates.com/justice/header1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 20:53:59 GMT -->
<head>
	<title>Justice</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/animations.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/main.css" id="color-switcher-link">
	<script src="../js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->
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
	<div id="canvas" style="margin-top: -27px;">
		<div id="box_wrapper">

			<!-- template sections -->

			<header class="page_header header_darkgrey table_section table_section_md toggler_right">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<a href="index.html" class="logo small">
								<img src="../images/logo.png" alt="">
								<span class="logo_text">
									<span class="playfair title">The Justice</span>
									<span class="highlight">Premium HTML template</span>
								</span>
							</a>
							<!-- header toggler -->
							<span class="toggle_menu">
								<span></span>
							</span>
						</div>
						<div class="col-md-8 text-right">
							<!-- main nav start -->
							<nav class="mainmenu_wrapper">
								<ul class="mainmenu nav sf-menu">
									<li class="active">
										<a href="/">Home</a>
									</li>
									<li>
										<a href="/home/attorneys">Attorneys</a>
									</li>
									<li>
										<a href="/home/bookings">Bookings</a>
									</li>
									<li>
										@if(session("USER_ID"))
										@foreach($user as $r)
										<a href="">{{$r->firstName}} {{$r->lastName}}</a>
										<ul>
											<li>
												<a href="/home/logout">Logout</a>
											</li>
										</ul>
										@endforeach
										@else
										<a href="">login</a>
										<ul>
											<li>
												<a href="">Login</a>
												<ul>
													<li>
														<a href="login">Lawyer</a>
													</li>
													<li>
														<a href="/home/login">Client</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="">Register</a>
												<ul>
													<li>
														<a href="register">Register as Lawyer</a>
													</li>
													<li>
														<a href="/home/register">Register as Client</a>
													</li>
												</ul>
											</li>
										</ul>
										@endif
									</li>
									<!-- eof contacts -->
								</ul>
							</nav>
							<!-- eof main nav -->
						</div>
					</div>
				</div>
			</header>

			@yield('index')
			@yield('attorneys')
			@yield('lawyerPage')
			@yield('bookings')
			<footer class="page_footer ds section_padding_top_65 section_padding_bottom_50 columns_padding_25">
				<div class="container">

					<div class="row">

						<div class="col-md-4 col-sm-6">

							<a href="index.html" class="logo bottommargin_10">
								<img src="../images/logo.png" alt="">
								<span class="logo_text">
									<span class="playfair title">The Justice</span>
									<span class="highlight">Premium HTML template</span>
								</span>
							</a>

							<p>
								Ut bacon filet mignon frankfurter venison shank sed quis short ribs lorem. Shank and incididunt ea bacon. doner boudin short loin excepteur pork. belly qui ribeye salami
							</p>

							<p>
								<a href="#" class="social-icon theme-color-icon soc-twitter"></a>
								<a href="#" class="social-icon theme-color-icon soc-facebook"></a>
								<a href="#" class="social-icon theme-color-icon soc-google"></a>
								<a href="#" class="social-icon theme-color-icon soc-linkedin"></a>
								<a href="#" class="social-icon theme-color-icon soc-pinterest"></a>
							</p>

						</div>

						<div class="col-md-4 col-sm-6">
							<div class="widget widget_text topmargin_20">
								<h3 class="widget-title">Get In Touch</h3>
								<hr class="divider_60_2 main_bg_color divider_left">
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-map-marker highlight fontsize_18"></i>
									</div>
									<div class="media-body">
										2551 Alfred Drive Brooklyn, NY
									</div>
								</div>
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-envelope highlight fontsize_18"></i>
									</div>
									<div class="media-body greylinks underlined-links">
										<a href="mailto:hussainkhozema110@gmail.com"><span class="__cf_email__" data-cfemail="6f1c1a1f1f001d1b2f1b070a051a1c1b060c0a410c0002">hussainkhozema110@gmail.com</span></a>
									</div>
								</div>
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-phone highlight fontsize_18"></i>
									</div>
									<div class="media-body">
										<a href="tel:+923112535653">+92 311 2535653</a>
									</div>
								</div>
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-clock-o highlight fontsize_18"></i>
									</div>
									<div class="media-body">
										24 hours a day, 7 days a week
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-12">
							<div class="topmargin_20">
								<div class="widget widget_twitter">
									<h3 class="widget-title">Latest Tweets</h3>
									<hr class="divider_60_2 main_bg_color divider_left">
									<div class="twitter"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/switcher.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.js"></script>
	<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="../js/demo/datatables-demo.js"></script>
</body>


<!-- Mirrored from html.modernwebtemplates.com/justice/header1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 20:53:59 GMT -->
</html>