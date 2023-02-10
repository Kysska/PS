<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
<img src="../<?= $_SESSION['user']['avatar']?>" class="rounded-circle" style="width: 150px;"
  alt="Avatar" />

    <form action="">
        <h2><?= $_SESSION['user']['full_name']?></h2>
        <p class = "p_prof"><?= $_SESSION['user']['login']?></p>
        <p class = "p_prof"><?= $_SESSION['user']['email']?></p>
        <a href="./logout.php" class="btn">Выход</a>
        <a href="../index.php" class="btn">Главная страница</a>
    </form>
    <p>Вам доступны такие возможности:</p>
            
            <br/>
            
            <ul>
                <li><a href="./admin/product.php">Управление товарами</a></li>
                <li><a href="/admin/order.php">Управление заказами</a></li> 
                <li><a href="/admin/order.php">История заказов</a></li> 
            </ul>
</body>
</html>