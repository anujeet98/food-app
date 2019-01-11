<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  ?>
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    
    <body>
        <?php 
          $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
          $sql1="select * from restaurant where name='$_GET[name]';";
          $result=mysqli_query($connect,$sql1);
            /*
              if ($connect) {
                 echo 'conected';
              } else {
                 echo 'not conected';
              }
            */
        ?>

         <div id=topdiv>
             <?php  
    	        $output='';
       	       	 while($row=mysqli_fetch_array($result))
       	     	  {
       	     		$output .='
                       <div id=restname>
                       <div id=restaurantname>'.$row["name"].'</div>
                       <div id=restaurantrating>'.$row["rating"].'</div>
                       <div id=restaurantlocation>'.$row["location"].'</div>
                      </div>';
       	     	  }
       	     echo $output;
            ?>

             <div id=location>
                 <div id=lochead>Delivery Location</div>
                 <div id=delloc><input placeholder="enter deliver location" style="width: 95%;"></div>
             </div>      
         </div>    
         
         
         
         <div id=lowdiv>
       	    <div class=grid>
       	 <?php 
          $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
          $a=$_GET['name'];
          $sql="select * from food where rname='$a'";
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
                      <div class="module">
                       <div class=foodname>'.$row["name"].'</div>
                       <div class=foodtype>'.$row["type"].'</div>
                       <div class=foodprice> Rs '.$row["price"].'</div>
                       <a href="data.php?name='.$_GET['name'].'&id='.$row["food_id"].'"><button id=gridbutton>Buy</button></a>
                      </div>';
       	     	  }
       	        } 
       	     else
       	      {
       	      	$output="no product found";
       	      }
       	     echo $output;
            ?>
       	       <div id="clear" style="clear:both;"></div>
             </div>
             
             
             
             <div id=cart>
                    <div class="u">
      
      <p style="font-size:1.3em;text-transform:capitalize;">Welcome <strong><?php echo ($_SESSION['username']); ?></strong></p>
      <p> &nbsp&nbsp <a href="index.php?logout='1'" style="text-decoration:none;"><span class="l1">logout</span></a> </p>
      </div>
                 <div id="clear" style="clear:both;"></div>
             </div>
            <div id="clear" style="clear:both;"></div> 
         </div>
         
    </body>
</html>
