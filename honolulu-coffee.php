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
							<img src="images/SHOWCASE/portfolio-honolulucoffee-website-cover.jpg" class="img-full-width" />
						</div>
						<div class="no-padding">
						
						<p class="no-margin">
							Honolulu Coffee is a Farm to Cup coffee company founded in 1992.
							</p>
							<p class="empty-space-sm no-margin"></p>
							<p class="no-margin">
							They came to White Space Studio to redesign their website to give if a more up-to-date look while keeing the Hawaii feel to it.  This not only included the redesign of their theme but the rerstructuring of their content.
						</p>
						<p class="empty-space-sm no-margin"></p>
							<p class="no-margin">
							You can visit their website at <a href="https://www.honolulucoffee.com/" target="_blank">www.honolulucoffee.com</a>
							</p>
							
						</div>
						
					</div>
				<div class="empty-space"></div>
					<div class="column column-2 text-left block">
						<div class="no-padding gray">
							<img src="images/SHOWCASE/screencapture-honolulucoffee-2018-03-20-09_21_34.jpg" class="img-full-width" />
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