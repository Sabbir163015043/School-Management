<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kartikaher High School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('/')}}front/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('/')}}front/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('/')}}front/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('/')}}front/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset('/')}}front/css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('/')}}front/css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="{{asset('/')}}front/css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('/')}}front/css/style.css">

	<!-- Modernizr JS -->
	<script src="{{asset('/')}}front/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{asset('/')}}front/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site">sabbirhossain.tct94@gmail.com</p>
						<p class="num">Call: +8801706735774</p>
						<ul class="fh5co-social">
							<li><a href="https://www.facebook.com/Kartikaharhighschool" target="_blank"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2" target="_blank"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2" target="_blank"></i></a></li>
							<li><a href="https://www.facebook.com/groups/259818881404288" target="_blank"><i class="icon-facebook2"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="{{ route('/') }}"><i class="icon-study"></i>Educ<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="{{ route('/') }}">হোম পেজ</a></li>
							<li class="has-dropdown">
								<a href="">প্রতিষ্ঠান প্রশাসন</a>
								
								<ul class="dropdown">
									
								@foreach($categories as $key => $category)
                                <li><a href="{{ route('category-teacher',['id' => $category->id]) }}">{{ $category->name }}</a></li>
                                @endforeach
									
								</ul>
								
							</li>
							<li class="active"><a href="courses.html">পাঠ্যধারাগুলি</a></li>
							<li><a href="notice.html">নোটিশ</a></li>
							<li><a href="">ভর্তি ফরম </a></li>
							<li><a href="contact.html">যোগাযোগ</a></li>
							</li>
							<li><a href="about.html">সম্পর্কিত</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	
	
@yield('body')
	<footer id="fh5co-footer" role="contentinfo" style="background-image: url({{asset('/')}}front/images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3 style="font-size:15px">About This</h3>
					<p>Please forgive me for making this mistake. I hope this website will be very helpful for everyone .</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3 style="font-size:15px">সরাসরি লিঙ্ক </h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">পাঠ্যধারাগুলি</a></li>
						<li><a href="#">নোটিশ</a></li>
						<li><a href="#">ভর্তি তথ্য</a></li>
						<li><a href="#">যোগাযোগ</a></li>
						<li><a href="#">সম্পর্কিত</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3 style="font-size:15px">যোগাযোগ</h3>
					<ul class="fh5co-footer-links">
						<p style="color: rgba(255, 255, 255, 0.5)">
							
							প্রতিষ্ঠানের নাম : কার্ত্তিকাহার উচ্চ বিদ্যালয় <br>
							গ্রাম  : কার্ত্তিকাহার <br>
							পোস্ট : নিউ-রসুলপুর <br>
							থানা  : বদলগাছী <br>
							জেলা : নওগাঁ  <br>
						</p>
					</ul>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3 style="font-size:15px">গুরুত্বপুর্ণ সাইট</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">রাজশাহী শিক্ষা বোর্ড</a></li>
						<li><a href="#">শিক্ষা মন্ত্রনালয়</a></li>
						<li><a href="#">শিক্ষক বাতায়ন</a></li>
						<li><a href="#">মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর </a></li>
						<li><a href="#">ব্যানবেইস</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2021 All Rights Reserved.</small> 
						<small class="block">Designed & Devlopment By Md Sabbir Hossain <a href="https://www.facebook.com/sa.bbir.562/" target="_blank"></small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('/')}}front/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('/')}}front/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{asset('/')}}front/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{asset('/')}}front/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('/')}}front/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="{{asset('/')}}front/js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="{{asset('/')}}front/js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="{{asset('/')}}front/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('/')}}front/js/jquery.magnific-popup.min.js"></script>
	<script src="{{asset('/')}}front/js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="{{asset('/')}}front/js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="{{asset('/')}}front/js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

