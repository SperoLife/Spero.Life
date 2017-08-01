<?php
session_start();
if(isset($_POST['csubmit'])){
  $host="localhost";
  $user="root";
  $pwd="";
  $dbname="spero.life";
  $conn=mysqli_connect($host,$user,$pwd,$dbname);
    if ($conn) {
      $storyID=1;
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
							<h1 class="animate-box">The Strangers-1</h1>
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


<p>At that point in his life, he was confused. Confused about career, relations, priorities and most importantly about his future.<br/>
One day while he was in a deep thought for a new write-up in his room, he heard giggles of a few females downstairs. One laugh was different, actually younger, which attracted him. Slowly the voices started fading.<br/>
He ran over the stairs to catch that non-familiar voice. But unfortunately the girl went away in a car. The only thing he noticed about her was her curve, the big one on her face.<br/>
“Mom who were they?” He asked his mom, as she went to the gate to drop them off.<br/>
“She was Sheetal aunty, with her daughter.”<br/>
“You remember a colleague of mine in pune. They have recently shifted a few kilometres from our society. So she came to meet me.” She added.<br/>
“So why didn’t you called me?” He said with a little disappointment.<br/>
“Oh I thought you are not at home. By the way don’t worry; we are going at their place tonight. She invited us for her daughter’s birthday. At 12am.” Mom replied.<br/>
“Are you serious?” He asked confused.<br/>
“Yes, and you have to come with me.”<br/>
Those childish giggles, the glimpse of her smile convinced him.<br/>
With passing time, his curiosity of seeing that girl increased.<br/>
This was the first time in his life, when he was attracted towards a girl with a first impression. Actually not even a fraction of impression.<br/>
Something was there with her smile; it took away a part of his heart.<br/>
After a long time he dressed up nicely, not for the party, but with the thought of meeting that girl.<br/>
“Let’s go mom. We are getting late.” He shouted from outside.<br/>
“Just 2 minutes beta. I am coming.” Mom replied.<br/>
They reached her house at 11p.m.<br/>
He rang the door bell. Sheetal aunty opened the door.<br/>
“Hey Sunaina, please come inside.” Sheetal aunty shouted in a cheerful voice.<br/>
They both hugged each other just like besties.<br/>
“Sorry I forgot, meet my son, Arjun.” Mom introduced him.<br/>
“Hello Aunty.” he greeted with a smile.<br/>
“He is pursuing B.tech in Electrical Engineering.” Then came the most familiar reply from a typical Indian parent.<br/>
“By the way, where is the birthday girl?” Mom continued.<br/>
“Ohh she is upstairs with her cousins.”<br/>
“Arjun beta, go join them.” Sheetal aunty added.<br/>
He moved upstairs slowly, checking out the house. With increasing stairs, his heartbeat increased. He was finally going to see that girl. The girl who made him restless from the last few hours. As he was about to enter the room, the lights went off. And the next moment near the door he collided with a girl.<br/>
She made herself stable and asked, “Are you okay?”<br/>
He fell for the voice. He knew she was her, the same girl he was waiting to meet.<br/>
“Yeah I am fine, and you?” He replied.<br/>
“I am all good. Hold my hand, let me direct you. Otherwise you’ll keep colliding with the random stuffs in the dark.” She laughed.<br/>
When they held hands, a strong shiver ran down his spine, the tough was powerful. They moved towards a sofa and sat beside each other.<br/>
He was so lost in the moment, that he didn’t noticed that there were some more people in the room.<br/>
“Don’t worry; it’s just a fuse off. Dad is repairing that. And you must be Arjun right? Mom told me that you are coming with your mom.” She started the blank conversation.<br/>
At that moment, all he wanted was to see her face. They waited for the electricity.<br/>
He checked his phone, scrolled some Instagram feeds, his new write-ups.<br/>
As the mobile showed 12 A.M, he extended his hand in her direction and said, “Happy Birthday…..”<br/>
With a little guess, she shook hands with him.<br/>
The very next moment light came back. She answered, “Kritika. And thank you.” She smiled.<br/>
Their eyes met.<br/>
She was in front of her, holding his hand. His heart skipped a beat. She was beautiful. All these years he ignored girls, didn’t check out any, rarely talked to them, it’s like all was for this day only. She was someone he can’t get his eyes off from. Actually she was more than beautiful. He never believed in love, but that day his philosophy changed.<br/>
A smell of attraction spread into the air, not from only one side but from both the sides.<br/>
The cheers, loud wishes, birthday song from her family members broke that moment of attraction between them.<br/>
He felt gratitude.<br/>
After her birthday celebration, some of her relatives left and a few stayed. Arjun went to the balcony with a bottle of coke and stood there feeling the cold & breath taking  breeze of 1 A.M.<br/>
Kritika joined him when she saw him standing alone there.<br/>
“Hey.” She said.<br/>
“Hii.” He replied with a smile.<br/>
“So..”<br/>
“So….”<br/>
“So in which college you are taking admission?” He finally asked.<br/>
“I got selected for school of law, in MU. What about you?” She replied.<br/>
With a distracted voice he answered, “Engineering,”<br/>
“Ohh, sorry for your loss.” She replied with a puppy face.<br/>
They both laughed.<br/>
“By the way I haven’t seen your friends here; you must have a plan with them tomorrow?”<br/>
“I don’t have any. It’s hard to find friends within 10 days in a city like Mumbai.”<br/>
“Actually, you don’t need to find friends, friendship finds you.” He stated.<br/>
She smiled.<br/>
“I do not have any plan for tomorrow either.”  That smile turned 180 deg in opposite direction.<br/>
“Don’t worry. I am here.”  He winked. She smiled again, but this time with a bigger curve.<br/>
“Show me Mumbai’s night life. I have always dreamt of it.” She asked.<br/>
“Ok fine. But when?”<br/>
“Now”<br/>
“Now…?” He shouted.<br/>
“Yes. I don’t want my 18th birthday to become too boring with relatives.” She whispered.<br/>
“You don’t even know me girl. And you want to spend this night with me.” He commented.<br/>
“Easy, dude. I will not try to take your advantage. I just want to explore the city.” She smiled with a wink.<br/>
“What about my mom? How she’ll reach home” he questioned.<br/>
“I’ll ask mom to request her to stay.” She replied.<br/>
“But why me?”<br/>
“Are you an introvert?”<br/>
“Why?”<br/>
“Nothing. You seem safe. And if anything happens to me, my mom will sue you.” She acted serious.<br/>
“Wow. Wow. That was bold.” He declared.<br/>
“Even I am also.” She winked again.<br/>
“Let’s go.” They said in unison.<br/>
Hiding from everyone, they secretly came out of the house.<br/>
“Wow. KTM Duke 200. My favourite. I am already impressed by the way.” She said.<br/>
“And you are the first girl who is going to sit behind me on this.” He stated.<br/>
“Not a good try, you need to improve your flirting skills.” She laughed.<br/>
“Aree I am serious.”<br/>
“But sorry, many bikes are already honoured having me as a pillion.” She commented.<br/>
“Then let’s make your ride memorable this time.” He started the engine, they went off.<br/>
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
		$query="SELECT * FROM comments where articleID=1";
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
