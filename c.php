<?php

 $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
       $sql="select * from customer;";
   $result=mysqli_query($connect,$sql);
       $output='';
       	     	while($row=mysqli_fetch_array($result))
       	     	{   
       	     		$output .='
       	     		    <div>
                        '.$row["CID"].'  '.$row["username"].'
                        '.$row["email"].'     </div>';
 
       	     	}
       	     echo $output;
?>