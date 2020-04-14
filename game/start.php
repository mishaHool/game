<?php
include('db.php');
function start(&$pdo){
    var_dump($pdo);
    // createUsersTable($pdo);
    // createExampleUsers($pdo);
    tst($pdo);
}
function createExampleUsers($pdo){
    try{
        $username = 'barantus';
        $passwrd = md5('12345');
        $hp = 20;
        $sql = "INSERT INTO `users` (`username`, `hp`, `password`) VALUES (?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$username, $hp, $passwrd]);
        print 'qwertyuiopasdfghjklzxcvbnm';
    }catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
function tst(&$pdo){
    $sql = "CREATE TABLE employees (
        user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        username VARCHAR(30) NOT NULL,
        hp VARCHAR(30) NOT NULL,
        password VARCHAR(50),
        )";
        // use exec() because no results are returned
        $pdo->exec($sql);
    }
start($pdo);