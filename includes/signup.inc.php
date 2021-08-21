<?php

    if(isset($_POST["submitup"])){

    $name=$_POST["uname"];
    $phoneno=$_POST["upno"];
    $email=$_POST["uemail"];
    $pwd=$_POST["upwd"];
    $repwd=$_POST["urepwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

        if (emptyInputSignup( $name,$phoneno,$email,$pwd,$repwd) !==false) {
            header("location: ../Votepoll/signup.php?error=emptyinput");
            exit();
        }
        if (invalidEmail($email) !==false) {
            header("location: ../Votepoll/signup.php?error=invalidemail");
            exit();
        }
        if (pwdMatch( $pwd,$repwd) !==false) {
            header("location: ../Votepoll/signup.php?error=passwordsdontmatch");
            exit();
        }
        if (uidExists( $conn,$email) !==false) {
            header("location: ../Votepoll/signup.php?error=usernametaken");
            exit();
        }
      
        createUser($conn,$name,$phoneno,$email,$pwd);
        
    }
    else{
        header("location: ../Votepoll/signup.php");
        exit();
    }