<?php
$conn=mysqli_connect("localhost","root","","db_oilshop");
if($conn===false)
	die("ERROR !".mysql_error());
else
	echo "";
?>



<!DOCTYPE html>
<html lang="en">
<head>
	
	
	<title>Sign in - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  <title>Engine Oil Shope</title>
  <!<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">!>
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="mycss/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="mycss/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="mycss/style.css">
  <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>

</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
				  <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
		      <nav id="nav-menu-container">
        <ul class="nav-menu">
          
        <ul class="nav navbar-nav">
          <li><a href="my.html">Home</a></li>
		  <li class="active"><a href="Login.html">Log In</a></li>
		  <li ><a href="signup.html">Register</a></li>
          
			</ul>
      </div>
        	
					
									</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="demo.php">Home</a></li>
			<li class="active">user order</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">User Details</h1>
				</header>
				<div class="container">

	
</div>
			</article>
			<!-- /Article -->
<table style="width:100%">
  <tr>
  
    <th>full name</th>
    <th>shop Name</th>
	<th>Mobile</th>
	<th>Email</th>
	<th>Password</th>
  </tr>

<?php

	
	
//	session_start();
  //  $_SESSION['e'] = $ea;
	
	
	$query="select * from tb_registration";
	if($result=mysqli_query($conn,$query))
	{
		while($row=mysqli_fetch_row($result))
		{
			echo "<tr>
				
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
				<td>$row[4]</td>
				<td>$row[5]</td>
				</tr>";

		}
	}

mysqli_close($conn);
	

?>
</table>

		</div>
	</div>	<!-- /container -->
	<br>
	<br>
	<footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Oil Shope</h4>
            <address>324 Ellte Road<br>Delhi, DL 110013</address>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              �  Theme. All Rights Reserved
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                -->
                Designed by <a href="/">SVERI COLLEGE ENGG(POLY)</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


	



	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>



