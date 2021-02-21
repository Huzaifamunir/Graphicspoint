<?php



include 'db-connect.php';
if(!isset($_SESSION)){
       session_start();
 }

$id=$_GET['id'];



    $query="SELECT * FROM products WHERE id= '$id'";
    $data = mysqli_query($con,$query);
      $total = mysqli_num_rows($data);
      if($total !=0){
        while ($row = mysqli_fetch_assoc($data)) {
          $proid=$row['id'];
          $title=$row['productname'];
          $image=$row['image'];
          $imageDownload=$row['vector'];
          $category=$row['category'];
          $description=$row['description'];
          $dimension=$row['dimension'];
          $format=$row['extension'];
          $license=$row['license'];
          $id=$row['userid'];

          $query2 ="SELECT * FROM signup WHERE id = '$id'";
          $result2 = mysqli_query($con,$query2);
          $row2 = mysqli_fetch_assoc($result2);
          $username = $row2['username'];
        }
      }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
        <title>graphicspoint.</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">


        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>

  <body>

  <?php include 'nav.php';?>

<div class="single-product-detail">

  <div class="img-side">
    <img src="assets/images/products/<?php echo $image ?>" alt="">
  </div>
  <div class="detail-side">
    <div class="product-description">
      <span><?php echo $category ?></span>
      <h1><?php echo $title ?></h1>
      <p><?php echo $description ?></p>
    </div>

    <div class="product-detail">
         <b> Dimension: </b> <?php echo $dimension ?> <br>
         <b> Format:</b> <?php echo $format ?>   <br>
          <b>License:</b> <?php echo $license ?> <br>

           <a href="download.php?download=<?php echo $imageDownload ?>"> <button name="button" class="download-btn">Downnload</button></a>
           <br>
           <b>By:</b> <a href="profile.php?id=<?php echo $id ?>"> <?php echo $username ?> </a><br>
    </div>

  </div>

</div>

<hr>
<div id="usercomments" class="comments-see">
  <!-- <div>
    <p>main comments</p>
    <span>date.time</span>
  </div>
  <div>
    <p>main comments</p>
    <span>date.time</span>
  </div>
  <div>
    <p>main comments</p>
    <span>date.time</span>
  </div> -->


</div>
<?php if(isset($_SESSION['email'])){
  ?>
<form  id="formdata" class="comments-form" method="post">
    <div class="">
        <!-- <textarea type="text" name="comment" id="name" value=""> -->
          <textarea id="name" name="comment" rows="8" cols="80"></textarea>
        <!-- <input  type="button" id="submit" name="submit" value="submit"> -->
        <button type="button" name="submit" id="submit"><i class="fas fa-comments"></i></button>
		</div>
</form>
<?php } ?>
<?php include 'footer.php';?>
  </body>
</html>

<script>
$(document).ready(function(){
    $("#submit").click(function(e){

      e.preventDefault();

    $.ajax({
                    url:'commentaction.php?id=<?php echo $proid ?>',
                    method:'post',
                    data:$('#formdata').serialize(),
                    datatype:'text',
                   success:function(response){
                      //  alert(response);
                   }
                });
 });
});


</script>
<script>
$(document).ready(function(){
    setInterval(function(){
      $('#usercomments').load('commentshow.php?id=<?php echo $proid ?>')
    },3000);
});
</script>
