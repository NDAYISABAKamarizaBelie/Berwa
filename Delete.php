<?php
$link=mysqli_connect("localhost","root","","berwashop");
$code=$_GET['Del'];
$Del="DELETE  FROM product WHERE ProductCode='$code'";
$sel="SELECT * FROM productin WHERE ProductCode='$code'";
$res=mysqli_query($link,$sel);
$num=mysqli_num_rows($res);
$sql=mysqli_query($link,$Del);
if ($sql) {
   echo '<script>alert("Delete Successful")</script>';
}
elseif ($num==1) {
         echo '<script> alert("Product In Use")</script>';
   }
   else{
       echo '<script>alert("Delete Fail")</script>';
       header("location:ViewP.php");
}
?>