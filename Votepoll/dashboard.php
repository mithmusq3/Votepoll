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
  
</head>
<body>
<?php 
include('header.php');
?>
<div id="wrapper"style="border:solid;border-color:white;">
	    <header style="border:solid;border-color:#ffb400;background: #ffb400;border-bottom:none;">
	    	<div id="page-banner"style="border:solid;border-color:white;">
	    		<h1 class="title" >Your Polls:</h1>
	    	</div>
	    </header>
        <div style="border:solid;min-height:250px;border-color:white;">
	    
         <ul class="topic" style="list-style-type:none;text-align: center;">
         <ol class="teamlist" >Poll 1</ol>
         <ol class="teamlist" >Poll 2</ol>
         <ol class="teamlist" >Poll 3</ol>
        
        </ul>
    
        </div>
</div>

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
  .topic{
      margin:0px;
      padding:0px;
  }
  .teamlist{
      border:solid;
      padding-left:0px;
      margin:5px;
      margin-left:13.5%;
      margin-right:13.5%;
      padding-top:4px;
      padding-bottom:4px;
      font-family:sans-serif;
  }
  
</style>
<?php
include('footer.php');
?>
</html>