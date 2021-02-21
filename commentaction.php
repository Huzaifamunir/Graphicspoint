<?php
if(!isset($_SESSION)){
       session_start();
   }

 include 'db-connect.php';

 $comment=$_POST['comment'];
 $id =$_SESSION ['id'];
 $name =$_SESSION ['username'];
 $pro_id=$_GET['id'];

 



 $sql = "INSERT INTO `comments`(`product_id`,`user_id`,`user_name`,`comments`) VALUES ('$pro_id','$id','$name','$comment')";

 $result = mysqli_query($con,$sql);

if($result){
    echo "data inserted";
}
else
{
    echo "failed";
}

 ?>
