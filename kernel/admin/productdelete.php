<?php
require_once '../connect.php';
$id = $_POST['id_prod'];//получаем id
session_start(); //стартуем сессию
$prepare = $connect->prepare("DELETE FROM products WHERE `id` = ?");
$prepare->execute([$id]);
?>