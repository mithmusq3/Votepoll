<?php 
// $something=uniqid('id',true); echo "$something";
$tnmedata=array();
$tnamedata=json_decode(file_get_contents('userteamname.json'));
echo '<pre>';
print_r($tnamedata);
echo '</pre>';


$inp = file_get_contents('userteamname.json');

echo'<br><br>';
echo $inp;
echo'<br><br>';

$tempArray = json_decode($inp);


array_push($tempArray,array("userID"=>2,"ispartof"=>0) );
$jsonData = json_encode($tempArray);
file_put_contents('userteamname.json', $jsonData);

echo '<pre>';
print_r($tnamedata);
echo '</pre>';
// [
//     {
//         "userID":1,
//         "ispartof":true
//     },
//     {
//         "userID":2,
//         "ispartof":false
//     }
// ]