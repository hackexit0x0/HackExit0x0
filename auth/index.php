<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags for character set and responsive design -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title of the webpage -->
  <title>Neon Glow Login</title>

  <!-- Font Awesome for icons and Google Fonts for the font style -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <!-- Custom Bootstrap and Neon Glow styling -->
  <link rel="stylesheet" href="../css/bootstrap4-neon-glow.min.css">
</head>

<body>

<!-- Main container for the login form -->
<div class="container py-5 mb-5">
  <h1 class="text-center mb-4">Login</h1>
  
  <!-- Row for centering the form -->
  <div class="row justify-content-center">
    <div class="col-md-6">
      
      <!-- Login form with validation -->
      <form class="needs-validation p-4 bg-dark text-light rounded" novalidate 
      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <!-- Username input field -->
        <div class="mb-3">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
          <!-- Validation feedback for username -->
          <div class="invalid-feedback">Username is required.</div>
        </div>
        
        <!-- Password input field -->
        <div class="mb-3">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
          <!-- Validation feedback for password -->
          <div class="invalid-feedback">Password is required.</div>
        </div>

        <!-- Login button -->
        <input class="btn btn-primary btn-block" type="submit" value="Login" name="login-btn">
      </form>

      <?php 
      
      ##php code
      if (isset($_POST["login-btn"])){
        
        # inlcude the database connection file
        include "../php/dbconnect.php";

        # get the username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        # check if the username and password are not empty
        if (!empty($username) && !empty($password)){
          # check user and password in the database
          $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
          $result = $conn->query($sql);

          # check match user & password
          if (mysqli_num_rows($result) > 0){
            # fetch the result
            while($row = mysqli_fetch_assoc($result)){
              # set the session variables
              session_start();
              $_SESSION["username"] = $row["username"];
              $_SESSION["Password"] = $row["password"];
              $_SESSION["role"] = $row["role"];

              # redirect to the dashboard
              header("Location: ../hubs/");
          
            }
            # creat session
          }else{
            # show error message
            echo "<div class='alert alert-danger'>Invalid username or password.</div>";
          }
        
         

        }
      }
      
      ?>
    </div>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery (required for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<!-- Popper.js for Bootstrap's tooltips and popovers -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>
