<?php

session_start();
if(!isset($_SESSION['username'])){
	$_SESSION['msg']="you must log in";
	    header('location: login.php');
}

else{
	if(($_SESSION['username'])!="admin"){
		echo ("NOT A ADMIN");
	}
	else{
	    	echo "<a href='rest.php'>go to home<br></a>";
	    	echo "<a href='c.php'>customer details<br></a>";
	echo "<a href='r.php'>restaurant details<br></a>";
		   $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
       $sql="select * from appOrder;";
   $result=mysqli_query($connect,$sql);
       
       	     	while($row=mysqli_fetch_array($result))
       	     	{   
       	     		$output .='
       	     		<div>
                        '.$row["Oid"].'   '.$row["CID"].'
                        '.$row["type"].'    '.$row["RID"].'    '.$row["price"].'</div>';
 
       	     	}

       	     echo $output;
       	 }
       	}
       	   ?>
