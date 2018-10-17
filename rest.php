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
            <form name="form" action="rest.php" method ="get">
           <input type="text" name="search-box" id="search-box" placeholder=" Type a search " >

          <button type="submit" id="sea_btn"> <i class="fa fa-search"  aria-hidden="true"></i></button>
        </form>  
         </div>
    
    </div>     
    
    
	    
<div>
<div id=container11>
<?php     $val=$_GET['search-box'];
?>
<?php
if(strlen($val)==0){
    ?><?php
   $connect=mysqli_connect("localhost","id7506376_root","rootoor","id7506376_foodapp");
   $sql="select image,name,rating,location from restaurant;";
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
                        '.$row["name"].'<span id=tab>'.$row["rating"].'</span>
                        <div id=loc>'.$row["location"].'</div>

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
<?php
}

else{
    ?>

<?php 
   $connect=mysqli_connect("localhost","id7506376_root","rootoor","id7506376_foodapp");
   $sql="select image,name,rating,location from restaurant where name='$val';";
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
                        '.$row["name"].'<span id=tab>'.$row["rating"].'</span>
                        <div id=loc>'.$row["location"].'</div>

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
<?php

}
	 ?>   
</body>    
</HTML>



