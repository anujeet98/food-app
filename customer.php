<!DOCTYPE html>
<html>
<head>
	<title>delivery</title>
	<style type="text/css">
		h2{
			margin-left: 44%;
			color: orange;
		}
		#form{
			display: block;
    		background-color: white;
    		opacity: 0.8;
    		height: 300px;
    		margin-left: 43%;
    		margin-right: 40%;


		}
		#form1{
			margin-left: 5%;
			    
		}
		body{

				background-image: url("customer.jpg");
				background-repeat: no-repeat;
				background-size: cover;

		}
	</style>
</head>
<body>

	<div class="header">
		<h2>Customer details</h2>
	</div>
	<div id="form">
	</br>
	<form method="post" action="customer.php">
		<div id="form1">
		<div class="input-group">
			<label>Name</label></br>
			<input type="text" name="name" >
		</div>
		<div class="input-group">
			<label>E-mail</label></br>
			<input type="email" name="email">
		</div>
		<div class="input-group">
			<label>address</label></br>
			<input type="text" name="address">
		</div>
		<div class="input-group">
			<label>phone no</label></br>
			<input type="text" name="phoneno">
		</div>
		
		<div class="input-group"></br>
			<button type="submit" class="btn" name="submit">insert</button>
		</div>
		</div>
	</form>
	</div>
<?php
$connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
$result=mysqli_query($connect,$sql);
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phoneno'];

$sql3="INSERT INTO customer(name,email,address,phno) VALUES('$name','$email','$address','$phone')";

$query=mysqli_query($connect,$sql3);



}

?>
</body>
</html>