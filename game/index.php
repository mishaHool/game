<?php
    session_start();
    include('back.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <pre><?=var_dump($_SESSION)?></pre>
    <h1><?php echo $_SESSION['info'] ?></h1>
    <?php
        if($_SESSION['info'] == 'NewG'){
            ?>
             <form action="/game/index.php" method="post">
             <input type="submit" value="new game" name="newGame">             
             </form>
             <?php
                }else{
                    ?>
        <div class="imgs">
    <div class="img-left">
    <div class="name">ВЫ</div>
    <div class="hp"><?=$playerhp?></div>
    </div>
    <div class="img-right">
    <div class="name">СИСТЕМА</div>
    <div class="hp ntc"><?=$syshp?></div>
    </div>
    </div>
    <form action="/game/index.php" method="post">
    <input type="submit" value="KICK" name="kick">
    <input type="submit" value="reset" name="reset">
    <?php
    if($playerhp <= 0){
        echo 'SYSTEM WINS!';
    }
    if($syshp <= 0){
        echo 'YOU WINS!';
    }
    ?>
    </form>
                <?php } ?>
 
</body>
</html>