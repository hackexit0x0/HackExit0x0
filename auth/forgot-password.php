<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Neon Glow Login</title>

  <!-- Font Awesome & Google Fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <!-- Bootstrap and Custom CSS -->
  <link rel="stylesheet" href="../css/bootstrap4-neon-glow.min.css">
</head>
<body>

<div class="container py-5 mb5">
  <h1 class="text-center mb-4">Login</h1>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form class="needs-validation p-4 bg-dark text-light rounded" novalidate>
      <div class="mb-3">
          <label for="password">Enter new Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your new password" required>
          <div class="invalid-feedback">Password is required.</div>
        </div>
        
        <div class="mb-3">
          <label for="password">Confirm Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your Confirm password" required>
          <div class="invalid-feedback">Password is required.</div>
        </div>

        <button class="btn btn-primary btn-block" type="submit">Forgot Password</button>
      </form>
    </div>
  </div>
</div>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>
