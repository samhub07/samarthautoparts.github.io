	<?php
	$conn=mysqli_connect("localhost","root","","db_oilshop");
	if($conn===false)
		die("ERROR !".mysql_error());
	else
		echo "";
	if(isset($_POST['sub']))
	{
		
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$c_password=$_POST['c_password'];
		$mobile=$_POST['mobile'];
		if($password==$c_password)
		{
			$query="INSERT INTO `tb_registration`(`first_name`, `last_name`, `mobile`,`email`, `password`) VALUES ('$first_name','$last_name',$mobile,'$email','$password')";
		
		
			if(mysqli_query($conn,$query))
			{
				echo "<script>alert('register succesfully')</script>";
				header('location:login.html');
			}
			else
			{
				echo "<script>alert('Error!!')</script>";
			}
				
		}
		else
		{
				echo "<script>alert('Re enter the Password..')</script>";
				header('location:signup.html');
		}
	}
	mysqli_close($conn);

	?>
