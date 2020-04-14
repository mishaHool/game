<?php
$host = 'localhost';
$usname = 'Mishanya';
$pass = 'cocosderty';
$table = 'users';
try{
$pdo = new PDO(
    "mysql:host=$host;dbname=test",
    $usname,
    $pass,
);
}catch(PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
    try{
        $sql = <<<EOSQL
            CREATE TABLE IF NOT EXISTS users (
                user_id     INT AUTO_INCREMENT   PRIMARY KEY,
                username    VARCHAR (100)        NOT NULL,
                hp          INT (10)             DEFAULT NULL,
                password    VARCHAR (100)        NOT NULL,
            );
    EOSQL;
        $pdo ->exec($sql);
        var_dump($pdo);
    }catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

function getHp($user_iD, $pdo){
    $sql = "SELECT `hp` FROM `users` WHERE $user_iD";
    $res = $pdo->query("SELECT `hp` FROM `users` WHERE `user_id` = $user_iD");
    $l_records = $res->fetch(PDO::FETCH_ASSOC);
    return $l_records['hp'];
}
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
