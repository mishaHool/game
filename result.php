<?php
$operat = '';
$ar = [];
$resul = 0;
if(isset($_POST['val']) && !empty($_POST['val'])){
    $val = trim($_POST['val']);
    $operat = a($val);
    $ar = explode($operat, $val);
    switch($operat){
        case '+':
            $resul = $ar[0]+$ar[1];
        break;
        case '-':
            $resul = $ar[0]-$ar[1];
        break;
        case '/':
            $resul = $ar[0]/$ar[1];
        break;
        case '*':
            $resul = $ar[0]*$ar[1];
        break;
    }
    header("Location: /?result=$resul");
}else{
    header("Location: /?error=empty");
    die();
}

function a($str){
    $arr = ['+','-','*','/'];
    for($i=0;$i<=count($arr);$i++){
        if(strpos($str, $arr[$i])){
            return $arr[$i];
        }
    }
    return false;
}