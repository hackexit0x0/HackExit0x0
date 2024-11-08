<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Neon Glow - Bootstrap Theme</title>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- Custom Bootstrap Neon Glow Theme -->
    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <!-- Hack font -->
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php include 'nav.php'; ?>
    
    <!-- Jumbotron Section -->
    <div class="jumbotron bg-transparent mb-0 radius-0">
      <div class="container">
        <div class="px-4 pt-5 my-5 text-center border-bottom">
          <h1 class="display-2 fw-bold text-body-emphasis">
            WE TRAIN <span class="vim-caret text-warning">HACKING</span>
          </h1>
          <div class="col-lg-6 mx-auto">
            <div class="lead mb-3 text-mono text-success">This is a starter template with a jumbotron</div>
            <div class="text-mono">
              <a href="#!" title="Download Theme" class="btn btn-success btn-shadow px-3 my-2 ml-0 text-left">
                A Button
              </a>
              <a href="#!" class="btn btn-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left">
                Another Button
              </a>
            </div>
          </div>
          <div class="text-darkgrey text-mono my-2">Some muted text</div>
          <p class="mt-5 text-grey text-spacey">
            HackExit0x0-Lab provides cyber security trainings to strengthen your team's offensive and defensive skills. Created by a Swiss cyber security pioneer, you and your colleagues will gain expertise through our high-quality curriculum. Begin today and outfit your team with essential abilities.
          </p>
        </div>
      </div>
    </div>

    <!-- Section for Testing Types -->
    <div class="container px-4 py-5" id="custom-cards">
      <center><h3>Black Box Testing & White Box Testing & Grey Box Testing</h3></center>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <!-- Black Box Testing Card -->
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://www.hackthebox.com/images/landingv3/mega-menu-red-team-blue-team.webp');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">BLACK BOX TESTING</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="https://docxinfo.site/assets/favicon/favicon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                  <small>docxinfo.site</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                  <small>3d</small>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- White Box Testing Card -->
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://www.hackthebox.com/images/landingv3/mega-menu-pro-cloud-labs.webp');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">WHITE BOX TESTING</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="https://docxinfo.site/assets/favicon/favicon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                  <small>docxinfo.site</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                  <small>4d</small>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Grey Box Testing Card -->
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://www.hackthebox.com/images/landingv3/crisis-control-hero.webp');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">GRAY BOX TESTING</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="https://docxinfo.site/assets/favicon/favicon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                  <small>docxinfo.site</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                  <small>5d</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm
