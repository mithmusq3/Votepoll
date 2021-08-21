
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MITHILESH K</title>
</head>
<body>
    <header class="header">
    <img src="images/logotask3.jpg" style="overflow: hidden;position: relative;top:18px;left:13px;display: block;box-sizing: border-box;width: 75.24px; height: 50px;">
    <p id="nameofuser"><?php echo $_SESSION["userpartname"];?></p>
     <a href="../includes/logout.inc.php" id="IamBatman" style="border:3px;text-decoration:none;position:absolute;left:85%;top:40%;color:white;">Log out</a>
     <a href="teampage.php" id="MypowerIamRich" style="border:3px;text-decoration:none;position:absolute;left:78%;top:40%;color:white;">Home</a>       
    </header>
</body>
<style>
.header {
    position:sticky;
   left: 0;
   top: 0;
   width: 100%;
   font-family: 'Open Sans',sans-serif;
   background-color:rgb(51, 51, 51);
   color: white;
    height:86.667px;
   
}
body{
    margin:0px;
}
#nameofuser{
    margin-top:0px;
    margin-bottom:0px;
    padding-top:0px;
    border:3px;
    text-decoration:none;
    position:absolute;
    left:92%;
    top:40%;
    color:white;
}
</style>
<script>
    document.getElementbyId
</script>
<style>
      @media (max-width: 767px) {
          p{
              font-size:8px;
          }
          a{
            font-size:8px;
              
          }
          #MypowerIamRich{
              position:relative;
              left:63% !important;
          }
          #IamBatman{
            left:74% !important;
          }
          #nameofuser{
            left:85% !important;
          }
      }
</style>
</html>