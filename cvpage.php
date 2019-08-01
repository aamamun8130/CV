<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>CV - Boxed</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="common-css/bootstrap.css" rel="stylesheet">

	<link href="common-css/ionicons.css" rel="stylesheet">

	<link href="common-css/fluidbox.min.css" rel="stylesheet">

	<link href="04-elements/css/styles.css" rel="stylesheet">

	<link href="04-elements/css/responsive.css" rel="stylesheet">

	<style>
			.info {
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				border-collapse: collapse;
				width: 100%;
			}
			
			.info td, #customers th {
				border: 1px solid #ddd;
				padding: 8px;
			}
			
			.info tr:nth-child(even){background-color: #f2f2f2;}
			
			.info tr:hover {background-color: #ddd;}
			
			.info th {
				padding-top: 12px;
				padding-bottom: 12px;
				text-align: left;
				background-color: #4CAF50;
				color: white;
			}
			</style>

</head>

<body>

	
	<?php
include ("connection.php");


$email = "a@gmail";
$password = "1";

$uid="";
$uname = "";
$uemail = "";
$ucity = "";
    $uaddress = "";
    $uphone= "";
    $uimage = "";


$sql = "SELECT * FROM cvuserinfo ";
$result = mysqli_query($db,$sql);
$uid = "";
while($row = mysqli_fetch_assoc($result)){
if($email==$row["uemail"] && $password==$row['upassword']){
    $uid=$row["uid"];
    $uname = $row["uname"];
    $uemail = $row["uemail"];
    $ucity = $row["ucity"];
    $uaddress =$row["uaddress"] ;
    $uphone= $row["uphone"];
    $uimage = $row["uimage"];

}

}


    ?>

	<header>
		<div class="container">
			<div class="heading-wrapper">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-location-outline"></i>
							<div class="right-area">
								<h5>City : <?php echo $ucity;?></h5>
								<h5>Address: <?php echo $uaddress;?></h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-telephone-outline"></i>
							<div class="right-area">
								<h5> Cell : +(88) <?php echo $uphone;?></h5>
								<h6>MIN - FRI,8AM - 7PM</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-chatboxes-outline"></i>
							<div class="right-area">
								<h5>Email : <?php echo $uemail;?></h5>
								<h6>REPLY IN 24 HOURS</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
				</div><!-- row -->
			</div><!-- heading-wrapper -->
            <a class="downlad-btn" href="showinfo.php">Click Here To Change Info</a>
			<!--<a class="downlad-btn" href="#">Download CV</a>-->

         

		</div><!-- container -->
	</header>

	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<div class="profile-img"><img src="images/<?php echo $uimage;?>" alt=""></div>
						<h2><b><?php echo $uname;?></b></h2>
						<h4 class="font-yellow">Web Designer & Programmer</h4>
						<ul class="information margin-tb-30">
							<li><b>BORN : </b>August 25, 1994</li>
							<li><b>EMAIL : </b><?php echo $uemail;?></li>
						</ul>
						<ul class="social-icons">
							<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
							<li><a href="#"><i class="ion-social-linkedin"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram"></i></a></li>
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						</ul>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->

	<div style ="background-color:white; height: 750px; width: 850px; margin: auto;">
		<div style="background-color:gray; height:50px; width: 200px; text-align: center; color: white; padding:8px;">
				WORK EXPERIENCE
		</div>
		<div style="background-color: white; height:200px;">
				<table class="info">
						<tr><th>Year</th><th>Company Name</th></tr>
						<tr>
							<td>2002-2012</td><td>Bengol IT Ltd</td>
							
						</tr>
						<tr>
								<td>2002-2012</td><td>Bengol IT Ltd</td>
								
							</tr>
					</table>
		</div>
		<div style="background-color:gray; height:50px; width: 200px; text-align: center; color: white; padding:8px;">
				WORK SKILL
		</div>
		<div style="background-color: white; height:200px;">
				<table class="info">
						<tr><th>SKILL NAME</th><th>SKILL LEVEL</th></tr>
						<tr>
							<td>JAVA</td><td>HIGH</td>
							
						</tr>
						<tr>
								<td>MY SQL</td><td>HIGH</td>
								
							</tr>
					</table>
		</div>
		<div style="background-color:gray; height:50px; width: 200px; text-align: center; color: white; padding:8px;">
				EDUCATION
		</div>
		<div style="background-color: white; height:200px;">
				
				<table class="info">
						<tr><th>DIGREE</th><th>INSTITUTION NAME</th> </tr>
						<tr>
							<td>S.S.C</td><td>A G A High School</td>
							
						</tr>
						<tr>
								<td>H.S.C</td><td>Bankara Degree College</td>
								
							</tr>
					</table>				
		</div>

	
	</div>
					


	<footer>
		<p class="copyright">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			All copyright reserved by A A Mamun @ <script>document.write(new Date().getFullYear());</script>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>
	</footer>


	<!-- SCIPTS -->

	<script src="common-js/jquery-3.2.1.min.js"></script>

	<script src="common-js/tether.min.js"></script>

	<script src="common-js/bootstrap.js"></script>

	<script src="common-js/isotope.pkgd.min.js"></script>

	<script src="common-js/jquery.waypoints.min.js"></script>

	<script src="common-js/progressbar.min.js"></script>

	<script src="common-js/jquery.fluidbox.min.js"></script>

	<script src="common-js/scripts.js"></script>

</body>

</html>