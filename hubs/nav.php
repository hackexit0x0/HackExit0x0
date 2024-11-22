<?php
# include db config file
include "../php/dbconnect.php";
# check sesion
session_start();

# cehck session s
if (!isset($_SESSION["username"])){
    # redirect to the login page
    header("Location: $domain/auth/");
}
?>
<br>
<div class="navbar-dark text-white">
    <div class="container">
        <!-- Main Navigation Bar -->

      

        <!-- Fourth Navigation Bar with Button -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11">
                    <a class="navbar-brand col-lg-3 me-0 text-danger" href="#">HackExit0x0</a>
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
                    <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <a href="logout.php"
               class="btn btn-danger btn-sm btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left">
              logout
            </a>
                    </div>
                </div>
            </div>
        </nav>

    
    </div>
</div>
