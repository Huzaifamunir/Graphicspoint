
<?php



include 'db-connect.php';





    $query="SELECT * FROM products  ORDER BY id DESC
    LIMIT 15";


    $data = mysqli_query($con,$query);
      $total = mysqli_num_rows($data);







?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>


  <meta charset="utf-8">
  <title>graphicspoint.</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">


  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<?php include 'nav.php';?>
  <div class="index-content">
    <header class="space">Graphic resources for everyone</header>
    <div class="space text">Download free vector art, stock photos & videos</div>
  </div>




  <div class="home_background"> </div>
  <br><br>

  <div class="outer-grid">
    <h1>Our Products</h1>
    <?php

if($total !=0)
{
	while ($row = mysqli_fetch_assoc($data)) {
    $id=$result=$row['id'];
    $title=$result=$row['productname'];
    $image=$result=$row['image'];
    $category=$result=$row['category'];
    $description=$result=$row['description'];
    $dimension=$result=$row['dimension'];
    $format=$result=$row['extension'];
    $license=$result=$row['license'];


?>
    <div class="inner-grid">
      <a href="single-product.php?id=<?php echo $id ?>"> <img src="assets/images/products/<?php echo $image ?>"> </a>
    </div>
    <?php

  }
}
?>
    <!-- <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/2.jpg"> </a>
    </div>
    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/3.jpg"> </a>
    </div>

    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/4.jpg"> </a>
    </div>
    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/6.jpg"> </a>
    </div>
    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/7.jpg"> </a>
    </div>


    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/8.jpg"> </a>
    </div>
    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/9.jpg"> </a>
    </div>
    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/10.jpg"> </a>
    </div>



    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/11.jpg"> </a>
    </div>
    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/12.jpg"> </a>
    </div>
    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/13.jpg"> </a>
    </div>


    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/14.jpg"> </a>
    </div>
    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/15.jpg"> </a>
    </div>
    <div class="inner-grid">
      <a href="index.html"> <img src="assets/images/products/16.jpg"> </a>
    </div> -->

  </div>

  <div class="container">


    <div class="parallax">
      <h4>Welcome Here <br> <span> This is Botton line for Parallax</span></h4>

    </div>


  </div>




  <div class="cards">
    <h2 class="header"> services</h2>
    <div class="services">
      <div class="services_content content-1">
        <div class="fa fa-bezier-curve"></div>
        <h2>PSD</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque
          reiciendis error?</p>
        <a href="search-results.php?filter=ai">View</a>
      </div>

      <div class="services_content content-2">
        <div class="fa fa-images"></div>
        <h2>XD</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque
          reiciendis error?</p>
        <a href="search-results.php?filter=xd">View</a>
      </div>

      <div class="services_content content-3">
        <div class="fab fa-font-awesome-flag"></div>
        <h2>AI</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque
          reiciendis error?</p>
        <a href="search-results.php?filter=psd">View</a>
      </div>
    </div>
  </div>

  <?php include 'footer.php';?>





</body>

</html>
