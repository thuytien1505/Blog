<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Blog</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- fonts -->
	<script src="https://kit.fontawesome.com/6e4540c13e.js" crossorigin="anonymous"></script>

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">

	<!-- slick carousel -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	<!-- AOS library -->
	<link rel="stylesheet" href="css/aos.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- 	custom styling -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<!--GSAP ANimation Library-->
    <script src="js/gsap/gsap.min.js"></script>
	<!--Header-->
	<?php include('header.php'); ?>

	<!-- Introduce -->
	<div class="introduce" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
        <div class="sign">
        	<h3 data-aos="zoom-in" data-aos-delay="200">
				<span class="M fast-flicker">M</span>
				<span class="E">e</span>
				<span class="m">m</span>
				<span class="O">o</span>
				<span class="R flicker">r</span>
				<span class="Y">y</span>
		    </h3>
        </div>
		<div class="shape rellax">
			<img class="airplane" src="../Home/images/flight.png" alt="">
		</div>
	</div>
	<!-- End Introduce -->

	<!-- Post Content -->
	<section class="content content-areas">
		<section class="content-left articles-block">
			<div class="tabbar-control">
				<a href="#">
					<span class="line-control">
						<div class="trending">Trending</div>
					</span>
				</a>
				<a href="#">
					<span class="line-control">
						<div class="trending">Colection</div>
					</span>
				</a>
				<a href="#">
					<span class="line-control">
						<div class="trending">Tags</div>
					</span>
				</a>
				<a href="#">
					<span class="line-control">
						<div class="trending">News</div>
					</span>
				</a>
			</div>
			<div class="container-main">
				<div class="container">
					<a href="#" class="img-container"><img src="images/bg1.jpg" alt="" class="content-post-image"></a>
					<div class="content-post-main">
						<a href="#" class="title-container"><h4 class="content-post-title">Love is the moments</h4></a>
						<i class="fa fa-user content-post-user">Admin</i>
						<i class="fas fa-calendar content-post-calendar">Jun 24, 2020</i>
						<p class="content-post">What is love? I want to traveling around the world.</p>
					</div>
			    </div>
			    <div class="container">
					<a href="#" class="img-container"><img src="images/bg1.jpg" alt="" class="content-post-image"></a>
					<div class="content-post-main">
						<a href="#" class="title-container"><h4 class="content-post-title">Love is the moments</h4></a>
						<i class="fa fa-user content-post-user">Admin</i>
						<i class="fas fa-calendar content-post-calendar">Jun 24, 2020</i>
						<p class="content-post">What is love? I want to traveling around the world.</p>
					</div>
			    </div>
			    <div class="container">
					<a href="#" class="img-container"><img src="images/bg1.jpg" alt="" class="content-post-image"></a>
					<div class="content-post-main">
						<a href="#" class="title-container"><h4 class="content-post-title">Love is the moments</h4></a>
						<i class="fa fa-user content-post-user">Admin</i>
						<i class="fas fa-calendar content-post-calendar">Jun 24, 2020</i>
						<p class="content-post">What is love? I want to traveling around the world.</p>
					</div>
			    </div>
			    <div class="container">
					<a href="#" class="img-container"><img src="images/bg1.jpg" alt="" class="content-post-image"></a>
					<div class="content-post-main">
						<a href="#" class="title-container"><h4 class="content-post-title">Love is the moments</h4></a>
						<i class="fa fa-user content-post-user">Admin</i>
						<i class="fas fa-calendar content-post-calendar">Jun 24, 2020</i>
						<p class="content-post">What is love? I want to traveling around the world.</p>
					</div>
			    </div>
			    <div class="container">
					<a href="#" class="img-container"><img src="images/bg1.jpg" alt="" class="content-post-image"></a>
					<div class="content-post-main">
						<a href="#" class="title-container"><h4 class="content-post-title">Love is the moments</h4></a>
						<i class="fa fa-user content-post-user">Admin</i>
						<i class="fas fa-calendar content-post-calendar">Jun 24, 2020</i>
						<p class="content-post">What is love? I want to traveling around the world.</p>
					</div>
			    </div>
			    <div class="container">
					<a href="#" class="img-container"><img src="images/bg1.jpg" alt="" class="content-post-image"></a>
					<div class="content-post-main">
						<a href="#" class="title-container"><h4 class="content-post-title">Love is the moments</h4></a>
						<i class="fa fa-user content-post-user">Admin</i>
						<i class="fas fa-calendar content-post-calendar">Jun 24, 2020</i>
						<p class="content-post">What is love? I want to traveling around the world.</p>
					</div>
			    </div>
			</div>
	    </section>
		<section class="content-right sub-block">
			<img src="images/bg1.jpg" alt="" class="avatar-right-image">
			<div class="content-avatar">
				<h3 class="content-avatar-title">Aventure</h3>
				<h5 class="content-avatar-header">Inspiring Stories Of Aventure</h5>
				<p class="content-avatar-main">Let's go! Traveling around the world.</p>
			</div>
		</section>
	</section>
	<!-- End Post Content -->

	<!-- Featured -->

	<section class="featured">
		<div class="featured-title">
			<h4>Featured</h4>
		</div>
		<div class="featured-theme" data-aos="zoom-in" data-aos-delay="200">
			<div class="theme" data-aos="fade-right" data-aos-delay="500">
				<a href="#"><img src="images/bg1.jpg" alt="" class="theme-image"></a>
				<div class="theme-issue">
					<a href="#"><h4 class="theme-title">Seas</h4></a>
				    <p class="theme-content">Sea so beautiful.</p> 
				</div>
			</div>
			<div class="theme" data-aos="fade-down" data-aos-delay="500">
				<a href="#"><img src="images/bg1.jpg" alt="" class="theme-image"></a>
				<div class="theme-issue">
					<a href="#"><h4 class="theme-title">Mountain</h4></a>
				    <p class="theme-content">Mountain so beautiful.</p> 
				</div>
			</div>
			<div class="theme" data-aos="fade-left" data-aos-delay="500">
				<a href="#"><img src="images/bg1.jpg" alt="" class="theme-image"></a>
				<div class="theme-issue">
					<a href="#"><h4 class="theme-title">Desert</h4></a>
				    <p class="theme-content">Desert so beautiful.</p> 
				</div>
			</div>
		</div>
	</section>
	<!-- End Featured -->

	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<!-- Post slider -->
		<div class="post-slider">
			<h1 class="slider-title">
				Trending Post
			</h1>

			<i class="fa fa-chevron-left prev"></i>
			<i class="fa fa-chevron-right next"></i>

			<div class="post-wrapper" data-aos="flip-left"
                                      data-aos-easing="ease-out-cubic"
                                      data-aos-duration="2000">
				<div class="post">
					<a href="#"><img src="images/bg1.jpg" alt="" class="slider-image"></a>
					<div class="post-info">
						<h4 class="post-title-slider"><a href="#">Travel is the beautiful moments for your life</a></h4>
						<i class="fa fa-user admin">Admin</i>
						&nbsp;
						<i class="fas fa-calendar-week calendar">jun 24, 2020</i>
					</div>
				</div>
				<div class="post">
					<a href="#"><img src="images/bg1.jpg" alt="" class="slider-image"></a>
					<div class="post-info">
						<h4 class="post-title-slider"><a href="#">Travel is the beautiful moments for your life</a></h4>
						<i class="fa fa-user admin">Admin</i>
						&nbsp;
						<i class="fas fa-calendar-week calendar">jun 24, 2020</i>
					</div>
				</div>
				<div class="post">
					<a href="#"><img src="images/bg1.jpg" alt="" class="slider-image"></a>
					<div class="post-info">
						<h4 class="post-title-slider"><a href="#">Travel is the beautiful moments for your life</a></h4>
						<i class="fa fa-user admin">Admin</i>
						&nbsp;
						<i class="fas fa-calendar-week calendar">jun 24, 2020</i>
					</div>
				</div>
				<div class="post">
					<a href="#"><img src="images/bg1.jpg" alt="" class="slider-image"></a>
					<div class="post-info">
						<h4 class="post-title-slider"><a href="#">Travel is the beautiful moments for your life</a></h4>
						<i class="fa fa-user admin">Admin</i>
						&nbsp;
						<i class="fas fa-calendar-week calendar">jun 24, 2020</i>
					</div>
				</div>
				<div class="post">
					<a href="#"><img src="images/bg1.jpg" alt="" class="slider-image"></a>
					<div class="post-info">
						<h4 class="post-title-slider"><a href="#">Travel is the beautiful moments for your life</a></h4>
						<i class="fa fa-user admin">Admin</i>
						&nbsp;
						<i class="fas fa-calendar-week calendar">jun 24, 2020</i>
					</div>
				</div>
			</div>
		</div>

		<!-- End Post slider -->
	</div>
	<!-- End Page Wrapper -->

	<!--Footer-->
	<?php include('footer.php'); ?>
	<!--Jquery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- slick carousel -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<!-- aos js -->
	<script type="text/javascript" src="js/aos.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

	<script src="js/script.js"></script>
	<script src="js/parallax.min.js"></script>
	<!--Animated Airplane-->
	<script src="js/airplane.js"></script>
</body>
</html>