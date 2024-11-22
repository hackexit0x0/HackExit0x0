<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>No Restriction</title>
		<!-- Header & Upload form CSS -->
		<link rel="stylesheet" href="static/css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

		<!-- Footer CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
	</head>
<body>
	<!-- Header Start -->

	<!-- Header End -->

	<!-- Tip tool Start -->
	<div class="tiptool">
		<span class="tool" data-tip="Learn about Unrestricted File Upload Vulnerability." tabindex="1"><b>💡 Hint </b></span>
	</div>
	<!-- Tip tool End -->

<!-- Upload Form Start -->
<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card p-4 shadow-lg">
    <h3 class="text-center">Upload Files</h3>
    <div class="drop_box text-center p-3 border rounded">
      <header>
        <h4>Select File Here</h4>
      </header>
      <p id="uploadText" class="text-muted">Files Supported: JPG, JPEG, PNG, GIF</p>
      <form action="php/upload1.php" method="post" enctype="multipart/form-data">
        <div class="form mt-3">
          <h4 id="filenameText" class="invisible text-primary"></h4>
          <input type="file" name="file" hidden accept=".jpg,.jpeg,.png,.gif" id="fileID">
          <button class="btn btn-primary" type="button" id="choosefilebtn">Choose File</button>
          <button class="btn btn-success invisible mt-2" type="submit" name="submit" id="submitButton">Upload</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Upload Form End -->

<!-- Script -->
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
		$(document).ready(function(){
			var showHeaderAt = 150;
			var win = $(window),
					body = $('body');
	
			if(win.width() > 400) {
				win.on('scroll', function(e){
					if(win.scrollTop() > showHeaderAt) {
						body.addClass('fixed');
					}
					else {
						body.removeClass('fixed');
					}
				});
			}
		});
	</script>
	<!-- JS for Header End -->

	<!-- Choose Challenge Start -->
	<div class="choose_challenge">
		<h1>Challenges</h1>
		<div class="row">
			<div class="col">
				<div class="card card-danger" onclick="location.href = 'index.html';" >
					<p class="card-title">No Restriction</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Easy</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card card-danger" onclick="location.href = 'challenge2.html';" >
					<p class="card-title">Content Type</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Easy</p>
						</div>
					</div>
				</div>
			</div>	

			<div class="col">
				<div class="card card-danger" onclick="location.href = 'challenge3.html';" >
					<p class="card-title">Blacklist EXT Validation</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Medium</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col">
				<div class="card card-danger" onclick="location.href = 'challenge4.html';" >
					<p class="card-title">Whitelist EXT Validation - 1</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Medium</p>
						</div>
					</div>
				</div>
			</div>	
			
			<div class="col">
				<div class="card card-danger" onclick="location.href = 'challenge5.html';" >
					<p class="card-title">Whitelist EXT Validation - 2</p>
					<div class="card-data">
						<div class="difficulty card-sub">
							<i class="fas fa-bolt"></i>
							<p class="data">Medium</p>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
	<!-- Choose Challenge End -->

	<!-- Footer Start -->
	<footer>
		<div class="footer">
		
			<div class="row">
				Cyber Academy - Copyright © 2022 - Present - All rights reserved
			</div>
		</div>
	</footer>
	<!-- Footer End -->
</body>
</html> 
