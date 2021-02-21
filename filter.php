<?php



include 'db-connect.php';


if(isset($_POST['button']))
{
    $search=$_POST['search'];
    echo $search;
    exit();

    $query="SELECT * FROM products WHERE productname= '$search'";


    $data = mysqli_query($con,$query);
      $total = mysqli_num_rows($data);

}





?>
