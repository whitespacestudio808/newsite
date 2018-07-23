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
							<img src="images/SHOWCASE/portfolio-nkope-website-cover.jpg" class="img-full-width" />
						</div>
						<div class="no-padding">
						
						<p class="no-margin">
						nkope (en – co pay) began as a new business venture between Dean J. Okimoto of ‘NALO FARMS and then ‘Nalo Project Director – Robert H. Higa. Both are the grandsons of immigrant Japanese farmers whose parents were born in farming and plantation communities. Both admit they were born with at least a bit of dirt under their fingernails.
							</p>
							<p class="empty-space-sm no-margin"></p>
							<p class="no-margin">
							They approached us for a COMPLETE Branding project.  Here is what we did
							</p>
							<ul>
								<li>Logo</li>
								<li>Website</li>
								<li>Package</li>
								<li>Brochure design</li>
								<li>Online banners</li>
								<li>Business card design</li>
								<li>and more...</li>
							</ul>							

							<p class="empty-space-sm no-margin"></p>
							<p class="no-margin">
							You can visit their website at <a href="https://www.nkope.com/" target="_blank">www.nkope.com</a>
							</p>
						</div>
						
					</div>
				<div class="empty-space"></div>
					<div class="column column-2 text-left block">
						<div class="no-padding gray">
							<img src="images/SHOWCASE/screencapture-nkope-2018-07-22-19_49_47.jpg" class="img-full-width" />
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