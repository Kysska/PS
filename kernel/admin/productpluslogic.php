<?php
   session_start();
   require_once '../connect.php';
   $title = $_POST['title'];
   $cat = $_POST['cat'];
   $prepare1 = $connect->prepare("SELECT * FROM categorys WHERE `cat_id` = ?");
   $prepare1->execute([$cat]);
   $row1 = $prepare1->fetch(PDO::FETCH_ASSOC);
   $price = $_POST['price'];
   $desc = $_POST['desc'];
   $tobe = isset($_POST['check']) ? 1 : 0;
   $path =  time().$_FILES['avatar']['name'];
  if(!move_uploaded_file($_FILES['avatar']['tmp_name'],'../imageanimals'.'/'.$path) && isset($_FILES['avatar']['tmp_name'][0])){
        $_SESSION['message'] = 'Ошибка при загрузке сообщения';
        header('Location: productplus.php');
    }
    else{ 
   $prepare = $connect->prepare("INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `category`, `tobe`) VALUES (NULL, ?, ?, ?, ?, ?, ?)");
   $prepare->execute([$title, $desc, $price, $path,$row1['name'],$tobe]);
   $_SESSION['message'] = "Товар добавлен!";
   header('Location: productplus.php');
    }
?>
