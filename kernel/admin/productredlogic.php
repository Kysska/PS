<?php
   session_start();
   require_once '../connect.php';
   $title = $_POST['title'];
   $price = $_POST['price'];
   $desc = $_POST['desc'];
   $tobe = $_POST['check'];
   $id = $_GET['id'];
   $path =  time().$_FILES['avatar']['name'];
   if($_POST['check'] == 's') $tobe = 0;
   else $tobe = 1;
 
   if(!move_uploaded_file($_FILES['avatar']['tmp_name'],'../imageanimals'.'/'.$path) && isset($_FILES['avatar']['tmp_name'][0])){
      $_SESSION['message'] = 'Ошибка при загрузке сообщения';
      header('Location: product.php');
  }
  else{
   if(isset($_FILES['avatar']['tmp_name'][0])){
      $prepare = $connect->prepare("UPDATE products SET image = '$path' WHERE `id` = ?");
      $prepare->execute([$id]); 
     } 
   $prepare = $connect->prepare("UPDATE products SET title = '$title',description = '$desc', price = '$price', tobe = '$tobe'  WHERE `id` = ?");
   $prepare->execute([$id]);
   $_SESSION['message'] = 'Изменения внесены';
   header('Location: product.php?catid=all');
  }
?>
