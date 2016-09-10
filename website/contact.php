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
<body class="contact-page">
<div id="wrapper">

<?php include "_includes/header.php" ?>
<?php include "_includes/navigation.php" ?>

<div class="section-container">
<section id="left-side">

<h2>Contact</h2>
	<p>Please let us know how we can help.</p>
	<p>Glacier Glass<br>
	715 Aspen Way<br>
	Evergreen, CO</p>

	<p><a class="tel" href="tel:(303) 722-5952">303.722.5952</a> - Office<br>
	<a class="tel" href="tel:(720) 244-7634">720.244.7634</a> - Cell</p>

	<p><a href="mailto:john@glacierglass.biz">John@GlacierGlass.biz</a></p>

</section>
<section id="right-side">
    <form action="formmail.php" method="post" id="contactForm" onSubmit="return validateEmail(document.forms[0].email.value);">
        
    <ul>
        <li>
          <label class="text" for="name">Name</label>
          <input name="name" type="text" id="name" tabindex="10" />
        </li>
        <li>
          <label class="text" for="email">Email</label>
          <input name="email" type="email" id="email" tabindex="20" />
        </li>
        <li>
          <label class="text" for="comments">Comments</label>
          <textarea name="comments" id="comments" tabindex="30"></textarea>
        </li>
        <li>
            <input id="send" type="submit" value="Send" tabindex="40" />
        </li>
        
    </ul> 
    
    </form>

</section>
</div>

<?php include "_includes/footer.php" ?>
</div>

<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="js/flexslider.js"></script>

<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>