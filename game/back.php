<?php
include('db.php');
const BASEHP = 20;
$playerhp = gethp(1, $pdo);
$syshp = gethp(2, $pdo);
// echo 121234567890;
if(!empty($_POST['newGame'])){
updHp(1, $pdo, 20);
updHp(2, $pdo, 20);
$info = 'NEW GAME';
$_SESSION['info'] = $info;
}
function kick($pdo){
   updHp(2, $pdo, getHp(2, $pdo) - rand(0,4));
   updHp(1, $pdo, getHp(1, $pdo) - rand(0,4));
   if(gethp(1, $pdo) >= 0){
       echo 'SYSTEM WINS';
   }
   if(gethp(2, $pdo) >= 0){
       echo 'YOU WINS';
   }
}
if(!empty($_POST['reset'])){
    $_SESSION["info"] = 'BFA';
    updHp(2, $pdo, 20);
    updHp(1, $pdo, 20);
}
if(!empty($_POST['kick'])){
    kick($pdo);
    header("Location: index.php");
}
