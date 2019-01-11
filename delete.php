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
              while($row=mysqli_fetch_array($result))
              {   
                  $rid=$row["RID"];


              }
              
?>




<?php
   $uname=$_SESSION['username'];
   $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
   $sql="select * from customer where username='$uname';";
   $result=mysqli_query($connect,$sql);

 ?>

       <?php  
              while($row=mysqli_fetch_array($result))
              {   
                 $cid=$row["CID"];
                 $ema=$row["email"];
              }
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

                 $typ=$row["type"];
                 $pr=$row["price"];
                
              }
           ?>           

<?php
  echo $cid;
  echo $rid;
  echo $typ;
  echo $pr;
   $connect=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");

   $sql="INSERT INTO appOrder(CID,type,RID,price) VALUES ('$cid','$typ','$rid','$pr')";
   $result=mysqli_query($connect,$sql);

?>



<?php
$message = "Order placed !";
echo "<script type='text/javascript'>alert('$message');window.location='mail.php?email=$ema'</script>";
$connect1=mysqli_connect("localhost","id7486334_root","rootoor","id7486334_employe");
/*$sqlmail="select email from selling_data where id=$_GET[id];";
$resultmail=mysqli_query($connect1,$sqlmail);
*/

/*
$sql1="DELETE FROM selling_data where id=$_GET[id];";
$result=mysqli_query($connect1,$sql1);*/
?> 
