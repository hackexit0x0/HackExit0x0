<div class="navbar-dark text-white">
    <div class="container">
        <!-- Main Navigation Bar -->
        <nav class="navbar px-0 navbar-expand-lg navbar-dark">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <!-- Scrolling marquee message -->
                <marquee behavior="alternate" class="text-danger">
                    HackExit0x0 provides cyber security trainings to strengthen your team's offensive and defensive skills. Created by a Swiss cyber security pioneer.
                </marquee>
            </div>
        </nav>
        <hr> <!-- Divider between the main navbar and secondary navbar -->

        <!-- Secondary Navigation Bar with Button -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
            <div class="container-fluid">
                <!-- Toggler button for mobile view -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11">
                    <!-- Brand/Logo -->
                    <a class="navbar-brand col-lg-3 me-0 text-danger" href="#">HackExit0x0</a>
                    
                    <!-- Navigation Links -->
                    <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                        <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link disabled text-white" aria-disabled="true">Disabled</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu bg-white">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php
                   $trackip = $_SERVER['REMOTE_ADDR'];
                   $KEY = password_hash($trackip, PASSWORD_BCRYPT);
                   $KEY2 = md5($trackip);
                    ?>
                    <!-- Access Button -->
                    <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                        <a href="auth/?token=<?php echo $KEY; echo "&jwt=" ?><?php echo $KEY2; ?>" class="btn btn-success btn-sm btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left">Access</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
