<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hire Us - White Space Studio, Inc.</title>
<link rel="stylesheet" type="text/css" href="./slick-1.8.0/slick/slick.css">
<link rel="stylesheet" type="text/css" href="./slick-1.8.0/slick/slick-theme.css">
<?php include 'includes/styles-scripts.php'; ?>
</head>

<body class="hire">
	<?php include 'includes/header.php'; ?>
	<section class="main">
		<div class=" section section-1 text-center no-padding">
			<div class="container full-width">
				<aside class="side-section aside-left">	
					<h1>hire us</h1>
					<h2 class="sub-heading">we'll get the job done!</h2>
				</aside>
				<img src="images/header_hireus.png" class="hero-graphic full-width" />
			</div>
		</div>
		<div class=" section section-2 text-center">
			<div class="container">
				<aside class="side-section aside-left aside-over-top"><h3>services</h3></aside>
				<h2 class="text-right">SKIP THE OVERWHELMING FEELING OF <strong>LAUNCHING YOUR WEBSITE</strong> ALONE AND LET US DO IT FOR YOU. BELLS AND WHISTLES INCLUDED.</h2>
				<div class="empty-space"></div>
				<div class="gray-box gray-box-left gray-box-half-height"></div>
				<div class="gray-box-full-content services-content">
					<div class=" column column-3">
						<div class="text-left">
							<h3>setup</h3>
							<p><br>Found the perfect template for your business but don’t want the hassle of setting it up? Let us do the heavy lifting. We’re pros.<br><br><br><strong>$780+</strong><br><br><br></p>
							<a class="btn" href="setup">tell me more</a>
						</div>
						<div class="text-left">
							<h3>restyle</h3>
							<p><br>Fell in love with one of our templates (or more) but need it to be just that little bit more you? Let us add your very own vision to it.<br><br><br><strong>$2,200+</strong><br><br><br></p>
							<a class="btn" href="restyle">details please</a>
						</div>
						<div class="text-left">
							<h3>custom</h3>
							<p><br>You are looking for a website that is handcrafted and has your name all over it? A custom built website is the one for you. <br><br><br><strong>$4,600+</strong><br><br><br></p>
							<a class="btn" href="custom">reach out</a>
						</div>
					</div>
				</div>
				
			</div>
			<div class="empty-space"></div>
			<div class="empty-space desktop-hide"></div>
		</div>
		
		<div class=" section section-4 text-center gray featured-templates">
			<?php include 'includes/widgets/client-showcase.php'; ?>
		</div>
		
		
		<div class=" section section-6 text-center">
			<?php include 'includes/widgets/quiz.php'; ?>
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