<?php

echo "delete";

include 'db-connect.php';

$deleteID = $_GET['id'];
$delete   = $_GET['delete'];

if ($delete=="product" && $_SESSION['adminemail']){
  $sql = "DELETE FROM products WHERE id=$deleteID";
  if (mysqli_query($con, $sql)) {
      header('location:notification.php?msg=productdelete');
  }
}

if ($delete=="message" && $_SESSION['adminemail']){
  $sql = "DELETE FROM contactus WHERE id=$deleteID";
  if (mysqli_query($con, $sql)) {
      header('location:notification.php?msg=msgdelete');
  }
}

if ($delete=="profile" && $_SESSION['adminemail']){
  $sql = "DELETE FROM signup WHERE id=$deleteID";
  if (mysqli_query($con, $sql)) {
      header('location:notification.php?msg=userprdelete');
    }
}

if ($delete=="selfproduct" && $_SESSION['email']){
  $sql = "DELETE FROM products WHERE id=$deleteID";
  if (mysqli_query($con, $sql)) {
      header('location:notification.php?msg=selfproductdelete');
  }
}
?>
