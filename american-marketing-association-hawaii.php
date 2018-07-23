<?php
$url = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $url);
$file = $break[count($break) - 1];
$file = strtoupper(str_replace(".php", "", $file));
$client = str_replace("-", " ", $file);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $client; ?> - White Space Studio, Inc.</title>
<?php include 'includes/styles-scripts.php'; ?>
</head>

<body class="client-page half-gray">
	<?php include 'includes/header.php'; ?>
	<section class="main">
		<div class=" section section-1 text-center">
			<div class="container text-right">
				<h1><?php echo $client; ?></h1>
			</div>
		</div>
		<div class=" section section-2 text-center">
			<div class="container">
				
				<div class="column column-2 text-left">
						<div class="no-padding gray">
							<img src="images/SHOWCASE/portfolio-AMA-website-cover.jpg" class="img-full-width" />
						</div>
						<div class="no-padding">
						
						<p class="no-margin">
						The American Marketing Association (AMA) is the largest professional association for marketers in the United States with over 40,000 members worldwide. It is a professional association for individuals and organizations involved in the practice, teaching and study of all disciplines of marketing. For over six decades, the AMA has been the leading source for information, knowledge sharing and development in the marketing profession.
							</p>
							<p class="empty-space-sm no-margin"></p>
							<p class="no-margin">
							The Hawaii chapter of the American Marketing Association was established in July 1970.
							</p>
							<p class="empty-space-sm no-margin"></p>
							<p class="no-margin">
							They came to us to ramp up their look and feel so we revamped their website and did a logo refresh.  Some of the services we have provided are:
							</p>
							<ul>
								<li>Logo Refresh</li>
								<li>Website Redesign</li>
								<li>Facebook/Instagram banners</li>
								<li>Brochures</li>
								<li>Online banner ads</li>
								<li>and more...</li>
							</ul>
							<p class="empty-space-sm no-margin"></p>
							<p class="no-margin">
							You can visit their website at <a href="http://amahawaii.org" target="_blank">www.amahawaii.org</a>
							</p>
						</div>
						
					</div>
				<div class="empty-space"></div>
					<div class="column column-2 text-left block">
						<div class="no-padding gray">
							<img src="images/SHOWCASE/screencapture-AMA.jpg" class="img-full-width" />
						</div>
						<div class="no-padding">
							
							<p>
								
							</p>
						</div>
						
					</div>
				
				
				
				
			</div>
		
		</div>
		
		
	<div class=" section white section-3 text-center">
	<?php include 'includes/widgets/hire-shop.php'; ?>	
	</div>
	
		
		
	</section>
	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/footer-scripts.php'; ?>
</body>
</html>