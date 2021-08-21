<?php

if (isset($_POST["submitin"])) {
  
    $useremail=$_POST["uemailin"];
    $pwd=$_POST["upwdin"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (emptyInputSignin( $useremail,$pwd) !==false) {
    header("location: ../Votepoll/signin.php?error=emptyinput");
    exit();
}

   loginUser($conn,$useremail,$pwd);
}
else{
    header("location: ../Votepoll/signin.php?whathappened");
    exit();
}