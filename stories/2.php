<?php
session_start();
if(isset($_POST['csubmit'])){
  $host="localhost";
  $user="root";
  $pwd="";
  $dbname="spero.life";
  $conn=mysqli_connect($host,$user,$pwd,$dbname);
    if ($conn) {
      $storyID=2;
      $name=$_POST['cname'];
      $email=$_POST['cemail'];
      $msg=$_POST['cmsg'];
      $query="INSERT INTO comments(articleID,name,emailId,comment) VALUES('$storyID','$name','$email','$msg')";
        if(mysqli_query($conn,$query)){
            $_SESSION['successMsg'] = "Thank You for your valueable feedback";

        }else{
            $_SESSION['errorMsg'] = "Operation failed";
  }
}
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
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Spero.Life" />

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
  .commentform, .allcomments{
    width: 80%;
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
					<li><a href=".. /index.html" class="transition" data-nav-section="contact">Contact</a></li>
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
							<h1 class="animate-box">I wish she was mine</h1>
							<div class="fh5co-go animate-box">
								<a href="#" class="js-fh5co-next">
									View Story
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
						<h2 class="fh5co-section-title animate-box">STORY INTRO</h2>
						<p class="fh5co-lead animate-box">Do you believe in love at first site? What if you get a chance to explore Mumbai's Night life on your early days in the city? Can you trust a stranger? And if suddenly your past haunts you in the middle of the night, what will you do? To find the answers to these, you need to come with us on this beautiful and adventurous journey of Arjun and Kritika. Check out whether they are mature enough to skip the bouncers of life or if life gets more complicated then before.</p>
					</div>
				</div>
				<div class="row">
					<figure class="animate-box">


<p>
  As i got ready for my classes one fine morning dressed up like an obedient student,
I stared at the girl passing by my bicycle along with her father. <br/>
She was my so called 'best friend' and to her i was just a studious senior. I felt like saying a 'hi' but didn't becaue you know why :p <br/>
After the classes, i grasped a look when you was trying to handle her long silky hairs and just wished she was mine.But she didn't noticed me like that or rather she did.<br/>

She walked upto me and asked me for my last year's notes which she requested me to bring during our last night's chat. I handed them to her.She said thanks with that sweet smile,little did she knew how much i wanted to see it on her face. Waving her hand she said goodbye yet i couldn't.I wanted to tell her, I wanted her to know that I never want to be just friends, I love her , I care for her , I was not shy I was just afraid of loosing her or may be just afraid , afraid of loosing what i just wish was mine.

</p>

<h4>To be continued...</h4>

<div class="commentform" >
<p>Post Your comment here ....</p>
<form class="CommentForm" action=" " method="post">
<input type="text" name="cname" placeholder="Enter Your Name" style="width:45%">
<input type="email" name="cemail" placeholder="Enter Your Email ID" style="width:45%">
<br/><br/>
<textarea name="cmsg" rows="4" cols="40" style="width:90.5%" placeholder="Enter comment here......"></textarea>
<br/>
<input type="submit" name="csubmit" value="comment">
<input type="reset" name="creset" value="reset">
<br/><br/>
</form>
</diV>







<div class="allcomments">
<?php
	$host="localhost";
	$user="root";
	$pwd="";
	$dbname="spero.life";
	$conn=mysqli_connect($host,$user,$pwd,$dbname);
		if ($conn) {
		$query="SELECT * FROM comments where articleID=2";
		$result=mysqli_query($conn,$query);
		}
?>

<table style="width:90%">
	<?php
	while($data = mysqli_fetch_assoc($result)){
	?>
	<tr>
		<th><?php echo $data['name'];?></th>
		<th><?php echo $data['emailId'];?></th>
		<th><?php echo $data['Date'];?></th>

	</tr>
	<tr>
		<td colspan="3"><?php echo $data['comment'];?></td>
	</tr>
  <tr><td><?php echo "" ;?></td></tr>
	<?php
	}
	?>
</table>
</div>






					</figure>
				</div>

			</div>
		</div>

		<div id="fh5co-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 animate-box">
						<div class="fh5co-footer-widget">
							<p>&copy;Spero.Life</p>
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
