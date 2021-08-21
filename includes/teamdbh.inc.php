<?php
$serverName ="localhost";
$dBUsername ="root";
$dBPassword ="";
$dBName ="votepollteams";
$connection = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

$serverNamee ="localhost";
$dBUsernamee ="root";
$dBPassworde ="";
$dBNamee ="votepollphp";

$conn = mysqli_connect($serverNamee,$dBUsernamee,$dBPassworde,$dBNamee);
session_start();

if (!$connection)
{
    die("Connection failed: " . mysqli_connect_error());
}

require_once 'teamfunctions.inc.php';

if(isset($_POST["submitteamn"])){
    $realtname=$_POST["realteamname"];
    $_SESSION["tostoreteamname"]=$_POST["realteamname"];
    Createnewteam($connection,$realtname,$conn);
}

