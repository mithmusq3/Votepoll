<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mithilesh K</title>
</head>
<body>

  <?php
  session_start();
  $_SESSION["keepcountof"]=4;
  include('../Votepoll/header.php');
  ?>
  <div>
  </div>
    <div id="monkey">
  <div class="wrapper">
      <header>Enter the options: </header>
    <div class="poll-area">
        <form action="pollindex.php"  method="POST" name="bull">

            <input type="text" name="poll1">
            <input type="text" name="poll2">
            <input type="text" name="poll3">
            <input type="text" name="poll4">
            <section id="addcontainer">

            </section>
            <input type="submit" style="cursor:pointer;width:50%;margin-left:24%;display: block;margin-bottom: 10px;border-radius: 5px;padding: 8px 15px;border: 2px solid #292d33;" name="bullsubmit" value="Submit">
        </form>
        <section id="adder" style="width:50%;margin-left:24%;display:block;text-align:center;cursor:pointer;margin-bottom: 10px;border-radius: 5px;padding: 8px 15px;border: 2px solid #292d33;" name="bullsubmit" >Add</section>
     
    </div>
  </div>
  </div>
  <script src="script.js"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
/* #292d33 */
#monkey{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #ffb400;
}
::selection{
  color: #fff;
  background: #ffb400;
}
.wrapper{
  background: #fff;
  border-radius: 15px;
  padding: 25px;
  max-width: 380px;
  width: 100%;
  box-shadow: 0px 5px 10px rgba(0,0,0,0.1);
}
.wrapper header{
  font-size: 22px;
  font-weight: 600;
}
.wrapper .poll-area{
  margin: 20px 0 0px 0;
}
input{
 width:100%;display: block;margin-bottom: 10px;border-radius: 5px;padding: 8px 15px;border: 2px solid #292d33;
}
</style>
<script>
  check=4;
  
  document.getElementById("adder").onclick=function (){
    var input = document.createElement("input");
    check++;
    input.type = "text";
    input.name = "poll"+check; 
    addcontainer.appendChild(input);
    localStorage.setItem("buddy",check);
     }

</script>
<?php
  include('../Votepoll/footer.php');
  ?>
</body>
</html>
