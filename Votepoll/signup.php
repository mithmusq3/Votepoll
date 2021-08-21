<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MITHILESH K</title>
</head>
<body>
<section>
    <div id="sidebar"></div>
    <div id="twogrid">
        <div id="layoutrow">
            <div id="leftbox">
                <div id="imagecontainer"style="">
                      <img src="images/logotask3.jpg" style="overflow: hidden;position: relative;object-fit: cover;
                           display: block;box-sizing: border-box;width: 462px; height: 307px;margin:auto;">
                </div>
            </div>
            <div id="rightbox">
                <div id="inputcontainer">
                    <h3 style="font-size: 3.75rem;font-weight: 700;font-family: Roboto,sans-serif;
                                 margin: 46px auto 0 0;">Sign Up</h3>
                    <div style="font-family: 'Open Sans',sans-serif;height: 160px;width: 548px;text-align: left;margin: 35px 0 0;" >
                        <form method="POST" action="../includes/signup.inc.php" id="formcont" name="form">
                            <div>
                                <input class="getinbox" type="text" placeholder="Enter your Name" id="uname" name="uname">
                            </div>
                            <div>
                                <input class="getinbox" type="number" placeholder="Enter your Phone Number" id="upno" name="upno">
                            </div>
                            <div >
                                <input class="getinbox" type="email" placeholder="Enter a valid Email address" id="uemail" name="uemail">
                            </div>
                            <div >
                                <input class="getinbox" type="password" placeholder="Password" id="upwd" name="upwd">
                            </div>
                            <div>
                                <input class="getinbox" type="password" placeholder="Re-enter Password" id="urepwd" name="urepwd">
                            </div>
                            <div id="herewego">
                                <a href="Tryout/site.php"></a>
                                <input  id="submitme" type="submit" name="submitup" style="cursor:pointer;width:200px;"value="Register">
                                 <span style="font-family:sans-serif;color:rgb(255,0,0);"> <?php
                                    if(isset($_GET["error"])){
                                        if ($_GET["error"]=="emptyinput") {
                                            echo "<p>Fill in all the fields</p>";
                                        }
                                        if ($_GET["error"]=="invalidemail") {
                                            echo "<p>Enter a valid Email ID</p>";
                                        }
                                        if ($_GET["error"]=="passwordsdontmatch") {
                                            echo "<p>Passwords doesn't match</p>";
                                        }
                                        if ($_GET["error"]=="usernametaken") {
                                            echo "<p>Email ID already taken</p>";
                                        }
                                    }
                                    ?></span>
                            </div>
                        </form>
                                                            
                        <!-- <a href=""><h2 >Signin</h2></a> -->
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<style>
    #sidebar{
    width: calc(((100% - 1140px) / 2) + 185px);
    min-height: 686px;
    margin: 2px auto 0 0;
    background-color: #ffb400;
}
#twogrid{
    width: 1140px;
    margin-top: -607px;
    margin-bottom: 84px;
    position: relative;
    box-sizing: border-box;
    display: block;
    height:525px;
    margin-left:61.667px;
    margin-right:61.667px;
}
#layoutrow{
    flex-direction: row;
    flex-wrap: wrap;
    min-height: 100%;
    max-width: 100%;
    flex: 1 1 100%;
    display: flex;
    box-sizing: border-box;
}
#leftbox{
    
    flex: 0 0 46.66666667%;
    width: 46.66666667%;
    /* background-color: transparent !important; */
    /* opacity: 1; */
    position: relative;
    display: flex;
    background-clip: padding-box;
    background-origin: padding-box;
    max-height: 100%;
    box-sizing: border-box;
    background-color: #292d33;
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    padding:30px;
}
#rightbox
{
    text-align: left;
    flex: 0 0 53.33333333%;
    width: 53.33333333%;
    position: relative;
    display: flex;
    flex:2;
    background-clip: padding-box;
    background-origin: padding-box;
    max-height: 100%;
    box-sizing: border-box;
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 532px;
    right: 0;
}
#imagecontainer{
    padding: 30px 0;
    display: flex;
    flex-direction: column;
    position: relative;
    flex: 1;
    max-width: 100%;
    box-sizing: border-box;
    height:470px;
}
#inputcontainer{
    padding: 30px;
}
.getinbox{
   
    display: block;
    width: 100%;
    padding: 10px 12px;
    background-clip: padding-box;
    border: groove;
    border-radius: 3px;
    font-size:15px;
    letter-spacing:1px;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    background-color: transparent;
    height: auto;
    margin-top:5px;
    height:25.3333px;
    border-left-width: 0;
    border-left-style: none;
    border-right-width: 0;
    border-right-style: none;
    border-top-width: 0;
    border-top-style: none;
    
}

#formcont{
    margin-left: -10px;
    width: calc(100% + 10px);
    display: flex;
    box-sizing: border-box;
    font-size: 1rem;
    flex-direction: column;
}
#herewego{
padding-left:2px;
padding-right:30px;
padding-top:10px;
padding-bottom:10px;

}
#submitme{
    width:120px;
    height:40px;
    background:rgb(17,17,17);
    color:rgb(255,255,255);
    border:none;
    font-size:1rem;
    letter-spacing:1px;
    text-transform: uppercase;
    text-align: center;
    font-weight:bold;
    margin-top:10px;
}
#submitme:hover{
    background:rgb(40,40,40);
    
}

</style>
<style>
    @media (max-width: 767px) {
  
   #sidebar {
      width: 50%;
      min-height: 250vh;
      margin-right:0px;
    }
  
    #twogrid {
      
      margin-top: -538px;
      height:441px;
      margin-bottom: 84px;
      margin-left: 10px;
    }

#twogrid{
    width: 525px;
    position:absolute;
    margin-top: -1600px;
    margin-bottom: 0px;
    box-sizing: border-box;
    display: block;
    height:1052px;
    margin-left:61.667px;
    margin-right:61.667px;
}
#layoutrow{
    flex-direction: column;
    flex-wrap: wrap;
    min-height: 100%;
    max-width: 100%;
    flex: 1 1 100%;
    display: flex;
    box-sizing: border-box;
}
#leftbox{
    
    /* flex: 0 0 46.66666667%; */
    width: 100%;
    /* background-color: transparent !important; */
    /* opacity: 1; */
    position: relative;
    display: flex;
    background-clip: padding-box;
    background-origin: padding-box;
    max-height: 525px;
    box-sizing: border-box;
    background-color: #292d33;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    padding:30px;
    /* order:1; */
}
#rightbox
{   background-color:white;
    text-align: left;
    /* flex: 0 0 53.33333333%; */
    width:100%;
    /* position: relative; */
    display: flex;
    /* flex:2; */
    background-clip: padding-box;
    background-origin: padding-box;
    max-height: 525px;
    box-sizing: border-box;
    display: block;
    position: absolute;
    top: 525px;
    /* bottom: 0; */
    left: 0%;
    /* right: -100px; */
    border-color:rgb(51, 51, 51);
    border:solid;
}
#imagecontainer{
    padding: 30px 0;
    display: flex;
    flex-direction: column;
    position: relative;
    flex: 1;
    max-width: 100%;
    box-sizing: border-box;
    height:470px;
}
#inputcontainer{
    padding: 30px;
}
.getinbox{
   
    display: block;
    width: 80%;
    padding: 10px 12px;
    background-clip: padding-box;
    border: groove;
    border-radius: 3px;
    font-size:15px;
    letter-spacing:1px;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    background-color: transparent;
    height: auto;
    margin-top:5px;
    height:25.3333px;
    border-left-width: 0;
    border-left-style: none;
    border-right-width: 0;
    border-right-style: none;
    border-top-width: 0;
    border-top-style: none;
    
}

#formcont{
    margin-left: -10px;
    width: calc(100% + 10px);
    display: flex;
    box-sizing: border-box;
    font-size: 1rem;
    flex-direction: column;
}
#herewego{
padding-left:2px;
padding-right:30px;
padding-top:10px;
padding-bottom:10px;

}
#submitme{
    width:120px;
    height:40px;
    background:rgb(17,17,17);
    color:rgb(255,255,255);
    border:none;
    font-size:1rem;
    letter-spacing:1px;
    text-transform: uppercase;
    text-align: center;
    font-weight:bold;
    margin-top:10px;
}
#submitme:hover{
    background:rgb(40,40,40);
    
}
  }
</style>
<?php
include('footer.php');
?>
<style>
    @media (max-width: 767px) {
    .footer{
        width:750px;
    }
}
</style>
</html>