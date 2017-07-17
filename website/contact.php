<!DOCTYPE html>
<html lang="en">
<?php include "_includes/head.php" ?>
<body class="contact-page">

<?php include "_includes/header.php" ?>
<?php include "_includes/navigation.php" ?>

<div class="wrap cf">
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
      <form action="mail-validation-confirmation.php" method="post" id="contactForm" onSubmit="return validateEmail(document.forms[0].email.value);">
          
      <ul>
          <li>
            <label class="text" for="name">Name</label>
            <input name="name" type="text" id="name" tabindex="10" />
          </li>
          <li>
            <label class="text" for="email">Email</label>
            <input name="email" type="email" id="email" required tabindex="20" />
          </li>
          <li>
            <label class="text" for="comments">Comments</label>
            <textarea name="comments" id="comments" tabindex="30"></textarea>
          </li>
          <li>
            <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdSZSkUAAAAAN4FxYtKLkOWnimJN7Ba8giHSJlb"></div>
          </li>
          <li>
            <button id="confirm" disabled>Check Captcha above to enable Send</button>
            <button id="send" class="display" disabled>Send</button>
          </li>
          
      </ul> 
      
      </form>

  </section>
  </div>
</div>

<?php include "_includes/footer.php" ?>

<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="js/flexslider.js"></script>

<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>