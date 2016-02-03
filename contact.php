<?php
	session_start();
	if(!isset($_SESSION['token'])) $_SESSION['token'] = uniqid();
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Make contact</title>
		<meta name="description" content="Looking for an UX Designer over motivated based in Paris ?">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/styles.css" media="all">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic' rel='stylesheet' type='text/css'>
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-69935541-1', 'auto');
		  ga('send', 'pageview');

</script>
	</head>
	<body class="page">
		<?php  function killSession(){session_destroy();}session_start();if(!isset($_SESSION['token']))$_SESSION['token']=uniqid();$result='';if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message'])&&isset($_POST['token'])){if(isset($_SESSION['token'])&&$_SESSION['token']==$_POST['token']){$myEmail='victorfinkel.box@gmail.com';$name=$_POST['name'];$email=$_POST['email'];$message=$_POST['message'];if(empty($name)||empty($email)||empty($message)){$result="<p class='alert alert--warning'> You have not filled in all the form fields </p>";}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){$result="<p class='alert alert--warning'>Your email is not valid.</p>";}else {$to=$myEmail;$subject='Portfolio : New message';$message="Bonjour Victor, vous venez de recevoir un email de $name\n\n"."Email: $email\n\n Message:\n $message";$headers='MIME-Version: 1.0'."\r\n";$headers.='Content-type: text/html; charset=iso-8859-1'."\r\n";$headers.='From: contact@victorfinkel.fr'."\r\n";mail($to,$subject,$message,$headers);$result="<p class='alert alert--success'>Your message was sent.</p>";killSession();}}else {$result="<p class='alert alert--warning'>Your message has already been sent.</p>";killSession();}}?>

		<input type="checkbox" id="toggle-nav" class="page__toggle-nav" hidden />
			<nav class="nav nav--topics">
				<label class="burger page__burger page__push" for="toggle-nav" hidden><span class="burger__icon page__icon-burger"><span class="visually-hidden">Menu</span></span></label>
				<ul class="grid nav__list wrapper page__push page__push--hidden">
					<li class="grid__item grid__item--fluid nav__item--logo"><a href="index.html" ><img src="img/logo.png" class="logo" alt="victor finkel"></a></li>
					<li class="grid__item nav__item"><a href="index.html" class="nav__link">Home</a></li>
					<li class="grid__item nav__item"><a href="work.html" class="nav__link">Work</a></li>
					<li class="grid__item nav__item"><a href="about.html" class="nav__link">About</a></li>
					<li class="grid__item nav__item"><a href="contact.html" class="nav__link nav__link--active">Contact</a></li>
				</ul>
			</nav>
		<div class="page__push">
			<div class="header header--contact header--dark">
				<div class="wrapper about">
				<h1 class="introduction__title introduction__title--secondary ">Interested in working <span class="orange"> together ?</span> </h1>
					<h3 class="title white ">I am looking for new challenges.</h3>

				</div>
			</div>
			<div class="topic topic--grey">
				<div class="wrapper">
					<div class="main__content">
					<h2>Situation</h2>
					<h3 class="title">I am looking for my next contract</h3>
					<div class="main__txt">
						<p class="content txt-left">I am currently working as an intern web designer introducing UX methods in Pratique - Le Groupe. I will be finishing this contract soon so feel free to contact me. I’m open to opportunities aiming at an UX Agency with a good mentoring. </p>



							<form class="form mts" method="post" action="#submit">
								<p>
									<label for="name" class="visually-hidden">Your name</label>
									<input type="text" placeholder="Your name" name="name" class="form__item" id="name" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" required />
								</p>
								<p class="mtss">
									<label for="email" class="visually-hidden">Your email</label>
									<input type="email" placeholder="Your email" name="email" class="form__item" id="email" pattern="^([0-9a-zA-Z]+[-._+&amp;])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$"  required />
								</p>
								<p class="mtss">
									<label for="message" class="visually-hidden">Your message</label>
									<textarea placeholder="Your message" name="message" class="form__item" id="message" required></textarea>
								</p>
								<p>
									<button type="submit" class="btn icon form__item" id="submit">
										<span class="btn__label">Send</span>
									</button>
									<input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>" />
								</p>
							</form>

							<p class="content">If you prefer to send an  email  :
							<a class="dark icon icon--mail icon--3x" href="mailto:victorfinkel.box@gmail.com?Subject=Hello%20" target="_top">
								<span class="visually-hidden">Send mail</span>
							</a>
						</p>




								<p class="content mtss">You can find me there also :</p>
								<ul class="contact__social">
									<li class="contact__item">
										<a href="https://twitter.com/victor_finkel"  class=" icon contact__icon icon--twitter">
											<span class="visually-hidden">twitter</span>
										</a>
									</li>
									<li class="contact__item">
										<a href="https://fr.linkedin.com/in/vfinkel"  class="grid__item icon icon--linkedin contact__icon ">
											<span class="visually-hidden">linkedin</span>
										</a>
									</li>
									<li class=" contact__item">
										<a href="https://plus.google.com/u/0/+vFinkelpro"  class="grid__item icon contact__icon icon--google icon--4x">
										<span class="visually-hidden">google plus</span>
										</a>
									</li>

								</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo $result; ?>
		<div class="footer">
			<div class="wrapper">
				<div class="grid grid--fluid grid--v-baseline">
					<a href="ml.html" class="grid__item grid__item--fluid small legal">Copyright 2015</a>
					<a href="http://twitter.com/victor_finkel" class="grid__item icon footer__icon icon--twitter"><span class="visually-hidden">twitter</span></a>
					<a href="http://fr.linkedin.com/in/vfinkel" class="grid__item icon footer__icon icon--linkedin"><span class="visually-hidden">linkedin</span></a>
					<a href="http://plus.google.com/u/0/+vFinkelpro" class="grid__item icon footer__icon icon--google icon--2x"><span class="visually-hidden">google plus</span></a>
					<a href="http://pinterest.com/victorfinkel/"  class="grid__item icon footer__icon icon--pinterest icon--2x"><span class="visually-hidden">Pinterest</span></a>
					<a href="https://dribbble.com/victorfinkel"  class="grid__item icon footer__icon icon--dribble icon--2x"><span class="visually-hidden">Dribble</span></a>
				</div>
			</div>
		</div>

	</div>
	</body>
</html>
