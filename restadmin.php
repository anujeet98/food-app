<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Details</title>
	<link rel="stylesheet" href="dbstyle.css">
</head>
<body>
<div class="header" >ADMIN PANEL</div>

	<div align="center" >
		<form id="form" action="restadmin.php" method="post"  enctype="multipart/form-data">
		    
		    <p><a href="price.php">
                <input type="button" name="finalsubmit" value="updateprice"></a>
			</p>
			<p><a href="insert.php">
                <input type="button" name="finalsubmit" value="insert new food"></a>
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
			
			<p>
			<label class='food_name'>Food_name</label>
			<input type='text' name='foodname' id="foodname" maxlength='10' size=30>
			</p>
			<p>
			<label class='foodtype'>Food_type</label>
			<input type='text' name='foodtype' id="foodtype" maxlength='10' size=30>
			</p>
			<p>
			<label class='price'>Price</label>
			<input type='text' name='price' id="price" maxlength='10' size=30>
			</p>
			<label class="fileupload">File upload</label>
			<input type="file" name="fileToUpload" id="fileToUpload">
    		<input type="submit" value="Upload Image" name="submit">
			</p>
	
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
$location=$_POST['location'];

	
$target_dir = "dbmsimage/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}

$x=$_FILES["fileToUpload"]["name"];
	$sql2="INSERT INTO restaurant(img_name,img_path,img_type,name,location) VALUES('$x','$target_dir','$imageFileType','$restaurant_name','$location')";

	
$result=mysqli_query($sql,$sql2);


if (isset($_POST['foodname'])) {
    $foodname = $_POST['foodname'];
}
if (isset($_POST['foodtype'])) {
    $foodtype = $_POST['foodtype'];
}
if (isset($_POST['price'])) {
    $price = $_POST['price'];
}

$sql3="INSERT INTO food(rname,name,type,price) VALUES('$restaurant_name','$foodname','$foodtype','$price')";
	$query=mysqli_query($sql,$sql3);

}
?>	
</body>
</html>
