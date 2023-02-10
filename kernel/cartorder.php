<?php
   session_start();
   require_once './connect.php';
   $user_id = $_SESSION['user']['id'];
   $date = date('Y-m-d');
   $time = date('H:i:s');
   foreach($_SESSION['cart'] as $id => $item):
    $prepare = $connect->prepare("SELECT * FROM products WHERE `id` = ?");
    $prepare->execute([$id]);
    $product = $prepare->fetch(PDO::FETCH_ASSOC); 
   $prepare1 = $connect->prepare("INSERT INTO `orders` (`id`, `product`, `product_id`, `price`, `quantity`, `user_id`, `date`, `time`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)");
   $prepare1->execute([$product['title'], $product['id'], $product['price'], $item, $user_id, $date, $time]);
   endforeach;
   $_SESSION['message'] = "Заказ отправлен на обработку! Информацию о заказах вы можете посмотреть на страницу профиля.";
   unset($_SESSION['cart']);
   header('Location: ../cart.php');
?>
