<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>MITHILESH K</title>
    <?php
include('header.php');
?>
</head>
<body>
<div id="herewego"style="background:#ffb400;display:flex;justify-content:center;align-items:center;min-height:400px;">
<form method="POST" action="../includes/joinfunc.inc.php"  name="jointeamform">
<input type="number" style="padding:15px;font-size:15px;border-radius:4px;border-color:#292d33;border-style:solid;"placeholder="Enter Team ID" name="realteamofid">
<input type="submit"  style="padding:15px;font-size:15px;border-radius:4px;border-color:#292d33;border-style:solid;"style="cursor:pointer;width:200px;" name="submitjointeam" style="cursor:pointer;width:200px;"value="Join">
</form>
</div>
<?php
include('footer.php');
?>

</body>
<style>
    @media (max-width: 767px) {
    .footer{
        width:100%;
    }
    #herewego{
        min-height:500px !important;
    }
}
</style>
</html>