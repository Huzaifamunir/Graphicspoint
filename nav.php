
<?php
  include 'db-connect.php';
?>

<nav>
    <div class="menu-icon"><span class="fas fa-bars"></span></div>
    <div class="logo"><a href="index.php">Graphicspoint.</a></div>
    <div class="nav-items">
      <li><a href="search-results.php?filter=ai">AI</a></li>
      <li><a href="search-results.php?filter=xd">XD</a></li>
      <li><a href="search-results.php?filter=psd">PSD</a></li>
      <li><a href="search-results.php?filter=photos">Photos</a></li>


      <?php
  if(isset($_SESSION['email'])){

  ?>

      <li>
        <div class="user-profile-ddown">
          <button class="ddown-btn" type="button" name="button">
            <div class="img">
              <img src="assets/images/<?php echo $_SESSION ['pic'];?>" alt="">
            </div>

            <p><?php echo $_SESSION ['username'];?><i class="fas fa-sort-down"></i></p>
          </button>

          <div class="ddown">
            <ul>
              <li><a href="profile.php?id=<?php echo $_SESSION['id'];?>">Profile</a></li>
              <li><a href="products-history.php">History</a></li>
              <li><a href="upload-product.php">Add Product</a></li>
              <hr>
              <li><a href="logout.php">SignOut</a></li>
            </ul>
          </div>
        </div>
      </li>
      <?php
  }else{


  ?>

      <li class="signin-login-btns-mob"><a href="signup-login.php"> <button> SIGN UP / LOGIN </button></a></li>
      <?php

}
?>
    </div>
    <div class="search-icon"><span class="fas fa-search"></span></div>
    <div class="cancel-icon"><span class="fas fa-times"></span></div>
    <form action="search-results.php" method="post">
      <input type="search" class="search-data" name="search" placeholder="Search" required>
      <button name="submit" class="fas fa-search"></button>
    </form>

    <?php
  if(isset($_SESSION['email'])){

  ?>
    <div class="user-profile-ddown">
      <button class="ddown-btn" type="button" name="button">
        <div class="img">
          <img src="assets/images/<?php echo $_SESSION ['pic'];?>" alt="">
        </div>
        <p><?php echo $_SESSION ['username'];?><i class="fas fa-sort-down"></i></p>
      </button>

      <div class="ddown">
        <ul>
          <li><a href="profile.php?id=<?php echo $_SESSION['id'];?>">Profile</a></li>
          <li><a href="products-history.php">History</a></li>
          <li><a href="upload-product.php">Add Prodouct</a></li>
          <hr>
          <li><a href="logout.php">SignOut</a></li>
        </ul>
      </div>
    </div>
    <?php
  }else{


?>



    <a class="signin-login-btns" href="signup-login.php"> <button> SIGN UP / LOGIN </button></a>
    <?php } ?>
  </nav>
