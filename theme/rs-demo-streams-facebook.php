
<?php
	// FACEBOOK CONNECT STREAM CLASS
	require_once 'include/rs-plugin/php/facebook/class-facebook.php';
	$facebook = new TP_facebook();

	// FACEBOOK PAGE
	$user_id = $facebook->get_user_from_url('https://www.facebook.com/inspirationfeed');

	// API DATA
	// Create App ID and Secret -> https://developers.facebook.com/apps/?action=create
	$app_id = '';
	$app_secret = '';

	// GET POSTS
	$post_feed = $facebook->get_post_feed($user_id,$app_id,$app_secret,5);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700,800,900|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">


	<!-- Document Title
	============================================= -->
	<title>Facebook - Revolution Slider | Canvas</title>

	<style>

		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

		.demos-filter {
			margin: 0;
			text-align: right;
		}

		.demos-filter li {
			list-style: none;
			margin: 10px 0px;
		}

		.demos-filter li a {
			display: block;
			border: 0;
			text-transform: uppercase;
			letter-spacing: 1px;
			color: #444;
		}

		.demos-filter li a:hover,
		.demos-filter li.activeFilter a { color: #1ABC9C; }

		@media (max-width: 991px) {
			.demos-filter { text-align: center; }

			.demos-filter li {
				float: left;
				width: 33.3%;
				padding: 0 20px;
			}
		}

		@media (max-width: 767px) {
			.demos-filter li { width: 50%; }
		}

	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	<!-- Header
		============================================= -->
		<header id="header" class="full-header" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="index.html"><div>Home</div></a>
								<ul>
									<li><a href="index-corporate.html"><div>Home - Corporate</div></a>
										<ul>
											<li><a href="index-corporate.html"><div>Corporate - Layout 1</div></a></li>
											<li><a href="index-corporate-2.html"><div>Corporate - Layout 2</div></a></li>
											<li><a href="index-corporate-3.html"><div>Corporate - Layout 3</div></a></li>
											<li><a href="index-corporate-4.html"><div>Corporate - Layout 4</div></a></li>
										</ul>
									</li>
									<li><a href="index-portfolio.html"><div>Home - Portfolio</div></a>
										<ul>
											<li><a href="index-portfolio.html"><div>Portfolio - Layout 1</div></a></li>
											<li><a href="index-portfolio-2.html"><div>Portfolio - Layout 2</div></a></li>
											<li><a href="index-portfolio-3.html"><div>Portfolio - Masonry</div></a></li>
											<li><a href="index-portfolio-4.html"><div>Portfolio - AJAX</div></a></li>
										</ul>
									</li>
									<li><a href="index-blog.html"><div>Home - Blog</div></a>
										<ul>
											<li><a href="index-blog.html"><div>Blog - Layout 1</div></a></li>
											<li><a href="index-blog-2.html"><div>Blog - Layout 2</div></a></li>
											<li><a href="index-blog-3.html"><div>Blog - Layout 3</div></a></li>
										</ul>
									</li>
									<li><a href="index-shop.html"><div>Home - Shop</div></a>
										<ul>
											<li><a href="index-shop.html"><div>Shop - Layout 1</div></a></li>
											<li><a href="index-shop-2.html"><div>Shop - Layout 2</div></a></li>
										</ul>
									</li>
									<li><a href="index-magazine.html"><div>Home - Magazine</div></a>
										<ul>
											<li><a href="index-magazine.html"><div>Magazine - Layout 1</div></a></li>
											<li><a href="index-magazine-2.html"><div>Magazine - Layout 2</div></a></li>
											<li><a href="index-magazine-3.html"><div>Magazine - Layout 3</div></a></li>
										</ul>
									</li>
									<li><a href="landing.html"><div>Home - Landing Page</div></a>
										<ul>
											<li><a href="landing.html"><div>Landing Page - Layout 1</div></a></li>
											<li><a href="landing-2.html"><div>Landing Page - Layout 2</div></a></li>
											<li><a href="landing-3.html"><div>Landing Page - Layout 3</div></a></li>
											<li><a href="landing-4.html"><div>Landing Page - Layout 4</div></a></li>
											<li><a href="landing-5.html"><div>Landing Page - Layout 5</div></a></li>
										</ul>
									</li>
									<li><a href="index-fullscreen-image.html"><div>Home - Full Screen</div></a>
										<ul>
											<li><a href="index-fullscreen-image.html"><div>Full Screen - Image</div></a></li>
											<li><a href="index-fullscreen-slider.html"><div>Full Screen - Slider</div></a></li>
											<li><a href="index-fullscreen-video.html"><div>Full Screen - Video</div></a></li>
										</ul>
									</li>
									<li><a href="index-onepage.html"><div>Home - One Page</div></a>
										<ul>
											<li><a href="index-onepage.html"><div>One Page - Default</div></a></li>
											<li><a href="index-onepage-2.html"><div>One Page - Submenu</div></a></li>
											<li><a href="index-onepage-3.html"><div>One Page - Dots Style</div></a></li>
										</ul>
									</li>
									<li><a href="index-wedding.html"><div>Home - Wedding</div></a></li>
									<li><a href="index-restaurant.html"><div>Home - Restaurant</div></a></li>
									<li><a href="index-events.html"><div>Home - Events</div></a></li>
									<li><a href="index-parallax.html"><div>Home - Parallax</div></a></li>
									<li><a href="index-app-showcase.html"><div>Home - App Showcase</div></a></li>
								</ul>
							</li>
							<li class="current"><a href="#"><div>Features</div></a>
								<ul>
									<li><a href="#"><div><i class="icon-stack"></i>Sliders</div></a>
										<ul>
											<li><a href="slider-revolution.html"><div>Revolution Slider</div></a>
												<ul>
													<li><a href="rs-demo-premium-concept.html"><div>Premium Templates</div></a></li>
													<li><a href="slider-revolution.html"><div>Full Screen</div></a></li>
													<li><a href="slider-revolution-fullwidth.html"><div>Full Width</div></a></li>
													<li><a href="slider-revolution-kenburns.html"><div>Kenburns Effect</div></a></li>
													<li><a href="slider-revolution-html5-videos.html"><div>HTML5 Video</div></a></li>
												</ul>
											</li>
											<li><a href="slider-canvas.html"><div>Canvas Slider</div></a>
												<ul>
													<li><a href="slider-canvas.html"><div>Full Width</div></a></li>
													<li><a href="slider-canvas-fade.html"><div>Fade Transition</div></a></li>
													<li><a href="slider-canvas-autoplay.html"><div>Autoplay Feature</div></a></li>
													<li><a href="slider-canvas-video-event.html"><div>Custom Video Event</div></a></li>
													<li><a href="slider-canvas-pagination.html"><div>Pagination Navigation</div></a></li>
													<li><a href="slider-canvas-3.html"><div>3 Columns</div></a></li>
													<li><a href="slider-canvas-4.html"><div>4 Columns</div></a></li>
													<li><a href="slider-canvas-5.html"><div>5 Columns</div></a></li>
												</ul>
											</li>
											<li><a href="slider-flex.html"><div>Flex Slider</div></a>
												<ul>
													<li><a href="slider-flex.html"><div>Default Layout</div></a></li>
													<li><a href="slider-flex-thumbs.html"><div>with Thumbs</div></a></li>
												</ul>
											</li>
											<li><a href="slider-owl.html"><div>Owl Slider</div></a>
												<ul>
													<li><a href="slider-owl-full.html"><div>Full Width</div></a></li>
													<li><a href="slider-owl.html"><div>Boxed Width</div></a></li>
													<li><a href="slider-owl-videos.html"><div>Video Slider</div></a></li>
												</ul>
											</li>
											<li><a href="static-parallax.html"><div>Static Media</div></a>
												<ul>
													<li><a href="static-parallax.html"><div>Static - Parallax</div></a></li>
													<li><a href="static-image.html"><div>Static - Image</div></a></li>
													<li><a href="static-thumbs-grid.html"><div>Static - Thumb Gallery</div></a></li>
													<li><a href="static-html5-video.html"><div>Static - HTML5 Video</div></a></li>
													<li><a href="static-embed-video.html"><div>Static - Embedded Video</div></a></li>
												</ul>
											</li>
											<li><a href="slider-camera.html"><div>Camera Slider</div></a></li>
											<li><a href="slider-elastic.html"><div>Elastic Slider</div></a></li>
											<li><a href="slider-nivo.html"><div>Nivo Slider</div></a></li>
										</ul>
									</li>
									<li><a href="widgets.html"><div><i class="icon-gift"></i>Widgets</div></a>
										<ul>
											<li><a href="widgets.html"><div>Links</div></a></li>
											<li><a href="widgets.html"><div>Flickr Photostream</div></a></li>
											<li><a href="widgets.html"><div>Dribbble Shots</div></a></li>
											<li><a href="widgets.html"><div>Instagram Feed</div></a></li>
											<li><a href="widgets.html"><div>Posts List</div></a></li>
											<li><a href="widgets.html"><div>Twitter Feed</div></a></li>
											<li><a href="widgets.html"><div>Tabbed Widgets</div></a></li>
											<li><a href="widgets.html"><div>Carousel</div></a></li>
											<li><a href="widgets.html"><div>Subscribers</div></a></li>
											<li><a href="widgets.html"><div>Social Icons</div></a></li>
											<li><a href="widgets.html"><div>Testimonials</div></a></li>
											<li><a href="widgets.html"><div>Quick Contact</div></a></li>
											<li><a href="widgets.html"><div>Tags Cloud</div></a></li>
											<li><a href="widgets.html"><div>Video Embeds</div></a></li>
											<li><a href="widgets.html"><div>Raw Text/HTML</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-umbrella"></i>Headers</div></a>
										<ul>
											<li><a href="header-light.html"><div>Light Version</div></a></li>
											<li><a href="header-dark.html"><div>Dark Version</div></a></li>
											<li><a href="header-transparent.html"><div>Transparent</div></a></li>
											<li><a href="header-semi-transparent.html"><div>Semi Transparent</div></a>
												<ul>
													<li><a href="header-semi-transparent.html"><div>Light Version</div></a></li>
													<li><a href="header-semi-transparent-dark.html"><div>Dark Version</div></a></li>
												</ul>
											</li>
											<li><a href="header-side-left.html"><div>Left Side Header</div></a>
												<ul>
													<li><a href="header-side-left.html"><div>Fixed Position</div></a></li>
													<li><a href="header-side-left-open.html"><div>OnClick Open</div></a></li>
													<li><a href="header-side-left-open-push.html"><div>Push Content</div></a></li>
												</ul>
											</li>
											<li><a href="header-side-right.html"><div>Right Side Header</div></a>
												<ul>
													<li><a href="header-side-right.html"><div>Fixed Position</div></a></li>
													<li><a href="header-side-right-open.html"><div>OnClick Open</div></a></li>
													<li><a href="header-side-right-open-push.html"><div>Push Content</div></a></li>
												</ul>
											</li>
											<li><a href="header-floating.html"><div>Floating Version</div></a></li>
											<li><a href="static-sticky.html"><div>Static Sticky</div></a></li>
											<li><a href="responsive-sticky.html"><div>Responsive Sticky</div></a></li>
											<li><a href="logo-changer.html"><div>Alternate Logos</div></a></li>
										</ul>
									</li>
									<li><a href="side-panel.html"><div><i class="icon-line-layout"></i>Side Panel</div></a>
										<ul>
											<li><a href="side-panel-left-overlay.html"><div>Left Overlay</div></a></li>
											<li><a href="side-panel-left-push.html"><div>Left Push</div></a></li>
											<li><a href="side-panel-right-overlay.html"><div>Right Overlay</div></a></li>
											<li><a href="side-panel.html"><div>Right Push</div></a></li>
											<li><a href="side-panel-light.html"><div>Light Background</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-align-justify2"></i>Menu Styles</div></a>
										<ul>
											<li><a href="header-light.html"><div>Menu - Style 1</div></a></li>
											<li><a href="menu-2.html"><div>Menu - Style 2</div></a></li>
											<li><a href="menu-3.html"><div>Menu - Style 3</div></a></li>
											<li><a href="menu-4.html"><div>Menu - Style 4</div></a></li>
											<li><a href="menu-5.html"><div>Menu - Style 5</div></a></li>
											<li><a href="menu-6.html"><div>Menu - Style 6</div></a></li>
											<li><a href="menu-7.html"><div>Menu - Style 7</div></a></li>
											<li><a href="menu-8.html"><div>Menu - Style 8</div></a></li>
											<li><a href="menu-9.html"><div>Menu - Style 9</div></a></li>
											<li><a href="menu-10.html"><div>Menu - Overlay</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-ok-sign"></i>Page Titles</div></a>
										<ul>
											<li><a href="page.html"><div>Left Align</div></a></li>
											<li><a href="page-title-right.html"><div>Right Align</div></a></li>
											<li><a href="page-title-center.html"><div>Center Align</div></a></li>
											<li><a href="page-titledark.html"><div>Dark Style</div></a></li>
											<li><a href="page-title-pattern.html"><div>Pattern Background</div></a></li>
											<li><a href="page-title-parallax.html"><div>Parallax Background</div></a>
												<ul>
													<li><a href="page-title-parallax.html"><div>Default Header</div></a></li>
													<li><a href="page-title-parallax-header.html"><div>Transparent Header</div></a></li>
												</ul>
											</li>
											<li><a href="page-title-video.html"><div>HTML5 Video</div></a></li>
											<li><a href="page-title-nobg.html"><div>No Background</div></a></li>
											<li><a href="page-title-mini.html"><div>Mini Version</div></a></li>
										</ul>
									</li>
									<li><a href="contact.html"><div><i class="icon-envelope-alt"></i>Contact Pages</div></a>
										<ul>
											<li><a href="contact.html">Contact 1</a></li>
											<li><a href="contact-2.html">Contact 2</a></li>
											<li><a href="contact-3.html">Contact 3</a></li>
											<li><a href="contact-4.html">Contact 4</a></li>
											<li><a href="contact-5.html">Contact 5</a></li>
											<li><a href="contact-6.html">Contact 6</a></li>
											<li><a href="contact-7.html">Contact 7</a></li>
										</ul>
									</li>
									<li><a href="#footer" data-scrollto="#footer"><div><i class="icon-th"></i>Footers</div></a>
										<ul>
											<li><a href="sticky-footer.html"><div>Sticky Footer</div></a></li>
											<li><a href="#footer" data-scrollto="#footer"><div>Footer - Layout 1</div></a></li>
											<li><a href="footer-2.html#footer"><div>Footer - Layout 2</div></a></li>
											<li><a href="footer-3.html#footer"><div>Footer - Layout 3</div></a></li>
											<li><a href="footer-4.html#footer"><div>Footer - Layout 4</div></a></li>
											<li><a href="footer-5.html#footer"><div>Footer - Layout 5</div></a></li>
											<li><a href="footer-6.html#footer"><div>Footer - Layout 6</div></a></li>
											<li><a href="footer-7.html#footer"><div>Footer - Layout 7</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-calendar3"></i>Events</div></a>
										<ul>
											<li><a href="events-calendar.html"><div>Full Width Calendar</div></a></li>
											<li><a href="events-list.html"><div>Events List</div></a>
												<ul>
													<li><a href="events-list.html"><div>Right Sidebar</div></a></li>
													<li><a href="events-list-left-sidebar.html"><div>Left Sidebar</div></a></li>
													<li><a href="events-list-both-sidebar.html"><div>Both Sidebar</div></a></li>
													<li><a href="events-list-fullwidth.html"><div>Full Width</div></a></li>
													<li><a href="events-list-parallax.html"><div>Parallax List</div></a></li>
												</ul>
											</li>
											<li><a href="event-single.html"><div>Single Event</div></a>
												<ul>
													<li><a href="event-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
													<li><a href="event-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
													<li><a href="event-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
													<li><a href="event-single.html"><div>Full Width</div></a></li>
												</ul>
											</li>
											<li><a href="event-single-full-width-image.html"><div>Single Event - Full</div></a>
												<ul>
													<li><a href="event-single-full-width-image.html"><div>Parallax Image</div></a></li>
													<li><a href="event-single-full-width-map.html"><div>Google Map</div></a></li>
													<li><a href="event-single-full-width-slider.html"><div>Slider Gallery</div></a></li>
													<li><a href="event-single-full-width-video.html"><div>HTML5 Video</div></a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="modal-onload.html"><div><i class="icon-line-expand"></i>Modal OnLoad</div></a>
										<ul>
											<li><a href="modal-onload.html"><div>Simple Layout</div></a></li>
											<li><a href="modal-onload-iframe.html"><div>Video iFrame</div></a></li>
											<li><a href="modal-onload-subscribe.html"><div>Subscription Form</div></a></li>
											<li><a href="modal-onload-common-height.html"><div>Common Height</div></a></li>
											<li><a href="modal-onload-cookie.html"><div>Cookies Enabled</div></a></li>
										</ul>
									</li>
									<li><a href="coming-soon.html"><div><i class="icon-time"></i>Coming Soon</div></a>
										<ul>
											<li><a href="coming-soon.html"><div>Simple Layout</div></a></li>
											<li><a href="coming-soon-2.html"><div>Parallax Image</div></a></li>
											<li><a href="coming-soon-3.html"><div>HTML5 Video</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-adjust"></i>Dark Version</div></a></li>
								</ul>
							</li>
							<li class="mega-menu"><a href="#"><div>Pages</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Introduction</div></a>
											<ul>
												<li><a href="about.html"><div>About Us</div></a></li>
												<li><a href="about-2.html"><div>About Us - Layout 2</div></a></li>
												<li><a href="about-me.html"><div>About Me</div></a></li>
												<li><a href="team.html"><div>Team Members</div></a></li>
												<li><a href="jobs.html"><div>Careers</div></a></li>
												<li><a href="side-navigation.html"><div>Side Navigation</div></a></li>
												<li><a href="page-submenu.html"><div>Page Submenu</div></a></li>
												<li><a href="sitemap.html"><div>Sitemap</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Utility</div></a>
											<ul>
												<li><a href="services.html"><div>Services - Layout 1</div></a></li>
												<li><a href="services-2.html"><div>Services - Layout 2</div></a></li>
												<li><a href="services-3.html"><div>Services - Layout 3</div></a></li>
												<li><a href="faqs.html"><div>FAQs - Layout 1</div></a></li>
												<li><a href="faqs-2.html"><div>FAQs - Layout 2</div></a></li>
												<li><a href="faqs-3.html"><div>FAQs - Layout 3</div></a></li>
												<li><a href="faqs-4.html"><div>FAQs - Layout 4</div></a></li>
												<li><a href="maintenance.html"><div>Maintenance Page</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Layout Grids</div></a>
											<ul>
												<li><a href="full-width.html"><div>Full Width</div></a></li>
												<li><a href="full-width-wide.html"><div>Full Width - Wide</div></a></li>
												<li><a href="right-sidebar.html"><div>Right Sidebar</div></a></li>
												<li><a href="left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="both-right-sidebar.html"><div>Both Right Sidebar</div></a></li>
												<li><a href="both-left-sidebar.html"><div>Both Left Sidebar</div></a></li>
												<li><a href="blank-page.html"><div>Blank Page</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Miscellaneous</div></a>
											<ul>
												<li><a href="login-register.html"><div>Login/Register</div></a></li>
												<li><a href="login-register-2.html"><div>Login/Register - Style 2</div></a></li>
												<li><a href="login-register-3.html"><div>Login/Register - Style 3</div></a></li>
												<li><a href="login-1.html"><div>Login - Style 1</div></a></li>
												<li><a href="login-2.html"><div>Login - Style 2</div></a></li>
												<li><a href="404.html"><div>404 - Simple Layout</div></a></li>
												<li><a href="404-2.html"><div>404 - Parallax Image</div></a></li>
												<li><a href="404-3.html"><div>404 - HTML5 Video</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="#"><div>Portfolio</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Grids</div></a>
											<ul>
												<li><a href="portfolio-1.html"><div>1 Column</div></a></li>
												<li><a href="portfolio-2.html"><div>2 Columns</div></a></li>
												<li><a href="portfolio-3.html"><div>3 Columns</div></a></li>
												<li><a href="portfolio.html"><div>4 Columns</div></a></li>
												<li><a href="portfolio-5.html"><div>5 Columns</div></a></li>
												<li><a href="portfolio-6.html"><div>6 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
											<ul>
												<li><a href="portfolio-mixed-masonry.html"><div>Mixed Columns</div></a></li>
												<li><a href="portfolio-2-masonry.html"><div>2 Columns</div></a></li>
												<li><a href="portfolio-3-masonry.html"><div>3 Columns</div></a></li>
												<li><a href="portfolio-masonry.html"><div>4 Columns</div></a></li>
												<li><a href="portfolio-5-masonry.html"><div>5 Columns</div></a></li>
												<li><a href="portfolio-6-masonry.html"><div>6 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Loading Styles</div></a>
											<ul>
												<li><a href="portfolio.html"><div>jQuery Filter</div></a></li>
												<li><a href="portfolio-pagination.html"><div>Pagination</div></a></li>
												<li><a href="portfolio-jpagination.html"><div>jQuery Pagination</div></a></li>
												<li><a href="portfolio-infinity-scroll.html"><div>Infinity Scroll</div></a></li>
												<li><a href="portfolio-ajax.html"><div>AJAX In Page</div></a></li>
												<li><a href="portfolio-ajax-in-modal.html"><div>AJAX In Modal</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Single Project</div></a>
											<ul>
												<li><a href="portfolio-single-extended.html"><div>Extended Item</div></a></li>
												<li><a href="portfolio-single-fullwidth.html"><div>Parallax Image</div></a></li>
												<li><a href="portfolio-single-gallery-full.html"><div>Slider Gallery</div></a></li>
												<li><a href="portfolio-single-video-fullwidth-left-sidebar.html"><div>HTML5 Video</div></a></li>
												<li><a href="portfolio-single-thumbs-right-sidebar.html"><div>Masonry Thumbs</div></a></li>
												<li><a href="portfolio-single-video-both-sidebar.html"><div>Embed Video</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Layouts</div></a>
											<ul>
												<li><a href="portfolio-nomargin.html"><div>Default</div></a></li>
												<li><a href="portfolio-1-alt-right-sidebar.html"><div>Right Sidebar</div></a></li>
												<li><a href="portfolio-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="portfolio-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="portfolio-fullwidth-notitle.html"><div>100% Width</div></a></li>
												<li><a href="portfolio-parallax.html"><div>Parallax</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="#"><div>Blog</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Default</div></a>
											<ul>
												<li><a href="blog.html"><div>Right Sidebar</div></a></li>
												<li><a href="blog-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="blog-full-width.html"><div>Full Width</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Timeline</div></a>
											<ul>
												<li><a href="blog-timeline-right-sidebar.html"><div>Right Sidebar</div></a></li>
												<li><a href="blog-timeline-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-timeline.html"><div>Full Width</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
											<ul>
												<li><a href="blog-masonry.html"><div>4 Columns</div></a></li>
												<li><a href="blog-masonry-3.html"><div>3 Columns</div></a></li>
												<li><a href="blog-masonry-2.html"><div>2 Columns</div></a></li>
												<li><a href="blog-masonry-full.html"><div>100% Width</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Grid</div></a>
											<ul>
												<li><a href="blog-grid.html"><div>4 Columns</div></a></li>
												<li><a href="blog-grid-3.html"><div>3 Columns</div></a></li>
												<li><a href="blog-grid-2.html"><div>2 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Small Thumbs</div></a>
											<ul>
												<li><a href="blog-small-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-small.html"><div>Right Sidebar</div></a></li>
												<li><a href="blog-small-both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="blog-small-full-width.html"><div>Full Width</div></a></li>
												<li><a href="blog-small-alt.html"><div>Alternate Layout</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Item Splitting</div></a>
											<ul>
												<li><a href="blog-grid.html"><div>Pagination</div></a></li>
												<li><a href="blog-masonry.html"><div>Infinite Scroll</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Single</div></a>
											<ul>
												<li><a href="blog-single.html"><div>Default Layout</div></a></li>
												<li><a href="blog-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-single-full.html"><div>Full Width</div></a></li>
												<li><a href="blog-single-small.html"><div>Small Image</div></a></li>
												<li><a href="blog-single-split-right-sidebar.html"><div>Split Layout</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Comments Module</div></a>
											<ul>
												<li><a href="blog-single-left-sidebar.html#comments"><div>Facebook Comments</div></a></li>
												<li><a href="blog-single-small.html#comments"><div>Disqus Comments</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li><a href="shop.html"><div>Shop</div></a>
								<ul>
									<li><a href="shop.html"><div>4 Columns</div></a></li>
									<li><a href="shop-3.html"><div>3 Columns</div></a>
										<ul>
											<li><a href="shop-3.html"><div>Full Width</div></a></li>
											<li><a href="shop-3-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-2.html"><div>2 Columns</div></a>
										<ul>
											<li><a href="shop-2-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-2-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-1.html"><div>1 Columns</div></a>
										<ul>
											<li><a href="shop-1.html"><div>Full Width</div></a></li>
											<li><a href="shop-1-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-1-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-1-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-category-parallax.html"><div>Categories - Parallax</div></a></li>
									<li><a href="shop-single.html"><div>Single Product</div></a>
										<ul>
											<li><a href="shop-single.html"><div>Full Width</div></a></li>
											<li><a href="shop-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="cart.html"><div>Cart</div></a></li>
									<li><a href="checkout.html"><div>Checkout</div></a></li>
								</ul>
							</li>
							<li class="mega-menu"><a href="#"><div>Shortcodes</div></a>
								<div class="mega-menu-content clearfix">
									<ul class="mega-menu-column col-5">
										<li><a href="animations.html"><div><i class="icon-magic"></i>Animations</div></a></li>
										<li><a href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a></li>
										<li><a href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a></li>
										<li><a href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a></li>
										<li><a href="clients.html"><div><i class="icon-apple"></i>Clients</div></a></li>
										<li><a href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a></li>
										<li><a href="counters.html"><div><i class="icon-time"></i>Counters</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a></li>
										<li><a href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a></li>
										<li><a href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a></li>
										<li><a href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a></li>
										<li><a href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a></li>
										<li><a href="labels-badges.html"><div><i class="icon-plus-sign"></i>Labels</div></a></li>
										<li><a href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="lists-panels.html"><div><i class="icon-th-list"></i>Lists &amp; Panels</div></a></li>
										<li><a href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a></li>
										<li><a href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a></li>
										<li><a href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a></li>
										<li><a href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a></li>
										<li><a href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a></li>
										<li><a href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a></li>
										<li><a href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a></li>
										<li><a href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a></li>
										<li><a href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a></li>
										<li><a href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a></li>
										<li><a href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a></li>
										<li><a href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a></li>
										<li><a href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a></li>
										<li><a href="tables.html"><div><i class="icon-table"></i>Tables</div></a></li>
										<li><a href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a></li>
										<li><a href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a></li>
										<li><a href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a></li>
										<li><a href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a></li>
									</ul>
								</div>
							</li>
						</ul>

						<!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->


		<!-- Slider
		============================================= -->
		<section id="slider" class="revoslider-wrap topmargin clearfix">

			<div class="container clearfix">

				<div id="rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#dddddd;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.0 auto mode -->
					<div id="rev_slider" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0">
						<ul>	<!-- SLIDE  -->
						<?php
							foreach ($post_feed as $post) :
								if($post->status_type!="wall_post") :
									//var_dump($post);

									// get normal sized image
									if(!empty($post->object_id)){
										$image_url = 'https://graph.facebook.com/'.$post->object_id.'/picture';//$post->picture;
									}
									elseif (!empty($post->picture)) {
										$image_url = TP_facebook::decode_facebook_url($post->picture);
										$image_url = parse_str(parse_url($image_url, PHP_URL_QUERY), $array);
										$image_url = explode('&', $array['url']);
										$image_url = $image_url[0];
									}
									?>
									<li data-index="rs-<?php echo $post->id; ?>" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php echo $image_url; ?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="" data-param1="<?php $date = new DateTime($post->updated_time); echo $date->format('F d, Y'); ?>" data-param2="<?php echo $post->message; ?>" data-description="">
									<!-- MAIN IMAGE -->
										<img src="include/rs-plugin/demos/assets/images/dummy.png"  alt="" data-lazyload="<?php echo $image_url; ?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

										<!-- LAYERS -->
										<!-- LAYER NR. 1 -->
										<div class="tp-caption Facebook-Likes"
											id="slide-<?php echo $post->id; ?>-layer-1"
											data-x="10"
											data-y="bottom"
											data-voffset="10"
											data-width="['90']"
											data-height="['32']"
											data-transform_idle="o:1;tO:-20% 50%;"

											data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
											data-transform_out="opacity:0;s:700;e:Power1.easeInOut;s:700;e:Power1.easeInOut;"
											data-start="500"
											data-splitin="none"
											data-splitout="none"
											data-basealign="slide"
											data-responsive_offset="off"
											data-responsive="off"

											style="z-index: 5; min-width: 90px; min-height: 32px; white-space: normal; max-width: 90px; max-height: 32px; font-size: 15px; line-height: 22px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:Roboto;text-align:center;background-color:rgba(59, 89, 153, 1.00);padding:5px 15px 5px 15px;border-radius:0 0 0 0;">
											<i class="icon-thumbs-up"></i> <?php echo isset($post->likes->data) ? sizeof($post->likes->data) : 0 ; ?>
										</div>

										<!-- LAYER NR. 2 -->
										<a class="tp-caption Facebook-Likes"
											href="<?php echo $post->link; ?>" target="_blank" id="slide-<?php echo $post->id; ?>-layer-2"
											data-x="105"
											data-y="bottom"
											data-voffset="10"
											data-width="['45']"
											data-height="['32']"
											data-transform_idle="o:1;tO:-20% 50%;"
											data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:500;e:Power1.easeInOut;"
											data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 0, 0, 1.00);cursor:pointer;"

											data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
											data-transform_out="opacity:0;s:700;e:Power1.easeInOut;s:700;e:Power1.easeInOut;"
											data-start="500"
											data-splitin="none"
											data-splitout="none"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="off"
											data-responsive="off"

											style="z-index: 6; min-width: 45px; min-height: 32px; white-space: normal; max-width: 45px; max-height: 32px; font-size: 15px; line-height: 22px; font-weight: 500; color: rgba(0, 0, 0, 1.00);font-family:Roboto;text-align:center;background-color:rgba(255, 255, 255, 1.00);padding:5px 15px 5px 15px;border-radius:0 0 0 0;"><i class="icon-link"></i>
										</a>
									</li>
								<?php
								endif;
							endforeach;
							?>
						</ul>
						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
					</div><!-- ENF OF SLIDER WRAPPER -->
				</div>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="sidebar clearfix">

						<!-- Demos Filter
						============================================= -->
						<ul class="demos-filter custom-filter clearfix" data-container="#portfolio">

							<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
							<li><a href="#" data-filter=".pf-premium">Premium</a></li>
							<li><a href="#" data-filter=".pf-slider">Slider</a></li>
							<li><a href="#" data-filter=".pf-hero">Hero Scene</a></li>
							<li><a href="#" data-filter=".pf-timer">Timer</a></li>
							<li><a href="#" data-filter=".pf-carousel">Carousel</a></li>
							<li><a href="#" data-filter=".pf-autosize">Auto-Size</a></li>
							<li><a href="#" data-filter=".pf-fullwidth">Full-Width</a></li>
							<li><a href="#" data-filter=".pf-fullscreen">Full-Screen</a></li>
							<li><a href="#" data-filter=".pf-tabs">Tabs</a></li>
							<li><a href="#" data-filter=".pf-sroll">Scroll Navigation</a></li>
							<li><a href="#" data-filter=".pf-menu">Menu Page</a></li>
							<li><a href="#" data-filter=".pf-frontpage">Front Page</a></li>
							<li><a href="#" data-filter=".pf-socialstream">Social Stream</a></li>
							<li><a href="#" data-filter=".pf-socialcontent">Social Content</a></li>
							<li><a href="#" data-filter=".pf-parallax">Parallax</a></li>
							<li><a href="#" data-filter=".pf-html5">HTML5 Video</a></li>
							<li><a href="#" data-filter=".pf-youtube">Youtube Video</a></li>
							<li><a href="#" data-filter=".pf-vimeo">Vimeo Video</a></li>

						</ul><!-- #portfolio-filter end -->

					</div>

					<div class="postcontent nobottomborder col_last clearfix">
					<!-- Portfolio Items
					============================================= -->
						<div id="portfolio" class="portfolio-3 grid-container portfolio-masonry clearfix">

							<article class="portfolio-item pf-premium pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-4kvideos.html">
										<img src="include/rs-plugin/demos/images/premium_4k.jpg" alt="Premium Concept">
									</a>
								</div>
								<h3 class="label label-danger" style="position: absolute; top: 8px; right: 8px;">New</span></a></h3>
							</article>

							<article class="portfolio-item pf-premium pf-vimeo pf-parallax pf-html5 pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-agency.html">
										<img src="include/rs-plugin/demos/images/agency_grid.jpg" alt="Premium Concept">
									</a>
								</div>
								<h3 class="label label-danger" style="position: absolute; top: 8px; right: 8px;">New</span></a></h3>
							</article>

							<article class="portfolio-item pf-premium pf-slider pf-vimeo pf-fullscreen pf-parallax pf-html5 pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-restaurant.html">
										<img src="include/rs-plugin/demos/images/restaurant_grid.jpg" alt="Premium Woocommerce">
									</a>
								</div>
								<h3 class="label label-danger" style="position: absolute; top: 8px; right: 8px;">New</span></a></h3>
							</article>

							<article class="portfolio-item pf-premium pf-slider pf-fullwidth pf-parallax">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-team-slider.html">
										<img src="include/rs-plugin/demos/images/premium_team_slider.jpg" alt="Premium Woocommerce">
									</a>
								</div>
								<h3 class="label label-danger" style="position: absolute; top: 8px; right: 8px;">New</span></a></h3>
							</article>

							<article class="portfolio-item pf-premium pf-carousel pf-slider pf-fullwidth pf-parallax">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-team-carousel.html">
										<img src="include/rs-plugin/demos/images/premium_team_carousel.jpg" alt="Premium Woocommerce">
									</a>
								</div>
								<h3 class="label label-danger" style="position: absolute; top: 8px; right: 8px;">New</span></a></h3>
							</article>

							<article class="portfolio-item pf-premium pf-slider pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-concept.html">
										<img src="include/rs-plugin/demos/images/premium_concept.jpg" alt="Premium Concept">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-premium pf-slider pf-autosize pf-socialstream pf-socialcontent pf-parallax pf-html5 pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-woocommerce.html">
										<img src="include/rs-plugin/demos/images/premium_woocommerce.jpg" alt="Premium Woocommerce">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-premium pf-hero pf-parallax pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-webproduct-hero.html">
										<img src="include/rs-plugin/demos/images/premium_web_product_3d.jpg" alt="Premium 3D Web Product">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-premium pf-slider pf-tabs pf-parallax pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-creative-freedom.html">
										<img src="include/rs-plugin/demos/images/premium_creative_freedom.jpg" alt="Premium Creative Freedom">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-premium pf-slider pf-autosize pf-socialcontent pf-parallax pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-parallax-scene.html">
										<img src="include/rs-plugin/demos/images/premium_parallax_scene.jpg" alt="Premium 3D Parallax">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-premium pf-slider pf-tabs pf-socialcontent pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-fullscreen-button.html">
										<img src="include/rs-plugin/demos/images/premium_fullscreen_button1.jpg" alt="Premium True Fullscreen">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-premium pf-slider pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-sliding-overlays.html">
										<img src="include/rs-plugin/demos/images/premium_sliding_overlays.jpg" alt="Premium Wow Factor">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-premium pf-socialcontent pf-parallax pf-html5 pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-scroll-effects.html">
										<img src="include/rs-plugin/demos/images/premium2_big_bold.jpg" alt="Premium Special Scroll">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-premium pf-carousel pf-socialcontent pf-parallax pf-html5 pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-content-zoom.html">
										<img src="include/rs-plugin/demos/images/premium1_content_zoom.jpg" alt="Premium Content Zoom">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-premium pf-carousel pf-tabs pf-parallax pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-food-carousel.html">
										<img src="include/rs-plugin/demos/images/premium3_food_carousel.jpg" alt="Premium Food Carousel">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-premium pf-hero pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-rotating-words.html">
										<img src="include/rs-plugin/demos/images/premium_rotatingwords.jpg" alt="Premium Rotating Words">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-premium pf-slider pf-timer pf-autosize pf-parallax pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-premium-travel.html">
										<img src="include/rs-plugin/demos/images/travelslider.jpg" alt="Premium Travel">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-timer pf-carousel pf-parallax pf-html5 pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-carousel-classic.html">
										<img src="include/rs-plugin/demos/images/carousel_classic1.jpg" alt="Carousel Classic">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-hero pf-parallax pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-hero-image.html">
										<img src="include/rs-plugin/demos/images/hero_image1.jpg" alt="Hero Images">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-autosize pf-tabs pf-socialstream pf-parallax pf-vimeo pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-streams-vimeo.php">
										<img src="include/rs-plugin/demos/images/slider_vimeo.jpg" alt="Vimeo Stream">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-sroll pf-frontpage pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-slider-photography.html">
										<img src="include/rs-plugin/demos/images/slider_photography.jpg" alt="Photography Front Page">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-hero pf-socialcontent pf-parallax pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-hero-newsletter.html">
										<img src="include/rs-plugin/demos/images/hero_newsletter1.jpg" alt="Hero Newsletter">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-autosize pf-tabs pf-socialstream pf-parallax pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-streams-flickr.php">
										<img src="include/rs-plugin/demos/images/slider_flickr.jpg" alt="Flickr Stream">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-carousel pf-parallax pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-carousel-showcase.html">
										<img src="include/rs-plugin/demos/images/carousel_showcase1.jpg" alt="Carousel Showcase">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-sroll pf-frontpage pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-slider-fashion.html">
										<img src="include/rs-plugin/demos/images/slider_fashion.jpg" alt="Fashion Front Page">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-timer pf-autosize pf-parallax pf-html5 pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-slider-classic.html">
										<img src="include/rs-plugin/demos/images/slider_classic1.jpg" alt="Classic Slider">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-hero pf-parallax pf-youtube pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-hero-youtube.html">
										<img src="include/rs-plugin/demos/images/hero_youtube1.jpg" alt="Hero Youtube">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-hero pf-parallax pf-html5 pf-vimeo pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-hero-news.html">
										<img src="include/rs-plugin/demos/images/hero_newscollection.jpg" alt="Hero Collection">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-carousel pf-sroll pf-menu pf-parallax pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-carousel-photography.html">
										<img src="include/rs-plugin/demos/images/carousel_photography1.jpg" alt="Carousel Photography">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-hero pf-sroll pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-hero-web-product-light.html">
										<img src="include/rs-plugin/demos/images/hero_webproductlight.jpg" alt="Hero Web Product Light">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-hero pf-parallax pf-vimeo pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-hero-vimeo.html">
										<img src="include/rs-plugin/demos/images/hero_vimeo1.jpg" alt="Hero Vimeo">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-hero pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-hero-web-product-dark.html">
										<img src="include/rs-plugin/demos/images/hero_webproductdark.jpg" alt="Hero Web Product Dark">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-autosize pf-socialstream pf-parallax pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-streams-facebook.php">
										<img src="include/rs-plugin/demos/images/slider_facebook.jpg" alt="Facbook Stream">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-menu pf-frontpage pf-parallax pf-html5 pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-slider-notgeneric.html">
										<img src="include/rs-plugin/demos/images/slider_generic.jpg" alt="Not Generic Front Page">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-carousel pf-tabs pf-parallax pf-html5 pf-vimeo pf-youtube pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-carousel-media.html">
										<img src="include/rs-plugin/demos/images/carousel_media1.jpg" alt="Carousel Media Autoplay">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-timer pf-autosize pf-tabs pf-parallax pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-slider-highlight-showcase.html">
										<img src="include/rs-plugin/demos/images/slider_highlight1.jpg" alt="Slider Highlight">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-timer pf-parallax pf-html5 pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-slider-classic-full.html">
										<img src="include/rs-plugin/demos/images/slider_classicfull.jpg" alt="Slider Classic Full">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-sroll pf-menu pf-frontpage pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-web-product-dark.html">
										<img src="include/rs-plugin/demos/images/slider_webproductdark.jpg" alt="Slider Web Product Dark">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-carousel pf-tabs pf-parallax pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-carousel-highlight.html">
										<img src="include/rs-plugin/demos/images/carousel_highlight1.jpg" alt="Carousel Highlight">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-autosize pf-parallax pf-html5 pf-vimeo pf-youtube pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-slider-media.html">
										<img src="include/rs-plugin/demos/images/slider_media.jpg" alt="Media Gallery">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-autosize pf-tabs pf-socialstream pf-parallax pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-streams-twitter.php">
										<img src="include/rs-plugin/demos/images/slider_twitter.jpg" alt="Twitter Stream">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-sroll pf-frontpage pf-socialcontent pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-slider-levano-restaurant-bar.html">
										<img src="include/rs-plugin/demos/images/slider_levano.jpg" alt="Bar/Restaurant">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-hero pf-parallax pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-hero-sports.html">
										<img src="include/rs-plugin/demos/images/hero_sports1.jpg" alt="Hero Sports">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-autosize pf-socialstream pf-parallax pf-youtube pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-streams-youtube.php">
										<img src="include/rs-plugin/demos/images/slider_youtube.jpg" alt="Youtube Stream">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-sroll pf-menu pf-frontpage pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-slider-gym.html">
										<img src="include/rs-plugin/demos/images/slider_gym.jpg" alt="Slider Gym">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-menu pf-frontpage pf-parallax pf-html5 pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-web-product-light.html">
										<img src="include/rs-plugin/demos/images/slider_webproductlight.jpg" alt="Slider Web Product Light">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-hero pf-socialcontent pf-parallax pf-fullscreen">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-hero-search-form.html">
										<img src="include/rs-plugin/demos/images/hero_searchform.jpg" alt="Hero Search Form">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-slider pf-timer pf-tabs pf-parallax pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-gallery-news.html">
										<img src="include/rs-plugin/demos/images/slider_news.jpg" alt="News Slider">
									</a>
								</div>
							</article>

							<article class="portfolio-item pf-carousel pf-autosize pf-socialstream pf-parallax pf-fullwidth">
								<div class="portfolio-image">
									<a class="image_fade" href="rs-demo-streams-instagram.php">
										<img src="include/rs-plugin/demos/images/carousel_instagram1.jpg" alt="Instagram Stream">
									</a>
								</div>
							</article>

						</div><!-- #portfolio end -->

					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="images/footer-widget-logo.png" alt="" class="footer-logo">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Headquarters:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">

								<h4>Blogroll</h4>

								<ul>
									<li><a href="http://codex.wordpress.org/">Documentation</a></li>
									<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
									<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
									<li><a href="http://wordpress.org/support/">Support Forums</a></li>
									<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
									<li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
									<li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
								</ul>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4>Recent Posts</h4>

								<div id="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Total Downloads</h5>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Clients</h5>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript">

		var revapi24;
		jQuery(document).ready(function() {
			if(jQuery("#rev_slider").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider");
			}else{
				revapi24 = jQuery("#rev_slider").show().revolution({
					sliderType:"standard",
					//jsFileLocation:"../../revolution/js",
					sliderLayout:"auto",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"on",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						}
						,
						arrows: {
							style:"gyges",
							enable:true,
							hide_onmobile:false,
							hide_onleave:false,
							tmp:'',
							left: {
								h_align:"right",
								v_align:"bottom",
								h_offset:40,
								v_offset:0
							},
							right: {
								h_align:"right",
								v_align:"bottom",
								h_offset:0,
								v_offset:0
							}
						}
						,
						tabs: {
							style:"ares",
							enable:true,
							width:350,
							height:80,
							min_width:350,
							wrapper_padding:0,
							wrapper_color:"#f5f5f5",
							wrapper_opacity:"1",
							tmp:'<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{param2}}</span></div><div class="tp-tab-image"></div>',
							visibleAmount: 10,
							hide_onmobile: true,
							hide_under:776,
							hide_onleave:false,
							hide_delay:200,
							direction:"vertical",
							span:true,
							position:"outer-left",
							space:0,
							h_align:"left",
							v_align:"top",
							h_offset:0,
							v_offset:0
						}
					},
					gridwidth:800,
					gridheight:640,
					lazyType:"single",
					shadow:0,
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					startWithSlide:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:"off",
					}
				});
			}
		});	/*ready*/
	</script>

</body>
</html>