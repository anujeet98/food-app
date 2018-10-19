<html>
    <head>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    
    <body>
        <?php 
          $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
          $sql="select * from restaurant where RID=$_GET[id];";
          $result=mysqli_query($connect,$sql);
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
         
        <?php 
          $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
          $sql="select * from food where food_id=$_GET[id];";
          $result=mysqli_query($connect,$sql);
            /*
              if ($connect) {
                 echo 'conected';
              } else {
                 echo 'not conected';
              }
            */
        ?>
         
         
         <div id=lowdiv>
       	    <div class=grid>
       	        
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
                       <div class=foodprice>Rs'.$row["price"].'</div>
                       <button id=gridbutton>ADD</button>
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
                 <div id="clear" style="clear:both;"></div>
             </div>
            <div id="clear" style="clear:both;"></div> 
         </div>
         
    </body>
</html>    