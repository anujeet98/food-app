<!DOCTYPE HTML>
<HTML>
	<head>
          <?php

     $cssFile = "style.css";
     echo "<link rel='stylesheet' href='" . $cssFile . "'>";

   ?>
</head>
	
<body id=background>
    <div id="container10">
        <div id="search-box">
            <form name="form" action="rest.php" method ="POST" style="background-color:black;">
           <input type="text" name="search-box" id="search-box" placeholder=" Type a search " >

          <button type="submit" id="sea_btn"> <i class="fa fa-search"  aria-hidden="true"></i></button>
          <a href="login.php" style="color:white; background-color: black;">login</a>
          <a href="register.php" style="color:white; background-color: black;">signup</a>
        </form>  
         </div>
      <p> &nbsp&nbsp <a href="index.php?logout='1'" style="text-decoration:none;color: white;"><span class="l1">logout</span></a> </p>
      <p><a href="admin.php" style="text-decoration:none;color: white;"><span class="l1">admin</span></a> </p>
      <p><a href="restadmin.php" style="text-decoration:none;color: white;"><span class="l1">restaurant admin</span></a> </p>
    </div>     
    
    
	    
<div>
<div id=container11>
<?php  
   $val="";
   if(isset($_POST['search-box'])) 
      $val = $_POST['search-box'];
   

   $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
   if(strlen($val)==0)
   {
       $sql="select * from restaurant";
   }
   else{
       $sql="select * from restaurant where name='$val';";
   }
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
                        <img src ="dbmsimage/'.$row["img_name"].'" alt="img" id="dom">
                        '.$row["name"].'<span id=tab>'.$row["rating"].'</span>
                        <div id=loc>'.$row["location"].'</div>
                        <a href="grid.php?name='.$row["name"].'"><button id=button>ORDER ONLINE</button></a>
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
