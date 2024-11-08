<?php

# include db config file
include "../php/dbconnect.php";
# page logout script
# sesion destroy

session_start();
session_unset();
session_destroy();

header("Location: http://{$servername}/HackExit0x0/auth/");
?>