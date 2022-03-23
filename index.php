<?php
	date_default_timezone_set('Europe/London');
	include 'comments.inc.php';
	include 'dbh.inc.php'

?>

<!DOCTYPE html>
<html>
<head>
	<title>Web and Security Project</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="web_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>

<nav id="navigation" class="navbar navbar-inverse navbar-fixed-top">

	<div id="navp" class="container-fluid">

		<div class="navbar-header">
			<a href="" class="navbar-brand"> E-ZINE </a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="#">Home</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="">Articles <span class="carpet"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#malware">Malware And Ransomeware</a></li>
					<li><a href="#password">Password Cracking</a></li>
					<li><a href="#tutorial">Hash Cracking Tutorial</a></li>
				</ul>
			</li>
			<li><a href="#comment_form">Add Comment</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle ="dropdown" href="">Tutorials <span class="carpet"></span> </a>
				<ul class="dropdown-menu">
					<li><a href="#tutorial">Password Cracking</a></li>
				</ul>
			</li>
		</ul>
		<ul class="nav navbar-nav">
			<p class="navbar-text">May 2019 Edition</p>
		</ul>
	</div>
</nav>

<div id="jumbo" class="jumbotron text-center" style="margin-bottom:0">
  <h1 id="logo">E-Zine - May 2019</h1>
  <p>A magazine for anything tech!</p>
	</div>

<div id="art_main" class="container-fluid">
	<div class="col-sm-3 col-md-6 col-lg-4">
		<h2 class="heading">In This Month's Edition</h2>
		<ul>
			<li>Malware and Ransomeware Prevention</li>
			<li>How do hackers crack passwords ?</li>
			<li>Password Tutorial - May</li>
			<li>Blog</li>
		</ul>
		<div class="spacer"></div>
		<h4 class="heading">Past Tutorials</h4>
		<div class="spacer"></div>
		<video id="vid" width="320" height="140" controls="">
			<source src="tutorial_vid.mp4" type="video/mp4">
		</video>

		<h2 class="heading">About E-Zine</h2>
		<p>E-Zine is a website aimed at cyber security specialists.
		Each new edition includes both tutorials and articles on cyber security.</p>

	</div>
	<div class="col-sm-9 col-md-6 col-lg-8">
		<div id="malware">
			<h2 class="heading">Malware and Ransomeware Prevention</h2>
			<img class="img-responsive" src="https://img1.looper.com/img/gallery/things-movies-always-get-wrong-about-computer-hacking/intro-1553214180.jpg" alt="Malware" width="620">
			<p>With spam and phishing email being the primary vector by which malware infects computers, the best way to prevent malware is make sure your email systems are locked down tight—and your users know how to spot danger. We recommend a combination of carefully checking attached documents and restricting potentially dangerous user behavior—as well as just familiarizing your users with common phishing scams so that their common sense can kick in.
            When it comes to more technical preventative measures, there are a number of steps you can take, including keeping all your systems patched and updated, keeping an inventory of hardware so you know what you need to protect, and performing continuous vulnerability assessments on your infrastructure. When it comes to ransomware attacks in particular, one way to be prepared is to always make backups of your files, ensuring that you'll never need to pay a ransom to get them back if your hard drive is encrypted.</p>
            <h5>23/04/19</h5>
			<h4><a href="https://www.csoonline.com/article/3295877/what-is-malware-viruses-worms-trojans-and-beyond.html">Original Post</a></h4>
		</div>

		<div class="spacer"></div>

        <div id="password">
			<strong><h2 class="heading">How do hackers crack passwords ?</h2></strong>
			<div class="container-fluid">
				<img class="img-responsive" src="https://www.abc.net.au/radionational/image/10645298-3x2-700x467.jpg" alt="Passwords" width="620">
			</div>
			<p>1. Data Breaches
             It may not even be your fault. One way a hacker may have obtained your password is via a massive corporate data breach. Unfortunately, data breaches have become a fact of life these days. It seems like every other day there is some news story about a large corporation falling victim to a hack attack resulting in the exposure of customer information, oftentimes including passwords.As soon as you hear about a data breach possibly involving one of your accounts you should take immediate action. One of the first steps you should take is to change the password on your affected account immediately after the organization affected by the breach says its safe to change your password.</p>
             <p>2. Your Password Was Too Simple
             Sometimes a password that is too simple can be a hacker's way into your account. Hackers can use brute force cracking tools, password dictionary tools, and other means to obtain your password. The simpler your password, the shorter time it will take to crack your password.
             Make your password as long as is allowable by the system that you're using. Make your password complex and random. Avoid using whole words or parts of words when creating a password as these are easily crackable by hacker tools. Avoid easy keyboard combinations (i.e. 123456, or qwerty).
             Review tips for Creating a Strong Password, and learn more about password cracking in our article on Password Cracking With Rainbow Tables.</p>
             <p>3. Sniffing Your Network Traffic (Evil Twin Hotspot or by Other Means)
             So you're at the coffee shop surfing the Internet on your notebook minding your own business, what you don't realize is that hackers may be listening in on all of your network traffic.
             Another method hackers use to obtain passwords is setting up phony Wi-Fi hotspots in public areas. These hotspots, known as Evil Twins may be given the same name as a legitimate hotspot in hopes that victims will mistakenly connect to their phony one instead of the real one. Once connected to the "Evil Twin" hotspot, hackers can eavesdrop on the data stream and potentially intercept passwords without victims even knowing it.</p>
             <h5>23/04/19</h5>
			<h4><a href="https://www.lifewire.com/how-the-heck-did-they-get-my-password-2487745">Original Post</a></h4>
		<div>
        <div id="tutorial">
			<h2 class="heading">Password Tutorial - May</h2>
			<div class="embed-responsive embed-responsive-16by9">
  				<iframe width="994" height="559" src="https://www.youtube.com/embed/7U-RbOKanYs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

	    </div>

	    <div class="spacer"></div>

		<h2 class="heading">Blog</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<h5>23/04/19</h5>
		<div class="spacer"></div>

		<div class="panel panel-default">
		  <div id="comment_form">
			 <?php
				  echo	"<form method='POST' action='".setComments($conn)."'>
				  		<input type='hidden' name='uid' value='Anonymous'>
				  		<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
				  		<textarea  name='message'></textarea><br>
				  		<button type='submit' name='commentSubmit'>Comment</button>
				  	</form>";


					getComments($conn);  	
			 ?>
		  </div>
		  <br>
		</div>

	</div>
</div>


<div>
 <footer class="footer">
      <div class="container-fluid">
         <p class="footer-block">E-ZINE 2019</p>
      </div>
   </footer>
</div>   

</body>

</html>