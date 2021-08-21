<?php

$samplename;

function emptyInputSignup( $name,$phoneno,$email,$pwd,$repwd){
$result;
if (empty($name) || empty($phoneno) || empty($email) || empty($pwd) || empty($repwd)) {
    $result= true;
}
else{
    $result=false;
}
return $result;
}
//   learn about preg_match()
function pwdMatch( $pwd,$repwd){
    $result;
    if ($pwd!==$repwd) {
        $result= true;
    }
    else{
        $result=false;
    }
    return $result;
    }
function invalidEmail($email){
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result= true;
        }
        else{
            $result=false;
        }
        return $result;
        }
function uidExists($conn,$email) {
           
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("location: ../Votepoll/signup.php?error=stmtfailed");
    exit();
}

mysqli_stmt_bind_param($stmt,"s",$email);
mysqli_stmt_execute($stmt);

$resultData=mysqli_stmt_get_result($stmt);  

if($row = mysqli_fetch_assoc($resultData)){
return $row;
}
else{
    $result=false;
    return $result;
}
mysqli_stmt_close($stmt);
}

function createUser($conn,$name,$phoneno,$email,$pwd) {
           
    $sql = "INSERT INTO users (usersName, usersPno, UsersEmail, UsersPwd ,teamdata) VALUES(?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("location: ../Votepoll/signup.php?error=stmtfailed");
            exit();
        }

        // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); and pass $hashedPwd in the below statement instead of $pwd
    
$nothing='[{"teamSId":1,"comeunder":1}]';
mysqli_stmt_bind_param($stmt,"sssss",$name,$phoneno,$email,$pwd,$nothing);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: ../Votepoll/signup.php?error=none");
exit();
}

function emptyInputSignin( $useremail,$pwd){
    $result;
    if (empty($useremail) || empty($pwd)) {
        $result= true;
    }
    else{
        $result=false;
    }
    return $result;
    }

function loginUser($conn,$useremail,$pwd){
    $uidExists= uidExists( $conn,$useremail);

    if ($uidExists===false) {
        header("location: ../Votepoll/signin.php?error=wronglogin");
        exit();
    }

$pwdHashed= $uidExists["usersPwd"];
// $checkpwd=password_verify($pwd,$pwdHashed); for hashed password and use $checkpwd= password_verify($pwd,$pwdHashed) if its true or false 

if($pwd !== $pwdHashed){
    header("location: ../Votepoll/signin.php?error=wronglogin");
    exit();
}
else {
  
     session_start();
     $_SESSION["userpartname"]=$uidExists["usersName"];
     $samplename=$uidExists["usersId"];
     $_SESSION["IDofuser"]=$uidExists["usersId"];
     $_SESSION["uteamdata"]=$uidExists["teamdata"];
     header("location: ../Votepoll/teampage.php");
        exit();
}
}
function Updatetouser($conn,$generateteamid,$right ){
    
    session_start();
    $inpt = file_get_contents('../Votepoll/personteamdata.json');
    $tempArrayt = json_decode($inpt);
    array_push($tempArrayt,array("teamSId"=>$generateteamid,"teamnametostore"=>$_SESSION["tostoreteamname"],"userid"=>$right,"ispartof"=>1) );
    $jsonData = json_encode($tempArrayt);
    file_put_contents('../Votepoll/personteamdata.json', $jsonData);
    $newdbstoredteamdata=file_get_contents('../Votepoll/personteamdata.json');


}
// [{"teamSId":1,"comeunder":1},{"teamSId":56406,"ispartof":1}]


// $sql = "SELECT * FROM users WHERE usersId = ?;";
//     $stmt = mysqli_stmt_init($conn);
//     mysqli_stmt_prepare($stmt,$sql);
//     mysqli_stmt_bind_param($stmt,"i",$right);
//     mysqli_stmt_execute($stmt);

//     $resultData=mysqli_stmt_get_result($stmt);
//     $row = mysqli_fetch_assoc($resultData);



//     $dbstoredteamdata=$row["teamdata"];
//     file_put_contents('personteamdata.json',$dbstoredteamdata);

//     $tnamedatat=json_decode(file_get_contents('../Votepoll/personteamdata.json'));
// mysqli_stmt_close($stmt);