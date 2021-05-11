<?php
$conn=mysqli_connect("localhost","root","","db_oilshop");
if($conn===false)
	die("ERROR !".mysql_error());
else
	echo "";


if(isset($_POST['sub']))
{
	$email=$_POST['l_email'];
    $password=$_POST['l_password'];
	
//	session_start();
  //  $_SESSION['e'] = $ea;
	
	
	$query="select email,password from tb_registration";
	if($result=mysqli_query($conn,$query))
	{
		while($row=mysqli_fetch_row($result))
		{
			         
			//echo $row[0]."".$row[1];
			if($email==$row[0] and $password==$row[1])
			{
				
				echo "<script>alert('login success')</script>";
				header('location:home.html');
				
				break;
			}
			else
			{
						echo "<script>alert('login try please')</script>";
				header('location:login.html');
				
			}
			
		}
		if($row[0]!=$email and $row[1]!=$password)
				{
				echo "<script>alert('Incorrect Cridential')</script>";
				header('location:Login.html');
				}
		
	}
	else
	{
		echo "<script>alert('Please try again..')</script>";
		header("Location:Login.html");
	}
}
mysqli_close($conn);
	

?>
