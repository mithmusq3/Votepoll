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
if (isset($_SESSION["userpartname"])) {
include('header.php');
}
?>
</head>
<body>


<div id="wrapper"style="border:solid;border-color:white;">
	    <header style="border:solid;border-color:#ffb400;background: #ffb400;border-bottom:none;">
	    	<div id="page-banner"style="border:solid;border-color:white;">
	    		<h1 class="title" >Your Teams:</h1>
	    	</div>
	    </header>
        <div style="border:solid;min-height:250px;border-color:white;">
	    
         <ul id="topic" style="list-style-type:none;text-align: center;">
         <?php 
         $getvalue=file_get_contents('personteamdata.json');
         $tempArrayt = json_decode($getvalue,true);
         
         foreach($tempArrayt as $key => $value)
          {
              if($value["userid"]==$_SESSION["IDofuser"])
              {
                  echo '<li>'. $value["teamnametostore"] ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $value["teamSId"] . '</li>';
            
                  }
          }
         ?>
         
        </ul>
    
        </div>
</div>
<section id="addition" style="border:solid;">
Create new Team 
</section>
<section id="sticking" style="border:solid;">
Join Team 
</section>
</body>
<style>
  .title{
      font-family:sans-serif;
      text-align:center;
      margin:15px;
      color:white;
  }  
  #page-banner{
      margin-top:40px;
      margin-left:13%;
      margin-right:13%;
      margin-bottom:0px;
      background:rgb(51, 51, 51);
  }
  #topic{
      margin:0px;
      padding:0px;
  }
  li,#addition,#sticking{
      border:solid;
      padding-left:0px;
      margin:5px;
      margin-left:13.5%;
      margin-right:13.5%;
      padding-top:4px;
      padding-bottom:4px;
      font-family:sans-serif;
      cursor:pointer;
  }
  #addition,#sticking{
    margin-left:43%;
    margin-right:43%;
    text-align: center;
  }
</style>
<script>
    var anchors = document.getElementsByTagName('LI');
    window.onload = function() {
        for(var i = 0; i < anchors.length; i++) {
            var anchor = anchors[i];
            anchor.onclick = function() {
                location.replace("prior.php");
            }
        }
    }     
    document.getElementById("addition").onclick=function (){

    location.replace("inputteams.php");
    }
    document.getElementById("sticking").onclick=function (){

location.replace("jointeams.php");
}

</script>
<?php
include('footer.php');
?>
</html>