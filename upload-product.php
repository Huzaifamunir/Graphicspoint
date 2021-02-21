<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>graphicspoint</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <?php include 'nav.php';?>
    <div class=" contact-us-div">

          <h2>Upload</h2>
          <h4>Let the world see your work!</h4>
          <form class="" action="upload-product-action.php" method="post" enctype="multipart/form-data">
            <div class="styled-input">
              <input type="text" name="category" required/>
              <label>Category i.e., Headphones</label>
            </div>

            <div class="styled-input">
              <input type="text" name="productname" required/>
              <label>Name of Product</label>
            </div>

            <div class="styled-input wide">
              <textarea maxlength="200" name="description" required></textarea>
              <label>Description. . .</label>
            </div>

            <div class="styled-input">
              <input type="text" name="dimension" required/>
              <label>Dimensions i.e., (180cm * 180cm)</label>
            </div>

            <div class="styled-input">
              <select class="" name="extension" required>
                <option value="" selected disabled>Select an extension</option>
                <option value="ai">AI</option>
                <option value="xd">XD</option>
                <option value="psd">PSD</option>
                <option value="photos">Photos</option>
              </select>
              <label>Available Formats</label>
            </div>

            <div class="styled-input">
              <input type="text" name="license" required/>
              <label>License</label>
            </div>

            <div class="styled-input file-input">
              <input type="file" name="image" required/>
              <label>Image</label>
            </div>

            <div class="styled-input file-input">
              <input type="file" name="vector" required/>
              <label>Vector/PSD/XD</label>
            </div>



            <button class="btn-lrg submit-btn"  name="button">Upload</button>
          </form>


    </div>
    <?php include 'footer.php';?>

  </body>
</html>
