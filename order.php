	<?php
	$conn=mysqli_connect("localhost","root","","db_oilshop");
	if($conn===false)
		die("ERROR !".mysql_error());
	else
		echo "";
	if(isset($_POST['sub']))
	{
		
		$brand_name=$_POST['brand_name'];
		$shop_name=$_POST['shop_name'];
		$qty=$_POST['qty'];
		$address=$_POST['address'];
		$mobile=$_POST['mobile'];
		if($password==$c_password)
		{
			$query="INSERT INTO `address`(`brand_name`, `shop_name`, `mobile`,`qty`, `address`) VALUES ('$brand_name','$shop_name',$mobile,'$qty','$address')";
		
		
			if(mysqli_query($conn,$query))
			{
		echo"<script>alert('Your Order is Placed within 2-3 Days ..')</script>";


				header('location:home.html');
			}
			else
			{
				echo "<script>alert('Error!!')</script>";
			}
				
		}
		else
		{
				echo "<script>alert('Re enter the Password..')</script>";
				header('location:order.html');
		}
	}
	mysqli_close($conn);

	?>
