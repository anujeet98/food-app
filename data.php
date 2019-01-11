<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
?> 


<?php
   $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
   $sql="select * from restaurant where name='$_GET[name]'";
   $result=mysqli_query($connect,$sql);

   ?>
   <?php
              $output='';
              while($row=mysqli_fetch_array($result))
              {   
                $output .='
                    <div>
                    <div id=container12>
                        <div>'.$row["name"].'</div>
                      </div>';
              }
             echo $output;
?>




<?php
   $uname=$_SESSION['username'];
   $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
   $sql="select * from customer where username='$uname';";
   $result=mysqli_query($connect,$sql);
/*     if ($connect) {
        echo 'conected';
     } else {
        echo 'not conected';
        }   */
 ?>

       <?php  
             $output='';
              while($row=mysqli_fetch_array($result))
              {   
                $output .='
                    <div>
                    <div id=container12>
                        <div>'.$row["username"].'</div><div>'.$row["email"].'</div>
                        </div>
                      </div>
                      ';
                
              }
             echo $output;
           ?>

<?php
   $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
   $sql="select * from food where food_id=$_GET[id]";
   $result=mysqli_query($connect,$sql);
/*     if ($connect) {
        echo 'conected';
     } else {
        echo 'not conected';
        }   */
 ?>

       <?php  
             $output='';
              while($row=mysqli_fetch_array($result))
              {   
                $output .='
                    <div>
                    <div id=container12>
                        <div>'.$row["name"].'</div><div>'.$row["type"].'</div>
                        </div>
                      </div>
                      ';
                
              }
             echo $output;
           ?>           

<?php

echo" <a href='delete.php?id=$_GET[id]&name=$_GET[name]'><button name=confirm1>confirm</button></a>
 <a href='grid.php?name=$_GET[name]'><button name=confirm2>go to home</button></a>
";
?>