<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us - White Space Studio, Inc.</title>
<?php include 'includes/styles-scripts.php'; ?>
</head>

<body class="contact">
	<?php include 'includes/header.php'; ?>
	<section class="main">
		<div class=" section section-1 text-center no-padding">
			<div class="container full-width">
			<aside class="side-section aside-left">
				<h1>contact us</h1>
			</aside>
				<img src="images/header_contact.png" class="hero-graphic full-width" />
			</div>
		</div>
	
		<div class=" section white section-2 text-center">	
			<?php include 'includes/widgets/consultation-help.php'; ?>
		</div>
		
		<div class=" section white section-3 text-center contact-form">
			<div class="container no-padding-bottom">
				<h2 class="text-right">FOR GENERAL MESSAGES PLEASE FILL OUT THE FORM BELOW.</h2>
				<div class="empty-space"></div>
				<div class="no-margin-top column" >
					<form>
						<div><input type="text" placeholder="NAME" /></div>
						<div><input type="text" placeholder="EMAIL" /></div>
						<div><input type="text" placeholder="SUBJECT" /></div>
						<div class="text-center">
							<textarea placeholder="MESSAGE"></textarea>
							<br><br>
							<input type="submit" class="submit" />
						</div>
						
					</form>
					
				</div>
				
		
			</div>
			<div class="empty-space"></div>
		</div>
		
		
	</section>
	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/footer-scripts.php'; ?>
</body>
</html>