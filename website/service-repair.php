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
			<h1>Service &amp; Repair</h1>
			
			<p>Glacier Glass provides many different services and quality repair to all windows, new and old, including but not limited to:</p>
			<ul>
				<li>Sash Cords - Replace broken ropes</li>
				<li>Single Pane Glass - Replace broken glass and putty glazing</li>
				<li>Putty Glazing - Replace cracked and dried out putty</li>
				<li>Windows Painted Shut - Paint removal and re-establish proper operation</li>
				<li>Screen - Replace screen mesh and/or rebuild frames</li>
				<li>Replace Window Hardware - Locks, cranks, hinges and pulleys</li>
				<li>Storm Windows -  miscellaneous service and repair</li>
			</ul>
		</article>



		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="_images/john-workshop-01.jpg">
				</li>
				<li>
					<img src="_images/john-workshop-02.jpg">
					<!-- <p class="flex-caption">something here.</p> -->
				</li>
				<li>
					<img src="_images/john-workshop-03.jpg">
				</li>
				<li>
					<img src="_images/john-workshop-04.jpg">
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