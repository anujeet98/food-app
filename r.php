<?php

 $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
       $sql="select * from restaurant;";
   $result=mysqli_query($connect,$sql);
       $output='';
       	     	while($row=mysqli_fetch_array($result))
       	     	{   
       	     		$output .='
       	     		    <div>
                        '.$row["RID"].'  '.$row["name"].'
                        '.$row["rating"].'   '.$row["location"].'  </div>';
 
       	     	}
       	     echo $output;
?>