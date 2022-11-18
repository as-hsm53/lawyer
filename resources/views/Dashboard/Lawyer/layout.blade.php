<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from html.modernwebtemplates.com/justice/admin_index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 20:53:16 GMT -->
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

			<header class="page_header_side page_header_side_sticked active-slide-side-header ds">
				<span class="toggle_menu_side toggler_light header-slide">
					<span></span>
				</span>
				<div class="scrollbar-macosx">
					<div class="side_header_inner">
						<div class="greylinks">
							<!-- user -->

							<div class="user-menu">
								@yield('lawyerImage')

								<div class="user-menu-info">
									<h4>@yield('session')</h4>
									<ul class="nav menu-side-click">
										<li class="active">
											<a href="">
												@yield('admin')
												@yield('Qualification')
											</a>
											<ul>
												<li>
													<a href="logout">
														<i class="fa fa-sign-out"></i>
														Log Out
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
                            

							<!-- main side nav start -->
							<nav class="mainmenu_side_wrapper">
								<h3 class="main_bg_color2">Dashboard</h3>
								<ul class="nav menu-side-click">
									
								</ul>

								<h3 class="dark_bg_color">Pages</h3>
								<ul class="nav menu-side-click">
									@if(session("ADMIN_ID"))
									<li>
										<a href="Dashboard">
											<i class="fa fa-th-large"></i>
											Lawyers
										</a>
									</li>
									<li>
										<a href="Clients">
											<i class="fa fa-suitcase"></i>
											Clients
										</a>
									</li>
									<li>
										<a href="Bookings">
											<i class="fa fa-suitcase"></i>
											Bookings
										</a>
									</li>
									@elseif(session("LAWYER_ID"))
									<li>
										<a href="Bookings">
											<i class="fa fa-suitcase"></i>
											Bookings
										</a>
									</li>
									@endif
								</ul>
							</nav>
							<!-- eof main side nav -->
						</div>
					</div>
				</div>
			</header>

			<header class="page_header header_white">
				<div class="pull-right big-header-buttons">
					<ul class="inline-dropdown inline-block">

						<li class="dropdown user-dropdown-menu">
							<a class="header-button" id="user-dropdown-menu" data-target="#" href="index.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<i class="fa fa-user grey"></i>
								<span class="header-button-text">User</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="user-dropdown-menu">
								<ul class="nav greylinks">
									<li>
										<a href="logout">
											<i class="fa fa-sign-out"></i>
											Log Out
										</a>
									</li>
								</ul>

							</div>

						</li>

						<li class="dropdown visible-xs-inline-block">
							<a href="#" class="search_modal_button header-button">
								<i class="fa fa-search grey"></i>
								<span class="header-button-text">Search</span>
							</a>
						</li>


					</ul>
				</div>
				<!-- eof .header_right_buttons -->

			</header>

			<section class="ls ms section_padding_top_50 section_padding_bottom_50 columns_padding_5">
				<div class="container-fluid">

					<div class="row with_background with_padding">
						@yield('lawyer')
						@yield('lawyersTable')
						@yield('bookings')
						@yield('clients')
						@yield('booking')
					</div>

				</div>
				<!-- .container -->
			</section>

			<section class="ls">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							&copy; Copyrights 2017
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="../js/compressed.js"></script>
	<script src="../js/vendor/Chart.bundle.min.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/admin-charts.js"></script>
	<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="../js/demo/datatables-demo.js"></script>
</body>


<!-- Mirrored from html.modernwebtemplates.com/justice/admin_index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 20:53:32 GMT -->
</html>
