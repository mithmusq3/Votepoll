<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mithilesh K</title>
</head>
<?php
session_start();
include('../Votepoll/header.php');
$_SESSION["poll5"]=isset($_POST["poll5"])?$_POST["poll5"]: NULL;
$_SESSION["poll6"]=isset($_POST["poll6"])?$_POST["poll6"]: NULL;
$_SESSION["poll7"]=isset($_POST["poll7"])?$_POST["poll7"]: NULL;
$_SESSION["poll8"]=isset($_POST["poll8"])?$_POST["poll8"]: NULL;
?>
<body>
<div id="dom-target" style="display: none;">
    
</div>
<div id="monkey">
  <div class="wrapper">
    <div id="poll-area">
      <section id="inputsomething">
      <input type="checkbox" name="poll" id="opt-1">
      <input type="checkbox" name="poll" id="opt-2">
      <input type="checkbox" name="poll" id="opt-3">
      <input type="checkbox" name="poll" id="opt-4">
      </section>
      <section id="labelsomething">
      <label for="opt-1" class="opt-1">
        <div class="row">
          <div class="column">
            <span class="circle"></span>
            <span class="text"><?php echo $_POST["poll1"]?></span>
          </div>
        </div>
      </label>
      <label for="opt-2" class="opt-2">
        <div class="row">
          <div class="column">
            <span class="circle"></span>
            <span class="text"><?php echo $_POST["poll2"]?></span>
          </div>
        </div>
      </label>
      <label for="opt-3" class="opt-3">
        <div class="row">
          <div class="column">
            <span class="circle"></span>
            <span class="text"><?php echo $_POST["poll3"]?></span>
          </div>
        </div>
      </label>
      <label for="opt-4" class="opt-4">
        <div class="row">
          <div class="column">
            <span class="circle"></span>
            <span class="text"><?php echo $_POST["poll4"]?></span>
          </div>
        </div>
      </label>
      </section>
      <input type="submit" name="poll" id="opt-51" style="cursor:pointer;display: block;font-size:15px;margin-left:35%;margin-bottom: 10px;border-radius: 5px;padding: 8px 15px;border: 2px solid #292d33;transition: all 0.2s ease;box-sizing: border-box;font-family: 'Poppins', sans-serif;">
    </div>
  </div>
</div>
<?php
include('../Votepoll/footer.php');
?>
<script>

var keeptrackof;
var counterbuddy=localStorage.getItem("buddy");
document.getElementById("dom-target").textContent = counterbuddy;
if(counterbuddy>4){
for(var p=4;p<counterbuddy;p++){
var et=p+1;
  var input = document.createElement("input");
    input.type = 'checkbox';
    input.name = "poll"; 
    input.id = "opt-"+et; 
    inputsomething.appendChild(input);
  var label = document.createElement("label");
  label.htmlFor="opt-"+et;
  label.className="opt-"+et;
  labelsomething.appendChild(label);
  var divone=document.createElement("div");
  divone.className="row";
  (label).appendChild(divone);
  var divtwo=document.createElement("div");
  divtwo.className="column";
  (divone).appendChild(divtwo);
  var span = document.createElement("span");
  span.className="circle";
  var varr1="labelling"+p
  divtwo.appendChild(span);
  if(p==4){
  var str = '<span class="text"><?php echo $_SESSION["poll5"] ?></span>';
  divtwo.insertAdjacentHTML( 'beforeend', str );  
  }
  if(p==5){
  var str = '<span class="text"><?php echo $_SESSION["poll6"] ?></span>';
  divtwo.insertAdjacentHTML( 'beforeend', str );  
  }
  if(p==6){
  var str = '<span class="text"><?php echo $_SESSION["poll7"] ?></span>';
  divtwo.insertAdjacentHTML( 'beforeend', str );  
  }
  if(p==7){
  var str = '<span class="text"><?php echo $_SESSION["poll8"] ?></span>';
  divtwo.insertAdjacentHTML( 'beforeend', str );  
  }
}
localStorage.setItem("buddy",4);
}

    var div = document.getElementById("dom-target");
    var myData = div.textContent;
</script>
</body>

<script>
  const options = document.querySelectorAll("label");
for (let i = 0; i < options.length; i++) {
  options[i].addEventListener("click", ()=>{
    for (let j = 0; j < options.length; j++) {
      if(options[j].classList.contains("selected")){
        options[j].classList.remove("selected");
      }
    }

    options[i].classList.add("selected");
    for (let k = 0; k < options.length; k++) {
      options[k].classList.add("selectall");
    }

    let forVal = options[i].getAttribute("for");
    let selectInput = document.querySelector("#"+forVal);
    let getAtt = selectInput.getAttribute("type");
    if(getAtt == "checkbox"){
      selectInput.setAttribute("type", "radio");
    }else if(selectInput.checked == true){
      options[i].classList.remove("selected");
      selectInput.setAttribute("type", "checkbox");
    }

    let array = [];
    for (let l = 0; l < options.length; l++) {
      if(options[l].classList.contains("selected")){
        array.push(l);
      }
    }
    if(array.length == 0){
      for (let m = 0; m < options.length; m++) {
        options[m].removeAttribute("class");
      }
    }
  });
}

</script>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

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
.wrapper #poll-area{
  margin: 20px 0 15px 0;
}
#poll-area label{
  display: block;
  margin-bottom: 10px;
  border-radius: 5px;
  padding: 8px 15px;
  border: 2px solid #292d33;
  transition: all 0.2s ease;
}
#poll-area label:hover{
  border-color: #ddd;
}

label.selected{
  border-color: #ffb400!important;
}
label .row{
  display: flex;
  pointer-events: none;
  justify-content: space-between;
}
label .row .column{
  display: flex;
  align-items: center;
}
label .row .circle{
  height: 19px;
  width: 19px;
  display: block;
  border: 2px solid #292d33;
  border-radius: 50%;
  margin-right: 10px;
  position: relative;
}
label.selected .row .circle{
  border-color: #ffb400;
}
label .row .circle::after{
  content: "";
  height: 11px;
  width: 11px;
  background: #ffb400;
  border-radius: inherit;
  position: absolute;
  left: 2px;
  top: 2px;
  display: none;
}
#poll-area label:hover .row .circle::after{
  display: block;
  background: #e6e6e6;
}
label.selected .row .circle::after{
  display: block;
  background: #ffb400!important;
}
label .row span{
  font-size: 16px;
  font-weight: 500;
}
label .row .percent{
  display: none;
}
label .progress{
  height: 7px;
  width: 100%;
  position: relative;
  background: #f0f0f0;
  margin: 8px 0 3px 0;
  border-radius: 30px;
  display: none;
  pointer-events: none;
}
label .progress:after{
  position: absolute;
  content: "";
  height: 100%;
  background: #292d33;
  border-radius: inherit;
  transition: all 0.2s ease;
}
label.selected .progress::after{
  background: #ffb400;
}
label.selectall .progress,
label.selectall .row .percent{
  display: block;
}
input[type="radio"],
input[type="checkbox"]{
  display: none;
}

</style>
</html>