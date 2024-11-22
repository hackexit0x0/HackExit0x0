<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Neon Glow - Bootstrap Theme</title>
      <!-- External Stylesheets -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
      <link rel="stylesheet" href="../../css/bootstrap4-neon-glow.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css">
   </head>
   <body>
      <div class="navbar-dark text-white">
         <div class="container">
            <?php include '../nav.php'; ?>
            <?php include '../../php/dbconnect.php'; ?>
         </div>
      </div>
      <div class="container py-5 mb-5">
         <?php include "../sidebar.php"; ?>
         <!-- Main Content -->
      
            <center>
               <div class="row py-4">
                  <div class="col-md-8 order-md-1 bg-dark border rounded">
                     <br><br><br>
                     <h4 class="mb-3 text-light">File Upload Form</h4>
                     <p id="uploadText" class="text-muted">Files Supported: <span class="text-warning">JPG, JPEG, PNG, GIF</span></p>
                     <form action="php/upload1.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                           <input type="file" name="file" hidden accept=".jpg,.jpeg,.png,.gif" id="fileID">
                           <button class="btn btn-primary" type="button" id="choosefilebtn">Choose File</button>
                           <span id="filenameText" class="text-light invisible mt-2"></span>
                           <button class="btn btn-success invisible mt-3 btn btn-primary btn-lg btn-block" type="submit" name="submit" id="submitButton">Upload</button>

                           
                        </div>
                     </form>
                  </div>
               </div>
            </center>
         </div>
      </div>
      <!-- Scripts -->
      <script>
         document.getElementById('choosefilebtn').addEventListener('click', function () {
           document.getElementById('fileID').click();
         });
         
         document.getElementById('fileID').addEventListener('change', function () {
           const fileName = this.files[0]?.name || 'No file chosen';
           document.getElementById('filenameText').textContent = fileName;
           document.getElementById('filenameText').classList.remove('invisible');
           document.getElementById('submitButton').classList.remove('invisible');
         });
      </script>
      <!-- JS for Header Start -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="static/js/script.js"></script>
      <script>
         $(document).ready(function () {
           var showHeaderAt = 150;
           var win = $(window),
               body = $('body');
         
           if (win.width() > 400) {
             win.on('scroll', function () {
               if (win.scrollTop() > showHeaderAt) {
                 body.addClass('fixed');
               } else {
                 body.removeClass('fixed');
               }
             });
           }
         });
      </script>
      <!-- Optional JavaScript -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
   </body>
</html>