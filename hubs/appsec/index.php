

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Neon Glow - Bootstrap Theme</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap4-neon-glow.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css">
  </head>
  <body>

    <div class="navbar-dark text-white">
      <div class="container">
        <?php include 'nav.php'; ?>
        <?php include '../php/dbconnect.php'; ?>
      </div>
    </div>

    <div class="container py-5 mb-5 ">
      <?php include "sidebar.php"; ?>

      <?php
      // Assuming $conn is already defined in your included 'db.php' or connection file
      // Fetch data from the 'users' table
      $sql = "SELECT * FROM users";
      $result = $conn->query($sql);

      // Display data in table if records are found
      if ($result->num_rows > 0) {
        echo '<table class="table bg-dark rounded">';
        echo '  <thead class="thead-light">';
        echo '    <tr>';
        echo '      <th scope="col">SNO</th>';
        echo '      <th scope="col">Username</th>';
        echo '      <th scope="col">Date</th>';

        // Show Actions column only for admins
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
          echo '      <th scope="col">Actions</th>';
        }
        echo '    </tr>';
        echo '  </thead>';
        echo '  <tbody>';

        while($row = $result->fetch_assoc()) {
          echo '    <tr>';
          echo '      <th scope="row">' . $row["id"] . '</th>';
          echo '      <td>' . $row["username"] . '</td>';
          echo '      <td>' . $row["token_date"] . '</td>';
          
          // Check if the user role is admin to show the edit and delete options
          if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
            echo '      <td>';
            echo '        <a href="edit.php?authID=' . $row["token"] . '" class="btn btn-sm btn-primary my-1 my-sm-0">';
            echo '          <span class="fas fa-edit mr-1"></span> Edit</a>';
            echo '        <a href="remove.php?authID=' . $row["token"] . '" class="btn btn-sm btn-danger my-1 my-sm-0">';
            echo '          <span class="fas fa-trash mr-1"></span> Delete</a>';
            echo '      </td>';
          }

          echo '    </tr>';
        }

        echo '  </tbody>';
        echo '</table>';
      } else {
        echo 'No records found.';
      }
      ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
