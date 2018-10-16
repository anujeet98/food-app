<!DOCTYPE HTML>
<HTML>
	<head>
          <?php

     $cssFile = "style.css";
     echo "<link rel='stylesheet' href='" . $cssFile . "'>";

   ?>
</head>
	
<body>
	    
<div>
<div id=container11>
<?php 
   $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
   $sql="select image,name from restaurant;";
   $result=mysqli_query($connect,$sql);
   /*     
     if ($connect) {
        echo 'conected';
     } else {
        echo 'not conected';
        }
    */    
 ?>
    	 <?php  
             $output='';
       	     if(mysqli_num_rows($result)>0)
       	     {
       	     	while($row=mysqli_fetch_array($result))
       	     	{
       	     		$output .='
       	     		    <div>
       	     		    <div id=container12>
                        <img src =" data:image/jpeg;base64,'.base64_encode($row["image"]).' " id=dom>
                        ' .$row["name"].'
                        </br>
                        <button id=button>ORDER ONLINE</button>
                        </div>
       	     	        </div>';
       	     	}
       	     } 
       	     else
       	     {
       	     	$output="no product found";
       	     }
       	     echo $output;
                
                
       	   ?>
   </div>
</div>    
	    
	    
</body>    
</HTML>



