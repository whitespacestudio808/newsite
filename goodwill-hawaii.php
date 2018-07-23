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
							<img src="images/SHOWCASE/portfolio-Goodwill-website-cover.jpg" class="img-full-width" />
						</div>
						<div class="no-padding">
						
							<p class="no-margin">
							Goodwill Hawaii is a 501 (c)(3) non-profit charity that helps people with employment barriers to reach their full potential and become self-sufficient.
							</p>
							<p class="empty-space-sm no-margin"></p>
							<p class="no-margin">
							They approached us looking to rebrand thier company so that they could appeal more towards the Hawaii market and reinforce their message of providing jobs and accepting donations.
							</p>
							<p class="empty-space-sm no-margin"></p>
							<p class="no-margin">
							We have been proudly working with Goodwill Hawaii since 2015 and have also won a Rebrading award from <a href="http://amahawaii.org/" target="_blank">AMA Hawaii</a>. Some of the services we have provided and continue to provide are:
							</p>
							
							<ul>
								<li>Logo Refresh</li>
								<li>Website Redesign</li>
								<li>Branding Guide</li>
								<li>Interior design of their store locations</li>
								<li>Truck designs</li>
								<li>Busniess card designs/ brochure designs / posters</li>
								<li>T-shirt designs</li>
								<li>and more...</li>
							</ul>
							<p class="empty-space-sm no-margin"></p>
							<p class="no-margin">
							You can visit their website at <a href="https://higoodwill.org" target="_blank">www.higoodwill.org</a>
							</p>
						</div>
						
					</div>
				<div class="empty-space"></div>
					<div class="column column-2 text-left block">
						<div class="no-padding gray">
							<img src="images/SHOWCASE/screencapture-higoodwill-org-1519260839832.jpg" class="img-full-width" />
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