<!doctype html>
<html lang="en">

<!-- Mirrored from ecommerceforest.com/wrap/shoppe-stores-v2.6.5/demos/electro-shoppe/contact.php by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 18 May 2016 09:54:31 GMT -->
<head>
<style>
.img{border-radius:50px}
</style>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>My Profile</title>
	
	<!-- Bootstrap Core CSS -->
	<link href="plcss/bootstrap.min.css" rel="stylesheet">
	
	<!-- Google Web Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">
	
	<!-- CSS Files -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="plcss/style.css" rel="stylesheet">
	<link href="plcss/responsive.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="js/ie8-responsive-file-warning.js"></script>
	<![endif]-->
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.php">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.php">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.php">
	<link rel="apple-touch-icon-precomposed" href="images/fav-57.php">
	<link rel="shortcut icon" href="images/fav.php">
	
</head>
<body>
<!-- Header Section Starts -->
<?php include("includes/header.php");?>

<!-- Main Container Starts -->
<div id="main-container" class="container">
	<!-- Breadcrumb Starts -->
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">My Profile</li>
		</ol>
	<!-- Breadcrumb Ends -->
	<?php
	//session_start();
	if(isset($_SESSION["email"]))
	{
	$uid=$_SESSION["email"];
	
	include("includes/connection.php");
	$sql="select * from tb_registration where email='$email'";
	if($r=mysqli_query($conn,$sql))
	{
	while($row=mysqli_fetch_assoc($r))
	{
	echo'
	<h2 class="main-heading text-left">
			My Profile
		</h2>
		
		<div class="row">
		<!-- Contact Details Starts -->
			<div class="col-sm-4">
				<div class="panel panel-smart">
					<div class="panel-heading">
						<h3 class="panel-title">Personal Information</h3>
					</div>
					<img class="img" src="'.$row["user_image"].'" width=70 height=100>
					<div class="panel-body">
						<ul class="list-unstyled contact-details">
							<li class="clearfix">
								<i class="fa fa-user pull-left"></i>
								<span class="pull-left">
									My Name<br />
									'.$row["first_name"].'   '.$row["last_name"].'
									</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-phone pull-left"></i>
								<span class="pull-left">
									Mobile No<br />
									'.$row["phone"].'		
									</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-envelope-o pull-left"></i>
								<span class="pull-left">
									E-mail ID <br />
									'.$row["email"].'
								</span>
							</li>
							<li>
							<a href=logout.php><font color="blue" style="background-color:"><button>Logout</button></font></a>
							
							</li>
						</ul>
					</div>
				</div>
			</div>
		<!-- Contact Details Ends -->
		
	</div>
	';
	}
	}
}
	else
	{
	echo "<font size='5px' color='red'>If you have already an account so please login and continue shopping</font>";
	}
	?>
	
	
<?php include("includes/footer.php"); ?>
</html>