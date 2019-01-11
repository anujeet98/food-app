<!DOCTYPE html>
<html>
<head>
	<title>update price</title>
	<link rel="stylesheet" href="dbstyle.css">
</head>
<body>
<div class="header" >update priceL</div>

	<div align="center" >
		<form id="form" action="price.php" method="post"  enctype="multipart/form-data">
			<p>
			<label class="restaurant_name">Restaurant_Name</label>
			<input type="text" name="restaurant_name" maxlength="10" size=30>
			</p>
			<p>
			<label class='food_name'>Food_name</label>
			<input type='text' name='foodname' id="foodname" maxlength='10' size=30>
			</p>
			<p>
			<label class='price'>Price</label>
			<input type='text' name='price' id="price" maxlength='10' size=30><br>
			<input type="submit" name="submit" value="submit">
			<p>
			 <a  href="rest.php">   
			<input type="button" name="finalsubmit" value="home">
			</a>
			</p>
		</form>
	</div>
	
<?php
$sql=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
if(isset($_POST['submit']))
{
	

$restaurant_name=$_POST['restaurant_name'];

if (isset($_POST['foodname'])) {
    $foodname = $_POST['foodname'];
}

if (isset($_POST['price'])) {
    $price = $_POST['price'];
}

$sql3="update food set price=$price WHERE rname='$restaurant_name' and name='$foodname'";
	$query=mysqli_query($sql,$sql3);
}
?>	
</body>
</html>
