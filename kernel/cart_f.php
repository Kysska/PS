<?php
    session_start();
    $id = $_POST['id_tov'];
    $col = $_POST['col_tov'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'][$id] = $col;
        $_SESSION['total_count'] = $col;
    } else {
        $_SESSION['cart'][$id]+=$col;
        $_SESSION['total_count'] += $col;
    }
    
?>