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
											<a href="#">
												@yield('admin')
											</a>
											<ul>
												<li>
													<a href="admin_profile.html">
														<i class="fa fa-user"></i>
														Profile
													</a>
												</li>
												<li>
													<a href="admin_profile_edit.html">
														<i class="fa fa-edit"></i>
														Edit Profile
													</a>
												</li>
												<li>
													<a href="admin_inbox.html">
														<i class="fa fa-envelope-o"></i>
														Inbox
													</a>
												</li>
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
									<li class="active">
										<a href="admin_index.html">
											<i class="fa fa-th-large"></i>
											Dashboard
										</a>

									</li>
								</ul>

								<h3 class="dark_bg_color">Pages</h3>
								<ul class="nav menu-side-click">
									<li>
										<a href="#">
											<i class="fa fa-user"></i>
											Account
										</a>
										<ul>
											<li>
												<a href="admin_profile.html">
													Profile
												</a>
											</li>
											<li>
												<a href="admin_profile_edit.html">
													Edit Profile
												</a>
											</li>
											<li>
												<a href="admin_inbox.html">
													Inbox
												</a>
											</li>
											<li>
												<a href="admin_signin.html">
													Sign In
												</a>
											</li>
											<li>
												<a href="admin_signup.html">
													Sign Up
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="admin_posts.html">
											<i class="fa fa-file-text"></i>
											Posts
										</a>
										<ul>
											<li>
												<a href="admin_posts.html">
													Posts
												</a>
											</li>
											<li>
												<a href="admin_post.html">
													Single Post
												</a>
											</li>

										</ul>
									</li>
									<li>
										<a href="admin_products.html">
											<i class="fa fa-suitcase"></i>
											Products
										</a>
										<ul>
											<li>
												<a href="admin_products.html">
													Products
												</a>
											</li>
											<li>
												<a href="admin_product.html">
													Single Product
												</a>
											</li>

										</ul>
									</li>
									<li>
										<a href="admin_orders.html">
											<i class="fa fa-shopping-cart"></i>
											Orders
										</a>
										<ul>
											<li>
												<a href="admin_orders.html">
													Orders
												</a>
											</li>
											<li>
												<a href="admin_order.html">
													Single Order
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="admin_comments.html">
											<i class="fa fa-comment"></i>
											Comments
										</a>
										<ul>
											<li>
												<a href="admin_comments.html">
													Comments
												</a>
											</li>
											<li>
												<a href="admin_comment.html">
													Single Comment
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="admin_faq.html">
											<i class="fa fa-support"></i>
											FAQ
										</a>
									</li>
								</ul>

								<h3 class="dark_bg_color">UI Elements</h3>
								<ul class="nav menu-side-click">
									<li>
										<a href="admin_tables.html">
											<i class="fa fa-table"></i>
											Tables
										</a>
									</li>
									<li>
										<a href="admin_forms.html">
											<i class="fa fa-check-square-o"></i>
											Forms
										</a>
									</li>
									<li>
										<a href="admin_bootstrap.html">
											<i class="fa fa-cog"></i>
											Bootstrap
										</a>
									</li>
								</ul>
							</nav>
							<!-- eof main side nav -->
						</div>
					</div>
				</div>
			</header>

			<header class="page_header header_white">

				<div class="widget widget_search">
					<form method="get" class="searchform form-inline" action="https://html.modernwebtemplates.com/justice/">
						<div class="form-group">
							<label class="screen-reader-text" for="widget-search-header">Search for:</label>
							<input id="widget-search-header" type="text" value="" name="search" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="theme_button">Search</button>
					</form>
				</div>


				<div class="pull-right big-header-buttons">
					<ul class="inline-dropdown inline-block">
						<li class="dropdown header-notes-dropdown">
							<a class="header-button" id="header-messages" data-target="#" href="index.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<i class="fa fa-envelope grey"></i>
								<span class="header-button-text">Inbox</span>
								<span class="header-dropdown-number">
									10
								</span>
							</a>

							<div class="dropdown-menu" role="menu" aria-labelledby="header-messages">
								<ul class="list1 no-bullets no-top-border no-bottom-border bottommargin_0">

									<li>
										<div class="media">
											<div class="media-left">
												<img src="images/team/01.jpg" alt="...">
											</div>
											<div class="media-body">
												<h5 class="media-heading">
													Alex Walker
													<small>2 hours ago</small>
												</h5>
												<div class="one-line-text">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="media">
											<div class="media-left">
												<img src="images/team/02.jpg" alt="...">
											</div>
											<div class="media-body">
												<h5 class="media-heading">
													Janet C. Donnalds
													<small>5 hours ago</small>
												</h5>
												<div class="one-line-text">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="media">
											<div class="media-left">
												<img src="images/team/03.jpg" alt="...">
											</div>
											<div class="media-body">
												<h5 class="media-heading">
													Victoria Grow
													<small>1 day ago</small>
												</h5>
												<div class="one-line-text">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="text-center darklinks">
											<a href="admin_inbox.html">View All</a>
										</div>
									</li>
								</ul>
							</div>
						</li>

						<li class="dropdown header-notes-dropdown">
							<a class="header-button" id="header-notes" data-target="#" href="index.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<i class="fa fa-bell grey"></i>
								<span class="header-button-text">Messages</span>
								<span class="header-dropdown-number">
									6
								</span>
							</a>

							<div class="dropdown-menu" role="menu" aria-labelledby="header-notes">
								<ul class="list1 no-bullets no-top-border no-bottom-border bottommargin_0">
									<li>
										<div class="media small-teaser">
											<div class="media-left">
												<div class="teaser_icon label-success round">
													<i class="fa fa-shopping-cart"></i>
												</div>
											</div>
											<div class="media-body">
												<span class="grey">
													New order
												</span>
												<small class="pull-right">2 minutes ago</small>
											</div>
										</div>
									</li>
									<li>
										<div class="media small-teaser">
											<div class="media-left">
												<div class="teaser_icon label-success round">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="media-body">
												<span class="grey">
													New user registered
												</span>
												<small class="pull-right">3 minutes ago</small>
											</div>
										</div>
									</li>

									<li>
										<div class="media small-teaser">
											<div class="media-left">
												<div class="teaser_icon label-danger round">
													<i class="fa fa-bolt"></i>
												</div>
											</div>
											<div class="media-body">
												<span class="grey">
													Server overloaded
												</span>
												<small class="pull-right">5 minutes ago</small>
											</div>
										</div>
									</li>

									<li>
										<div class="media small-teaser">
											<div class="media-left">
												<div class="teaser_icon label-warning round">
													<i class="fa fa-bell-o"></i>
												</div>
											</div>
											<div class="media-body">
												<span class="grey">
													Long database query
												</span>
												<small class="pull-right">5 minutes ago</small>
											</div>
										</div>
									</li>

									<li>
										<div class="media small-teaser">
											<div class="media-left">
												<div class="teaser_icon label-success round">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="media-body">
												<span class="grey">
													New user registered
												</span>
												<small class="pull-right">8 minutes ago</small>
											</div>
										</div>
									</li>
									<li>
										<div class="text-center darklinks">
											<a href="#">View All</a>
										</div>
									</li>

								</ul>
							</div>
						</li>

						<li class="dropdown user-dropdown-menu">
							<a class="header-button" id="user-dropdown-menu" data-target="#" href="index.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<i class="fa fa-user grey"></i>
								<span class="header-button-text">User</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="user-dropdown-menu">
								<ul class="nav greylinks">
									<li>
										<a href="admin_profile.html">
											<i class="fa fa-user"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="admin_profile_edit.html">
											<i class="fa fa-edit"></i>
											Edit Profile
										</a>
									</li>
									<li>
										<a href="admin_inbox.html">
											<i class="fa fa-envelope-o"></i>
											Inbox
										</a>
									</li>
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
