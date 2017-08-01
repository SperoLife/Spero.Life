<?php
if(isset($_POST["ConSubmit"])){

$to = "shashikantsngh@hotmail";
$subject =$_POST["ConSubject"];
$from=$_POST["ConEmail"];
$msg=$_POST["msg"];
$headers = "From: $from";

mail($to,$subject,$msg,$headers);
echo "Email successfully sent.";
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Spero.Life</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="../css/flexslider.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<link rel="stylesheet" href="../css/style.css">


	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style media="screen">

	input[type=text], input[type=password], input[type=email]{
		width: 80%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border-bottom: 2px solid #f9ad81;
		border-top: 0px solid #f9ad81;
		border-left: 0px solid #f9ad81;
		border-radius: 4px;
		}

	textarea{
		width: 78%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border-bottom: 2px solid #f9ad81;
		border-top: 0px solid #f9ad81;
		border-left: 0px solid #f9ad81;
		border-radius: 4px;
	}

	input[type=submit]{
		background-color: #f9ad81;
		border:#f9ad81;
		color: #fff;
		text-align: right;
		border-radius: 5px;
		padding: 16px 32px;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		position: absolute;
		left:435px;

	}


	input[type=submit]:hover
	{
		color:#f9ad81;
		background-color: #FFF;
		border: 2px solid #f9ad81;
	}

	.bannerleft{
	  text-align: left;
	  width: 50%;
	  height: 100px;
	  float: left;
	  font-family:sans-serif;
	  text-align:

	}
	.bannerright{
	  text-align: left;
	  float: left;
	  width: 50%;
	  height: 100px;
	  font-family: sans-serif;
	}

	.left{
	  width: 50%;
	  height: 500px;
	  padding-right: 0;
	  background-color:#f2f3f4;
	  float: left;
	}


	.right{
	  width: 50%;
	padding-left: 0;
	height: 500px;
	background-color:#f2f3f4;
	float: left;
	}
	.clear{
	  clear: both;
	}

	</style>

	</head>
	<body>

	<div id="fh5co-header">
		<div class="container">
			<!-- Mobile Toggle Menu Button -->
			<a href="../index.html" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			<div id="fh5co-logo">
				<a href="../index.html" class="transition">Spero.Life<span>.</span></a>
			</div>
			<nav id="fh5co-main-nav">
				<ul>
					<li><a href="../index.html" class="transition" data-nav-section="home">Home</a></li>
					<li><a href="../index.html" class="transition" data-nav-section="portfolio">Stories</a></li>
					<li><a href="../index.html" class="transition" data-nav-section="about">About</a></li>
					<li><a href="../index.html" class="transition" data-nav-section="contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="fh5co-main">
		<div class="fh5co-overlay-mobile"></div>
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">

				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row text-center">
							<h1 class="animate-box">We love to hear from you!</h1>
							<div class="fh5co-go animate-box">
								<a href="#" class="js-fh5co-next">
									Write Us
									<span><i class="icon-arrow-down2"></i></span>
								</a>

							</div>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(../images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
		</div>

		<div id="fh5co-content">
			<div class="container">
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h2 class="fh5co-section-title animate-box">DEAR WRITERS</h2>
						<p class="fh5co-lead animate-box">Make Sure Your Creativity Is In Trusted Hands.</p>
					</div>
				</div>

				<div class="row">
					<figure class="animate-box">


						<div class="left">
					    <h1>Contact Form</h1>
					    <form class="" action="" method="post">
					      <label>Name</label>
					      <input type="text" name="ConName">
					      <br/><br/>
					      <label>Email</label>
					      <input type="email" name="ConEmail">
					      <br/><br/>
					      <label>Subject</label>
					      <input type="text" name="ConSubject">
					      <br/><br/>
					      <label>Message</label>
					     <textarea id="msg" name="msg" style="height:100px" ></textarea>
					     <br/>
					      <input type="submit" name="ConSubmit" value="Send Message">
					    </form>
					  </div>

					    <div class="right">
					      <h1>Contact Info</h1>
					      <p style="font-size:19px">We are highly passionate about our work. We constantly strive towards improving our product. So, if there is a feature that isn't sparking joy or you think that <b>Spero.Life</b> would be better off without, do let us know. Also, if you think a feature is missing that could make this an even awesome experience for you, tell us!</p>
					      <p>Currently available on: <b>Planet Earth</b></p>

					      <p style="font-size:17px">Contact Number:-<b>+91 9200033717</b></p>
					      <p style="font-size:17px">Email :- <b>shashikantsngh@hotmail.com</b></p>
					  </div>
					  <div class="clear"></div>




					</figure>
				</div>

			</div>
		</div>

		<div id="fh5co-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 animate-box">
						<div class="fh5co-footer-widget">
							<p>&copy;Spero.Life 2017</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 animate-box">
						<div class="fh5co-footer-widget">
							<ul class="fh5co-social pull-right">
								<li>
									<a href="#"><i class="icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-vine"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-behance"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-google"></i></a>
								</li>
							</ul>
						<div class="fh5co-footer-widget">
					</div>
				</div>
			</div>
		</div>

	</div> <!-- END fh5co-page -->

	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- Main JS -->
	<script src="../js/main.js"></script>

	</body>
</html>
