<?php

include 'db-connect.php';

if(!$_SESSION['email']){
	header('location:signup-login.php');
	exit();
}else{

  $id =$_SESSION ['id'];
  $sql = "SELECT * FROM products WHERE userid= '$id' ";
  $query = mysqli_query($con,$sql);
  $count = mysqli_num_rows($query);

  if (isset($_GET['Page'])) {
    $Page = $_GET['Page'];
  }else{
    $Page=1;
  }


  $results_per_page =6;
  $start_from       = ($Page-1) * $results_per_page;
  $Total_Pages      = ceil($count / $results_per_page);

  $_GET['Total_Pages'] = $Total_Pages;
  $_GET['Page']        = $Page;

  $limit = " LIMIT $start_from, $results_per_page";
  $sql2 = $sql.$limit;

  $query=mysqli_query($con, $sql2);
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>graphicspoint.</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body class="dashboard-page">
  <?php include 'nav.php';?>



        <section class="profiles-list-result">
          <h1>Products by: <span> <?php echo $_SESSION ['username'];?></span></h1>
          <div class="results-count">
            <p> <span> <?php echo $count ?> </span> results found</p>
          </div>
<?php

	while($row= mysqli_fetch_array($query)){
    $id=$row['id'];
    $title=$row['productname'];
    $image=$row['image'];
    $category=$row['category'];
    $description=$row['description'];
    $dimension=$row['dimension'];
    $format=$row['extension'];
    $license=$row['license'];


?>



            <article>
            <a href="single-product.php?id=<?php echo $id ?>">
              <div class="img">
                <img src="assets/images/products/<?php echo $image ?>" alt="">
              </div>
              <div class="details">
                <h1><?php echo $title ?></h1>
                <h2><?php echo $category ?></h2>
                <p><?php echo $description ?> </p>
                <h3>Dimensions: <span><?php echo $dimension ?></span></h3>
                <h3>Format: <span><?php echo $format ?> </span></h3>
                <h3>License: <span><?php echo $license ?> </span></h3>
              </div>
            </a>
           <a href="delete.php?delete=selfproduct&id=<?php echo $id ?>"> <button type="button" name="button"><i class="fas fa-trash-alt"></i></button></a>
          </article>


          <?php
  }

?>




          <div class="pagination">
            <ul>
              <?php
                  $Buttons = 3;
                  $Total_Pages=$_GET['Total_Pages'];
                  $Page=$_GET['Page'];

                  $Start = $Page-$Buttons;
                  $Start = ($Start<1)?1:$Start;
                  $End = $Page+$Buttons;
                  $End = ($End>$Total_Pages)?$Total_Pages:$End;

                  // $search = $_GET['search'];
                  // $filter_q = $_GET['filter_q'];

                  $data_to_send = "products-history.php?Page=";
                  // Rewind button
                  if ($Start>1){
                    $b_Page = $Page-3;
                    $b_Page = ($b_Page<1)?1:$b_Page;
                    ?>

                      <!-- <li><a href="<?php echo $data_to_send.$b_Page;?>"><span><?php echo $b_Page;?></span></a></li> -->
                    <?php
                  }
                  for ($i=$Start; $i<=$End; $i++) {  // print links for all pages
                    if ($i==$Page){
                        ?>

                      <li class="active"><a href="<?php echo $data_to_send.$i;?>"><span><?php echo $i;?></span></a></li>
                      <?php

                    }else{
                      ?>

                      <li><a href="<?php echo $data_to_send.$i;?>"><span><?php echo $i;?></span></a></li>
                      <?php
                    }

                  };
                  if ($End<$Total_Pages){

                    $f_Page = $Page+3;
                    $f_Page = ($f_Page>$Total_Pages)?$Total_Pages:$f_Page;
                    ?>
                      <!-- <li><a href="<?php echo $data_to_send.$f_Page;?>"><span><?php echo $f_Page;?></span></a></li> -->
                    <?php
                  }
                ?>
            </ul>
          </div>
        </section>




    <script type="text/javascript" src="assets/js/JavaScript.js">

    </script>

<?php include 'footer.php';?>
  </body>
</html>
