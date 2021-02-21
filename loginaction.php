<?php

if(!isset($_SESSION)){
       session_start();
   }
include 'db-connect.php';

if(isset($_POST['login'])){

$email = $_POST['email'];

$pass = $_POST['password'];


 $query = "SELECT * FROM signup WHERE email = '$email' && password = '$pass'";



 $result = mysqli_query($con,$query);


  $total = mysqli_num_rows($result);


   if($total == 1){

       $check = mysqli_fetch_assoc($result);
          $_SESSION ['id']=$check["id"];
          $_SESSION ['email']=$email;
          $_SESSION ['username']=$check["username"];
          $_SESSION ['dob']=$check["dob"];
          $_SESSION ['expertise']=$check["expertise"];
          $_SESSION ['city']=$check["city"];
          $_SESSION ['descriptions']=$check["descriptions"];
          $_SESSION ['fb']=$check["fb"];
          $_SESSION ['ins']=$check["ins"];
          $_SESSION ['tw']=$check["tw"];
          $_SESSION ['pic']=$check["pic"];
          $_SESSION ['phone']=$check["phone"];


       //    echo $_SESSION ['username'];
       //    exit();

           header('location:index.php');



   }else{

    $email1 = $_POST['email'];

    $pass1 = $_POST['password'];


     $query = "SELECT * FROM adminlogin WHERE email = '$email1' && password = '$pass1'";



     $result = mysqli_query($con,$query);


      $total = mysqli_num_rows($result);


       if($total == 1){

           $check = mysqli_fetch_assoc($result);
           $_SESSION ['adminemail']=$email1;
           $_SESSION ['username']=$check["username"];



           header('location:dashboard.php');



        }

 }





}




?>
