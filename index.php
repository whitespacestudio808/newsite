<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>White Space Studio, Inc. - Build, Setup, Design websites</title>
<link rel="stylesheet" type="text/css" href="./slick-1.8.0/slick/slick.css">
<link rel="stylesheet" type="text/css" href="./slick-1.8.0/slick/slick-theme.css">
<?php include 'includes/styles-scripts.php'; ?>
</head>

<body class="home top-full-color">
    <?php include 'includes/header.php'; ?>
    
    
</div>
	<section class="main-extra">
		<div class=" section section-1 text-center">
			<div class="container full-width">
				<aside class="side-section aside-left-no-adjust"><h3>website made easy</h3></aside>
				<h1>no matter what your tribe is into</h1>
                <h2 class="sub-heading">we got the website for it!</h2>
                <div class="lazy slider"  data-sizes="100vw">
                    <div>
                        <img src="images/hero3.png" class="hero-graphic mobile-hide full-width" />
                        <img src="images/hero_MOBILE_3.png" class="hero-graphic desktop-hide" />
                    </div>
                    <div>
                        <img src="images/hero_1.png" class="hero-graphic mobile-hide full-width" />
                        <img src="images/hero_MOBILE_1.png" class="hero-graphic desktop-hide" />
					</div>
					<div>
                        <img src="images/hero5.png" class="hero-graphic mobile-hide full-width" />
                        <img src="images/hero_MOBILE_5.png" class="hero-graphic desktop-hide" />
					</div>
					<div>
                        <img src="images/hero4.png" class="hero-graphic mobile-hide full-width" />
                        <img src="images/hero_MOBILE_4.png" class="hero-graphic desktop-hide" />
					</div>
					<div>
                        <img src="images/hero_2.png" class="hero-graphic mobile-hide full-width" />
                        <img src="images/hero_MOBILE_2.png" class="hero-graphic desktop-hide" />
                    </div>
                    
                </div>
			</div>
		</div>
		
		<div class=" section section-2 text-center added-bottom-margin white">
			<div class="container">
			<div class="empty-space mobile-hide"></div>	
			<h2 class="text-left">OUR <strong>HANDCRAFTED WEBSITES</strong> ARE THE PERFECT LAUNCHPAD TO YOUR ROCKSTAR ONLINE BUSINESS, SO YOU CAN ATTRACT YOUR DREAM CLIENTS.</h2>
			</div>
		</div>

		<div class=" section section-3 text-center added-bottom-margin white">
			<div class="container">
				<img src="images/shop-templates.jpg" class="full-width mobile-hide" />
				<img src="images/shop-templates-mobile.png" class="full-width desktop-hide" />
				<aside class="side-section aside-right"><h3>shop templates</h3></aside>
				<div class="gray-box-text gray-box-text-right text-left"><span>Like the feeling of control? Live for the freedom to modify, drag, and drop to your heart’s content? We feel you. So we created easy-to-use templates that are just waiting for you to customize.
					<br>
					<br>
					<br>
					<br></span>
						<a class="btn" href="./shop">shop</a>
					</div>
				<div class="empty-space"></div>
				
			</div>
			
		</div>
		
		<div class=" section section-4 text-center gray featured-templates">
			<?php include 'includes/widgets/featured-templates.php'; ?>
		</div>

		<div class=" section section-5 text-center added-bottom-margin white">
			<div class="container">
			<div class="empty-space mobile-hide"></div>	
			<h2 class="text-right">DIY GIVES YOU ALL THE BAD FEELS OR YOU SIMPLY WAN’T SOMETHING A LITTLE MORE CUSTOM?<strong>HIRE US TO CREATE YOUR DREAM WEBSITE.</strong> BELLS AND WISTLES INCLUDED.</h2>
			</div>
		</div>

		<div class=" section section-6 text-center added-bottom-margin white">
			<div class="container">
				<img src="images/see-portfolio.jpg" class="full-width mobile-hide" />
				<img src="images/see-portfolio-mobile.png" class="full-width desktop-hide" />
				<aside class="side-section aside-left"><h3>see portfolio</h3></aside>
				<div class="gray-box-text gray-box-text-left text-right"><span>We pride ourselves on creating beautiful sites that create a legacy for your business, and we think our clients agree. View our portfolio to see where we’ve left a little White Space around the web.
					<br>
					<br>
					<br>
					<br></span>
						<a class="btn" href="./portfolio">view</a>
					</div>
				<div class="empty-space"></div>
				
			</div>
			
		</div>



		
		<div class=" section section-5 text-center gray">
			
			<?php include 'includes/widgets/testimonials.php'; ?>
			<div class="empty-space"></div>
		</div>
		<div class=" section section-6 text-center white">
			<?php include 'includes/widgets/quiz.php'; ?>
			<div class="empty-space desktop-hide"></div>
		</div>
		
		
	</section>
	<?php include 'includes/footer.php'; ?>
    <?php include 'includes/footer-scripts.php'; ?>
    
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick-1.8.0/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      
      $(".lazy").slick({
        lazyLoad: 'anticipated', // ondemand progressive anticipated
        infinite: true,
		fade:true,
		autoplay: true,
		arrows: false
      });

			 $(".center").slick({
        dots: false,
        infinite: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 1
      });

    });
</script>
</body>
</html>