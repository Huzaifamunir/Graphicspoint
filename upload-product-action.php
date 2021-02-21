<?php
if(!isset($_SESSION)){
       session_start();
 }

include 'db-connect.php';

if((isset($_POST['button'])) && (isset($_SESSION['id']))){

  $id =$_SESSION ['id'];
  // $username =$_SESSION ['username'];

  $category = $_POST['category'];
  $productname = $_POST['productname'];
  $description = $_POST['description'];
  $dimension = $_POST['dimension'];
  $extension = $_POST['extension'];
  $license = $_POST['license'];
  // $vector = time()."_". $_FILES['vector']['name'];
  // $imgname = time()."_". $_FILES['image']['name'];
  // $folder = "assets/images/products/".$imgname;

  if($_FILES['image']['name'])
  {
      $tmp_name = $_FILES["image"]["tmp_name"];
      $namefile = $_FILES["image"]["name"];
      // $ext = end(explode(".", $namefile));
      // echo $ext;
      // exit();
      $namefile = str_replace("+","_",$namefile);
      $imgname=time()."_".$namefile;

      $fileUpload = move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/products//".$imgname);
  }

  if($_FILES['vector']['name'])
  {
      $tmp_name = $_FILES["vector"]["tmp_name"];
      $namefile = $_FILES["vector"]["name"];
      // $ext = end(explode(".", $namefile));
      $namefile = str_replace("+","_",$namefile);
      $vector=time()."_".$namefile;
      $fileUpload = move_uploaded_file($_FILES['vector']['tmp_name'],"assets/images/vectors//".$vector);

  }


     // $sql = "INSERT INTO tempsignup ( name, email, password, actpassword) VALUES ('$name','$email','$pass','$randpssd')";


   $sql = "INSERT INTO products (userid, category, productname, description,dimension,extension,license,image,vector) VALUES ('$id','$category', '$productname', '$description','$dimension','$extension','$license','$imgname','$vector')";

   $result = mysqli_query($con,$sql);

  if($result){
    // echo "done";
      header('location:notification.php?msg=productupload');
  }else{
    header('location:notification.php?msg=productnotupload');
    // echo "not done";
  }




}



?>
