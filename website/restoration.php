<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	
	<title>Glacier Glass</title>
	<!-- <link rel="icon" type="image/ico" href="_images/favicon.ico"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Prompt|Roboto:300i,400|Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">

<?php include "_includes/header.php" ?>
<?php include "_includes/navigation.php" ?>

<section class="cf">

		<article>
			<h1>Restoration</h1>
			
			<p>Restoring the design adn integrity of your home's original windows, so often irreplaceable, requires experience, skill and old world craftsmanship.</p>

			<p>This might include:</p>
			
			<ul>
				<li>Sash Cord Replacement - Re-roping and reworking broken pulley systems</li>
				<li>Single Pane Re-glazing - Re-glazing improves safety, energy and aesthetics</li>
				<li>Custom Mill Work - Rails &amp; stiles, warped or rotted, repair or replace</li>
				<li>Refinishing - Remove old paint and refurbish to original standards</li>
				<li>Historic preservation</li>
			</ul>

		</article>



		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="_images/restoration-01.jpg">
				</li>
				<li>
					<img src="_images/restoration-02.jpg">
					<!-- <p class="flex-caption">something here.</p> -->
				</li>
				<li>
					<img src="_images/restoration-03.jpg">
				</li>
			</ul>
		</div>


</section>

<?php include "_includes/footer.php" ?>
</div>

<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="js/flexslider.js"></script>

<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>