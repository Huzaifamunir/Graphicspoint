<?php

include 'db-connect.php';


?>

<nav>
      <div class="menu-icon"><span class="fas fa-bars"></span></div>
      <div class="logo"><a href="dashboard.php">Graphicspoint.</a></div>
      <div class="nav-items">
        <li><a href="profiles-list.php">Profiles</a></li>
        <li><a href="products-list.php">Products</a></li>

        <li><a href="messages-list.php">Messages</a></li>
        <li>
          <div class="user-profile-ddown">
            <button class="ddown-btn" type="button" name="button">
              <div class="img">
                <img src="assets/images/aaa.jpg" alt="">
              </div>
              <p><?php echo $_SESSION ['username'];?><i class="fas fa-sort-down"></i></p>
            </button>

            <div class="ddown">
                <ul>
                  <li><a href="profiles-list.php">Profiles</a></li>
                  <li><a href="products-list.php">Products</a></li>
                  <li><a href="messages-list.php">Messages</a></li>
                  <hr>
                  <li><a href="logout.php">SignOut</a></li>
                </ul>
            </div>
        </div>
      </li>
        <!-- <li class="signin-login-btns-mob"><a href="signup-login.html"> <button> SIGN UP / LOGIN </button></a></li> -->

      </div>
      <div class="search-icon"><span class="fas fa-search"></span></div>
      <div class="cancel-icon"><span class="fas fa-times"></span></div>
      <!-- <form action="#">
        <input type="search" class="search-data" placeholder="Search" required>
        <button type="submit" class="fas fa-search"></button>
      </form> -->
      <div class="user-profile-ddown">
          <button class="ddown-btn" type="button" name="button">
            <div class="img">
              <img src="assets/images/aaa.jpg" alt="">
            </div>
            <p><?php echo $_SESSION ['username'];?> <i class="fas fa-sort-down"></i></p>
          </button>

          <div class="ddown">
              <ul>
                <li><a href="profiles-list.php">Profiles</a></li>
                <li><a href="products-list.php">Products</a></li>
                <li><a href="messages-list.php">Messages</a></li>
                <hr>
                <li><a href="logout.php">SignOut</a></li>
              </ul>
          </div>
      </div>
      <!-- <a class="signin-login-btns" href="signup-login.html"> <button> SIGN UP / LOGIN </button></a> -->

    </nav>
