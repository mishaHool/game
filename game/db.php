<?php
$host = 'localhost';
$usname = 'root';
$pass = '';
$table = 'users';
try{
$pdo = new PDO(
    "mysql:host=$host;dbname=test",
    $usname,
    $pass
);
}catch(PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

try{
$sql = "CREATE TABLE employees (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_name VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    hp VARCHAR(50),
    )";
// use exec() because no results are returned
$pdo->exec($sql);
echo "Table employees created successfully";
}
catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
//function getHp($user_iD, $pdo){
//    $sql = "SELECT `hp` FROM `users` WHERE $user_iD";
//    $res = $pdo->query("SELECT `hp` FROM `users` WHERE `user_id` = $user_iD");
//    $l_records = $res->fetch(PDO::FETCH_ASSOC);
//    return $l_records['hp'];
//}
try{
    function updHp($user_iD, $pdo, $newHp){
        $sql = "UPDATE `users` SET `hp`=$newHp WHERE `user_id`= $user_iD";
        $res = $pdo->query($sql);
    }
}catch(PDOException $e){
    print "Error! : ".$e->getMessage()."<br/>";
    die();
}
function DropTable($table, $pdo){
    $sql = "DROP TABLE $table";
    $res = $pdo->query($sql);
}
