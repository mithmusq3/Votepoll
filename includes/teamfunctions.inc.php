<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';
session_start();

function Createnewteam($connection,$realtname,$conn){
    
    $container=$realtname;
    $generateteamid=rand(10000,99999);
        $sql = "INSERT INTO teams (teamdbname, teamID) VALUES(?, ?);";
        $stmtt = mysqli_stmt_init($connection);

        if (!mysqli_stmt_prepare($stmtt,$sql)) {
                header("location: ../Votepoll/testout.php");
                exit();
            }

    mysqli_stmt_bind_param($stmtt,"ss",$container,$generateteamid);
    mysqli_stmt_execute($stmtt);
    mysqli_stmt_close($stmtt);
    Updatetouser($conn,$generateteamid, $_SESSION["IDofuser"]);
    header("location: ../Votepoll/teampage.php");
    exit();

}