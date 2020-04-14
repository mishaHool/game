<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!empty($_GET['result'])){
        echo "<div id='res'>result: ".$_GET['result']."</div>";
    }?>
    <form action="result.php" method="POST">
        <input type="text" id="inp" name="val">
        <input type="submit" value="result">
    </form>
</body>
</html>