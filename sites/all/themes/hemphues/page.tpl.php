<div id="mobile-menu-wrapper" class="slideout-menu hidden-sm hidden-md hidden-lg">
	<div class="mobile-search-wrapper">
		<form role="search">
			<div class="form-group">
				<input id="mobile-search-input" type="text" class="form-control" placeholder="Search...">
		    </div>
		</form>
	</div>
	<div class="mobile-menu">
		<ul class="nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Shop <span class="caret"></span></a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
</div>
<div id="page-wrapper" class="slideout-panel">
	<header>
		<div class="topbar-wrapper">
			<div class="topbar container">
				<div class="row">
					<div class="search-wrapper hidden-xs col-sm-4">
						<form role="search">
							<div class="input-group">
								<input id="search-input" type="text" class="form-control hh-form-control" placeholder="Search...">
								<span class="input-group-btn">
									<button id="search-btn" class="btn hh-btn" type="button"><i class="search-icon"></i></button>
								</span>
						    </div>
						</form>
					</div>
					<div class="user-links-wrapper col-sm-8">
						<div class="mobile-menu-toggle visible-xs">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="user-links hidden-xs">
							<ul class="nav">
								<li role="presentation"><a href="#">Register</a></li>
								<li role="presentation"><a href="#">Login</a></li>
								<li class="cart" role="presentation"><a href="#">Cart <i class="cart-icon"></i> 0</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="logo-wrapper">
			<div class="logo container">
				<?php if ($logo): ?>
					<a href="<?php print $front_page; ?>" title="<?php print t('Hemp Hues'); ?>" rel="home" id="logo">
						<img class="img-responsive" src="<?php print $logo; ?>" alt="<?php print t('Hemp Hues'); ?>" />
					</a>
				<?php endif; ?>
			</div>
		</div>
		<div class="navigation-wrapper hidden-xs">
			<div class="navigation container">
				<ul class="nav">
					<li role="presentation"><a href="#">About</a></li>
					<li role="presentation" class="dropdown">
						<a id="shopDropdownLabel" class="dropdown-toggle" data-toggle="dropdown" data-target="#" role="button" aria-haspopup="true" aria-expanded="false">
							Shop <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" aria-labelledby="shopDropdownLabel">
							<li role="presentation"><a href="#">Category A</a></li>
						</ul>
					</li>			
					<li role="presentation"><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<div class="featured-slideshow-wrapper">
		<div class="featured-slideshow">
			<div class="row">
				<?php //print render($page['featured_slideshow']); ?>

				<section class="cd-hero">
					<ul class="cd-hero-slider autoplay">
						<li class="selected">
							<div class="cd-full-width">
								<h2>Hero slider</h2>
								<p>A simple, responsive slideshow in CSS &amp; jQuery.</p>
								<a href="http://codyhouse.co/?p=675" class="cd-btn">Article &amp; Download</a>
							</div>
						</li>
						<li>
							<div class="cd-half-width">
								<h2>Slide title here</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
								<a href="#0" class="cd-btn">Start</a>
								<a href="#0" class="cd-btn secondary">Learn More</a>
							</div>
							<div class="cd-half-width cd-img-container">
								<img src="sites/default/files/assets/tech-1.jpg" alt="tech 1">
							</div>
						</li>
						<li>
							<div class="cd-half-width cd-img-container">
								<img src="sites/default/files/assets/tech-2.jpg" alt="tech 2">
							</div>
							<div class="cd-half-width">
								<h2>Slide title here</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
								<a href="#0" class="cd-btn">Start</a>
								<a href="#0" class="cd-btn secondary">Learn More</a>
							</div>
						</li>
						<li class="cd-bg-video">
							<div class="cd-full-width">
								<h2>Slide title here</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
								<a href="#0" class="cd-btn">Learn more</a>
							</div>
							<div class="cd-bg-video-wrapper" data-video="sites/default/files/assets/video/video">
							</div>
						</li>
						<li>
							<div class="cd-full-width">
								<h2>Slide title here</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
								<a href="#0" class="cd-btn">Start</a>
								<a href="#0" class="cd-btn secondary">Learn More</a>
							</div>
						</li>
					</ul>

					<div class="cd-slider-nav">
						<nav>
							<span class="cd-marker item-1"></span>
							
							<ul>
								<li class="selected"><a href="#0">Intro</a></li>
								<li><a href="#0">Tech 1</a></li>
								<li><a href="#0">Tech 2</a></li>
								<li><a href="#0">Video</a></li>
								<li><a href="#0">Image</a></li>
							</ul>
						</nav> 
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="main-wrapper">
		<div class="main container">
			<div class="row">
				<div class="col-xs-12 col-sm-10">
					<main class="main container" role="main">
						<div class="row">
							<div class="col-xs-12">
								<?php //print render($page['content']); ?>
							</div>
						</div>
					</main>
				</div>
				<div class="hidden-xs col-sm-2">
					<aside class="sidebar">
						sidebar
					</aside>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="footer-wrapper">
			<div class="footer container">
				<div class="row">
					<div class="col-xs-6 col-md-4 links-wrapper">
						<h1 class="hidden-xs">Sitemap</h1>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Shop</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-4 social-icons-wrapper">
						<h1 class="hidden-xs">Social Media</h1>
						<ul>
							<li><a href="#"><img src="sites/all/themes/hemphues/img/facebook-icon.jpg"></a></li>
							<li><a href="#"><img src="sites/all/themes/hemphues/img/google-plus-icon.jpg"></a></li>
							<li><a href="#"><img src="sites/all/themes/hemphues/img/twitter-icon.jpg"></a></li>
							<li><a href="#"><img src="sites/all/themes/hemphues/img/instagram-icon.jpg"></a></li>
						</ul>
					</div>
					<div class="hidden-xs hidden-sm col-md-4 newsletter-wrapper">
						<h1>Newsletter</h1>
						<form class="form-horizontal">
							<div class="form-group">
								<label class="sr-only control-label">E-mail Address:</label>
								<div class="col-sm-12">
									<input class="form-control hh-form-control" placeholder="youremail@domain.com">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 copyright-wrapper">
						<p>&copy; 2015, Hemp Hues. Design by RG.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>