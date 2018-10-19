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
            <form name="form" action="rest.php" method ="POST">
           <input type="text" name="search-box" id="search-box" placeholder=" Type a search " >

          <button type="submit" id="sea_btn"> <i class="fa fa-search"  aria-hidden="true"></i></button>
        </form>  
         </div>
    
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
       $sql="select RID,image,name,rating,location from restaurant;";
   }
   else{
       $sql="select RID,image,name,rating,location from restaurant where name='$val';";
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
       	     	    echo $row[0][0];
       	     		$output .='
       	     		    <div>
       	     		    <div id=container12>
                        <img src =" data:image/jpeg;base64,'.base64_encode($row["image"]).' " id=dom>
                        '.$row["name"].'<span id=tab>'.$row["rating"].'</span>
                        <div id=loc>'.$row["location"].'</div>
                        <a href="grid.php?id='.$row["RID"].'"><button id=button>ORDER ONLINE</button></a>
                        </div>
       	     	        </div>';
 
       	     	}
       	     } 
       	     else
       	     {
       	     	$output="no product found";
       	     }
       	     echo $row;
       	     echo $output;
       	   ?>

   </div>
</div>   

</body>    
</HTML>
