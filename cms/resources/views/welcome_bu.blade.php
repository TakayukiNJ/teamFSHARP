<!doctype html>
<html lang="en" class="no-js">
<head>

	<meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ url('/') }}/../favicon.ico" type="img/icon/favicon.ico"/>
    
	<link rel="apple-touch-icon" sizes="76x76" href="{{ url('/') }}/../img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>F♯</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link href="https://nj10-0701-njtakayuki0816.c9users.io/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://nj10-0701-njtakayuki0816.c9users.io/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>
	<link href="https://nj10-0701-njtakayuki0816.c9users.io//css/demo.css" rel="stylesheet" />

	<!--     Fonts and icons     -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://nj10-0701-njtakayuki0816.c9users.io//css/nucleo-icons.css" rel="stylesheet">
	
</head>
<body class="presentation-page loading">
	<nav class="navbar navbar-expand-lg fixed-top navbar-transparent nav-down" color-on-scroll="500">
        <div class="container">
            <div class="navbar-translate">
				<div class="navbar-header">
					<a class="navbar-brand" href="presentation.html">Paper Kit 2 PRO</a>
				</div>
                <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html" data-scroll="true" href="javascript:void(0)">Components</a>
                    </li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Sections</a>
						<ul class="dropdown-menu dropdown-menu-right dropdown-danger">
	                        <a class="dropdown-item" href="sections.html#headers"><i class="nc-icon nc-tile-56"></i>&nbsp; Headers</a>
	                        <a class="dropdown-item" href="sections.html#features"><i class="nc-icon nc-settings"></i>&nbsp; Features</a>
	                        <a class="dropdown-item" href="sections.html#blogs"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blogs</a>
	                        <a class="dropdown-item" href="sections.html#teams"><i class="nc-icon nc-single-02"></i>&nbsp; Teams</a>
	                        <a class="dropdown-item" href="sections.html#projects"><i class="nc-icon nc-calendar-60"></i>&nbsp; Projects</a>
							<a class="dropdown-item" href="sections.html#pricing"><i class="nc-icon nc-money-coins"></i>&nbsp; Pricing</a>
							<a class="dropdown-item" href="sections.html#testimonials"><i class="nc-icon nc-badge"></i>&nbsp; Testimonials</a>
							<a class="dropdown-item" href="sections.html#contact-us"><i class="nc-icon nc-mobile"></i>&nbsp; Contacts</a>
	                    </ul>
					</li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="javascript:void(0)">Examples</a>
						<ul class="dropdown-menu dropdown-menu-right dropdown-danger">
	                        <a class="dropdown-item" href="examples/about-us.html"><i class="nc-icon nc-bank"></i>&nbsp; About Us</a>
	                        <a class="dropdown-item" href="examples/add-product.html"><i class="nc-icon nc-basket"></i>&nbsp; Add Product</a>
	                        <a class="dropdown-item" href="examples/blog-post.html"><i class="nc-icon nc-badge"></i>&nbsp; Blog Post</a>
	                        <a class="dropdown-item" href="examples/blog-posts.html"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blog Posts</a>
	                        <a class="dropdown-item" href="examples/contact-us.html"><i class="nc-icon nc-mobile"></i>&nbsp; Contact Us</a>
							<a class="dropdown-item" href="examples/discover.html"><i class="nc-icon nc-world-2"></i>&nbsp; Discover</a>
							<a class="dropdown-item" href="examples/ecommerce.html"><i class="nc-icon nc-send"></i>&nbsp; Ecommerce</a>
							<a class="dropdown-item" href="examples/landing.html"><i class="nc-icon nc-spaceship"></i>&nbsp; Landing</a>
							<a class="dropdown-item" href="examples/login.html"><i class="nc-icon nc-lock-circle-open"></i>&nbsp; Login</a>
							<a class="dropdown-item" href="examples/product-page.html"><i class="nc-icon nc-album-2"></i>&nbsp; Product Page</a>
							<a class="dropdown-item" href="examples/profile.html"><i class="nc-icon nc-single-02"></i>&nbsp; Profile</a>
							<a class="dropdown-item" href="examples/register.html"><i class="nc-icon nc-bookmark-2"></i>&nbsp; Register</a>
							<a class="dropdown-item" href="examples/search-with-sidebar.html"><i class="nc-icon nc-zoom-split"></i>&nbsp; Search</a>
							<a class="dropdown-item" href="examples/settings.html"><i class="nc-icon nc-settings-gear-65"></i>&nbsp; Settings</a>
							<a class="dropdown-item" href="examples/twitter-redesign.html"><i class="nc-icon nc-tie-bow"></i>&nbsp; Twitter</a>
	                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-round btn-danger" href="https://www.creative-tim.com/product/paper-kit-2-pro">
                            <i class="nc-icon nc-cart-simple"></i> Buy now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
<div class="wrapper">
	<div class="page-header section-dark" style="background-image: url('assets/img/sections/pk-pro-cover.jpg')">
		<div class="content-center">
			<div class="container">
				<div class="title-brand">
					<h1 class="presentation-title">Paper Kit 2</h1>
					<div class="type">PRO</div>
					<div class="fog-low">
						<img src="assets/img/sections/fog-low.png" alt="">
					</div>
					<div class="fog-low right">
						<img src="assets/img/sections/fog-low.png" alt="">
					</div>
				</div>

				<h2 class="presentation-subtitle text-center">Make your mark with a premium Bootstrap 4 UI Kit! </h2>
			</div>
		</div>
		<h6 class="category category-absolute">Designed and coded by
			<a href="https://www.creative-tim.com" target="_blank">
				<img src="assets/img/creative-tim-white-slim2.png" class="creative-tim-logo">
			</a>
		</h6>
	</div>


	<div class="section section-dark section-summary">
    	<div class="container">
			<div class="row">
				<div class="col-md-4">
				   <div class="info">
						<div class="icon icon-danger">
							<i class="nc-icon nc-layout-11"></i>
						</div>
						<div class="description">
							<h4 class="info-title"> Huge Number of Components </h4>
							<p>The kit comes with components designed to look perfect together. All components fit perfectly with each other.</p>
						</div>
				   </div>
				</div>

				<div class="col-md-4">
				   <div class="info">
						<div class="icon icon-danger">
							<i class="nc-icon nc-tile-56"></i>
						</div>
						<div class="description">
							<h4 class="info-title"> Multi-Purpose Sections </h4>
							<p>The sections will help you generate pages in no time. From team presentation to pricing options, you can easily customise and built your examples.</p>
						</div>
				   </div>
				</div>

				<div class="col-md-4">
				   <div class="info">
						<div class="icon icon-danger">
							<i class="nc-icon nc-paper"></i>
						</div>
						<div class="description">
							<h4 class="info-title"> Example Pages </h4>
							<p>Speed up your development time or get inspired with the large number of example pages. You can jump start your development with our pre-built example pages.</p>
						</div>
				   </div>
				</div>

			</div>
    	</div>
    </div>

	<div class="section section-components section-dark">
		<div class="row">
			<div class="col-md-12 col-lg-6">
				<div class="image-container">
					<img class="components-macbook" src="assets/img/presentation-page/laptop-basic.png" alt="" />
					<img class="table-img" src="assets/img/presentation-page/table.jpg" alt="" />
					<img class="share-btn-img" src="assets/img/presentation-page/share-btn.png" alt="" />
					<img class="coloured-card-btn-img" src="assets/img/presentation-page/coloured-card-with-btn.png" alt="" />
					<img class="coloured-card-img" src="assets/img/presentation-page/coloured-card.png" alt="" />
					<img class="social-img" src="assets/img/presentation-page/social-row.png" alt="" />
					<img class="pin-btn-img" src="assets/img/presentation-page/pin-btn.png" alt="" />
				</div>
			</div>
			<div class="col-md-10 col-lg-4 ml-auto mr-auto">
				<div class="container basic-container">
					<h3 class="title">Basic Components</h2>
					<h6 class="category">The core elements of your website</h6>
					<h5 class="description">We re-styled every Bootstrap 4 element to match the Paper Kit style.  All the Bootstrap 4 components that you need in a development have been re-design with the new look. Besides the numerous basic elements, we have also created additional classes. All these items will help you take your project to the next level.</h5>
				</div>
			</div>
		</div>
	</div>

	<div class="section section-cards section-gold">
		<div class="codrops-header">
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="section-description">
						<h3 class="title">Beautiful Cards</h3>
						<h6 class="category">One Card for Every Problem</h6>
						<h5 class="description">We have gone above and beyond with options for you to organise your information. From cards designed for blog posts, to product cards or user profiles, you will have many options to choose from. All the cards follow the Paper Kit style principles and have a design that stands out.  </h5>
					</div>
				</div>
			</div>
		</div>
		<section class="section-intro ">
			<div class="isolayer isolayer--deco1 isolayer--shadow ">
				<ul class="grid">
					<li class="grid__item first-card">
						<a class="grid__link" href="index.html#cards">
							<img class="grid__img layer" src="assets/img/presentation-page/try/purple-card.png" alt="01" />
						</a>
					</li>
					<li class="grid__item second-card">
						<a class="grid__link" href="index.html#cards">
							<img class="grid__img layer" src="assets/img/presentation-page/try/twitter-card.jpg" alt="02" />
						</a>
					</li>
					<li class="grid__item third-card">
						<a class="grid__link" href="index.html#cards">
							<img class="grid__img layer" src="assets/img/presentation-page/try/facebook-card.jpg" alt="03" />
						</a>
					</li>
					<li class="grid__item fourth-card">
						<a class="grid__link" href="index.html#cards">
							<img class="grid__img layer" src="assets/img/presentation-page/try/pricing-card.jpg" alt="04" />
						</a>
					</li>
					<li class="grid__item fifth-card">
						<a class="grid__link" href="index.html#cards">
							<img class="grid__img layer" src="assets/img/presentation-page/try/blog-card.jpg" alt="05" />
						</a>
					</li>
					<li class="grid__item sixth-card">
						<a class="grid__link" href="index.html#cards">
							<img class="grid__img layer" src="assets/img/presentation-page/try/capture.jpg" alt="06" />
						</a>
					</li>
					<li class="grid__item seventh-card">
						<a class="grid__link" href="index.html#cards">
							<img class="grid__img layer" src="assets/img/presentation-page/try/team-card.jpg" alt="07" />
						</a>
					</li>
					<li class="grid__item eight-card">
						<a class="grid__link" href="index.html#cards">
							<img class="grid__img layer" src="assets/img/presentation-page/try/testimonal-card.jpg" alt="07" />
						</a>
					</li>
					<li class="grid__item ninth-card">
						<a class="grid__link" href="index.html#cards">
							<img class="grid__img layer" src="assets/img/presentation-page/try/pricing-card-icon.jpg" alt="07" />
						</a>
					</li>
				</ul>
			</div>
		</section><!--/intro-->

	</div>
	<div id="fadeInAnim">
		<div class="section section-content section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="image-container">
							<img class="img" src="assets/img/presentation-page/ipad-content-2.png"/>
							<img class="area-img add-animation" src="assets/img/presentation-page/ipad-left-img.jpg"/>
							<img class="info-img add-animation" src="assets/img/presentation-page/ipad-right-img.jpg"/>
						</div>
					</div>

					<div class="col-md-4 ">
						<div class="section-description">
							<h3 class="title">Content Areas</h3>
							<h6 class="category">For Areas that Need More Space</h6>
							<h5 class="description">We took into consideration multiple use cases and came up with some specific elements for you. If you need elements such as tables, comments, description areas, tabs and many others, we've got you covered. They're beautiful and easy to use for the end user navigating your website. </h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section section-sections section-gray">
		<div class="container">
			<div class="col-md-8 ml-auto mr-auto">
				<div class="section-description text-center">
					<h2 class="title">Sections you will love</h2>

					<h5 class="description"> Build pages in no time using pre-made sections! We have created multiple sections for you to put together and customise into pixel perfect example pages. From headers to footers, you will be able to choose the best combination for your project.</h5>
					<br/>
					<a href="sections.html" target="_blank" class="btn btn-rose btn-round">View All Sections</a>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="section-cols">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/header-1.jpg" alt="" />
						</div>
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/header-2.jpg" alt="" />
						</div>
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/header-3.jpg" alt="" />
						</div>
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/header-4.jpg" alt="" />
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/team-cards-social.jpg" alt="" />
						</div>
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/bg-pricing-card.jpg" alt="" />
						</div>
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/white-pricing-card.jpg" alt="" />
						</div>
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/team-member-card.jpg" alt="" />
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/testimonials-1.jpg" alt="" />
						</div>
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/blog-bg-cards.jpg" alt="" />
						</div>
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/our-products.jpg" alt="" />
						</div>
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/projects-cards.jpg" alt="" />
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/blogpost-cards.jpg" alt="" />
						</div>
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/blogpost-2-cards.jpg" alt="" />
						</div>
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/coloured-picind-card.jpg" alt="" />
						</div>
						<div class="col-md-3">
							<img src="assets/img/presentation-page/screenshots/team-3.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>