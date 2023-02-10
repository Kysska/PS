<?php
   session_start();
   require_once './connect.php';
   $full_name = $_POST['full_name'];
   $login = $_POST['login'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $address = $_POST['address'];
   $phone = $_POST['number'];
   $id = $_SESSION['user']['id'];
   $path = 'avatar/'. time().$_FILES['avatar']['name'];
   if(!move_uploaded_file($_FILES['avatar']['tmp_name'],'../'.$path) && isset($_FILES['avatar']['tmp_name'][0])){
    $_SESSION['message'] = 'Ошибка при загрузке фотографии';
    header('Location: red.php');
   } 
   else{
   if(isset($_FILES['avatar']['tmp_name'][0])){
    $prepare = $connect->prepare("UPDATE users SET  avatar = ?  WHERE `id` = ?");
    $prepare->execute([$path, $id]); 
    $_SESSION['user']['avatar'] = $path;
   }
   $prepare = $connect->prepare("UPDATE users SET full_name = ?, login = ?, address = ?, phone_number = ?  WHERE `id` = ?");
   $prepare->execute([$full_name, $login, $address, $phone, $id]); 
   $_SESSION['user']['full_name'] = $full_name;
   $_SESSION['user']['login'] = $login;
   $_SESSION['user']['address'] = $address;
   $_SESSION['user']['phone'] = $phone;
   if(isset($password) && $password !== ''){
    $password = password_hash($password, PASSWORD_BCRYPT);   
    $prepare = $connect->prepare("UPDATE users SET password = ?  WHERE `id` = ?");
    $prepare->execute([$password, $id]); 
    $_SESSION['user']['password'] = $password;
   }
   $_SESSION['message'] = 'Информация изменена';
    header("Refresh:0; url=red.php");
   }
?>
