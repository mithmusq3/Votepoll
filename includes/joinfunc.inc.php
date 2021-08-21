<?php
$serverNamettt ="localhost";
$dBUsernamettt ="root";
$dBPasswordttt ="";
$dBNamettt ="votepollteams";
$connectionttt = mysqli_connect($serverNamettt,$dBUsernamettt,$dBPasswordttt,$dBNamettt);

$realtid;
session_start();

if (!$connectionttt)
{
    die("Connection failed: " . mysqli_connect_error());
}

// require_once 'teamfunctions.inc.php';
if(isset($_POST["submitjointeam"])){
    $realtid=$_POST["realteamofid"];
    jointhem($realtid,$connectionttt);
}
else{
    echo 'stupid Mithu Find where are you missing';
}

function jointhem($realtid,$connectionttt){
            $sql = "SELECT * FROM teams WHERE teamID = ?;";
            $stmt = mysqli_stmt_init($connectionttt);
            mysqli_stmt_prepare($stmt,$sql);
            mysqli_stmt_bind_param($stmt,"i",$realtid);
            mysqli_stmt_execute($stmt);

            $resultData=mysqli_stmt_get_result($stmt);  

            $row = mysqli_fetch_assoc($resultData);
    

            $justtostore=$row["teamdbname"];

        $inpt = file_get_contents('../Votepoll/personteamdata.json');
        $tempArrayt = json_decode($inpt);
        array_push($tempArrayt,array("teamSId"=>$realtid,"teamnametostore"=>$justtostore,"userid"=>$_SESSION["IDofuser"],"ispartof"=>1) );
        $jsonData = json_encode($tempArrayt);
        file_put_contents('../Votepoll/personteamdata.json', $jsonData);
        $newdbstoredteamdata=file_get_contents('../Votepoll/personteamdata.json');
        mysqli_stmt_close($stmt);
        header("location: ../Votepoll/teampage.php");
        exit();
}