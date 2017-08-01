<?php
if(isset($_POST["submitstory"])){

	$to = "spero.life@gmail.com";
	$subject = $_POST["storyname"];
	$from=$_POST["semail"];
	$msg=$_POST["area2"];
	$headers = "From: $from";
	mail($to,$subject,$msg,$headers);
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
		#editor{
			height: 500px;

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
							<h1 class="animate-box">Pick Your Keyboard and Start Typing</h1>
							<div class="fh5co-go animate-box">
								<a href="#" class="js-fh5co-next">
									Write Here
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
						<p class="fh5co-lead animate-box">Trust your STUPIDITY and give a chance to your CREATIVITY.</p>
					</div>
				</div>
				<div class="row">
					<figure class="animate-box">

						<!--Editor start -->
						<form action="" method="post">
						<input type="email" name="semail" placeholder="Enter Your Email ID" style="width:49.7%">
						<input type="text" name="storyname" placeholder="Enter Your Story Name" style="width:49.7%" > <br/><br/>
						<div id="sample">
						<script type="text/javascript" src="../js/nicEdit.js"></script>
						<script type="text/javascript">
							bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
						</script>
						<textarea name="area2" id="editor" style="width: 100%"></textarea>
						<br/>
						<input type="submit" name="submitstory" value="Submit Story" />
					</form>
						<!--Editor End -->
						<br/><br/>
					<p style="text-align: center">	--------------------OR--------------------</p>
					<form action="upload.php" method="post" enctype="multipart/form-data">
							<p>Select file(.doc,docx,pdf or rtf) to upload:</p>
					    <input type="file" name="fileToUpload" id="fileToUpload">
							<br/>
					    <input type="submit" value="Upload File" name="submit">
					</form>
					<p style="text-align: center">	--------------------OR--------------------</p>
					<p>Mail us your Story To <b>spero.life@gmail.com</b></p>
					<p>
					<b>NOTE: All the writer are requested to mention their name and Email-ID and mobile No(Optional) in any of story sending method </b> 	
					</p>
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