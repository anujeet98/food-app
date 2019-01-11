<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Details</title>
	<link rel="stylesheet" href="dbstyle.css">
</head>
<body>
<div class="container">
	<div class="header" >ADMIN PANEL</div>

	<div class="rest">
	<form id="form" action="rest.php" method="post"  enctype="multipart/form-data">
	<p>
	<label class="restaurant_id">Restaurant_id</label>
	<input type="text" name="restaurant_id" maxlength="5" size=30>
	</p>
	
	<p>
	<label class="restaurant_name">Restaurant_Name</label>
	<input type="text" name="restaurant_name" maxlength="10" size=30>
	</p>
	<p>
	<label class="location">Location</label>
	<input type="text" name="location" maxlength="10" size=30>
	</p>
	<p>
	<label class="fileupload">File upload</label>
	<input type="file" name="image" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit1">
	</p>
	<p>
	<label class="items">Food items</label>
	<input type="text" name="items" maxlength="5" size=30></br>
	<input type="submit" value="submit" id="items" name="submit2">
	</p>
	
	
	
</div>
<div id=parentcont>
<?php
if(isset($_POST['submit2']))
{
	$x=$_POST['items'];

}

 if(isset($x)){
         for ($i = 1; $i <= $x; $i++) {
                echo "<div id='container20'>
                <form  action='rest.php' method='POST'>
                 <p>
	<label class='location' >Food_id</label>
	<input type='text' name='foodid[]' maxlength='10' size=30>
	</p>
	<p>
	<label class='food_name'>Food_name</label>
	<input type='text' name='foodname[]' maxlength='10' size=30>
	</p>
	<p>
	<label class='foodtype'>Food_type</label>
	<input type='text' name='type[]' maxlength='10' size=30>
	</p>
	<p>
	<label class='price'>Price</label>
	<input type='text' name='price[]' maxlength='10' size=30>
	</p></div>";
}
	echo "<input type='submit' value='submit' id='items' name='submit3'></form>";
	
}	




if(isset($_REQUEST['submit3']))
{
//get the form value and store in $array 
	$array1=$_REQUEST['foodid'];
	$array2=$_REQUEST['foodname'];
	$array3=$_REQUEST['type'];
	$array4=$_REQUEST['price'];

}
?>
</div>

</body>
</html>
