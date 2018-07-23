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
							<img src="images/SHOWCASE/portfolio-bloomingpot-website-cover.jpg" class="img-full-width" />
						</div>
						<div class="no-padding">
						
						<p class="no-margin">
						The Blooming Pot is a family floral design studio in Honolulu, creating beautiful flower arrangements for weddings, special events, the passing of loved ones, and of course luxury retail &amp; hotels since 2003.
						</p>
						<p class="empty-space-sm no-margin"></p>
						<p class="no-margin">
							They approached us looking to give them a new brand identity. So we provided them with:
						</p>
							
							<ul>
								<li>Brand new logo</li>
								<li>New website</li>
								<li>New business cards</li>
							
							</ul>
							<p class="empty-space-sm no-margin"></p>
							<p class="no-margin">
							You can visit their website at <a href="http://thebloomingpot.com" target="_blank">www.thebloomingpot.com</a>
							</p>
						</div>
						
					</div>
				<div class="empty-space"></div>
					<div class="column column-2 text-left block">
						<div class="no-padding gray">
							<img src="images/SHOWCASE/screencapture-thebloomingpot-2018-03-20-09_42_59.jpg" class="img-full-width" />
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