<?php
   session_start();
   require_once 'connect.php';
   $login = $_POST['login'];
   $password = $_POST['password'];
   $check_user = $connect->prepare("SELECT * FROM users WHERE (`login` = :login OR `email` = :login)");
$check_user->bindValue(':login', $login);
$check_user->execute();
$user = $check_user->fetch(PDO::FETCH_ASSOC);
if(password_verify($password, $user['password'])){
   $_SESSION['user'] = [
      "id" => $user['id'],
      "login" => $user['login'],
      "address" => $user['address'],
      "phone" => $user['phone_number'],
      "full_name" => $user['full_name'],
      "email" => $user['email'], 
      "avatar" => $user['avatar'],
      "admin" => $user['admin']
    ];
    header('Location: ../personal_account.php');
}
else{
  $_SESSION['message'] = "Неверный логин или пароль";
  header('Location: ../login.php');
}
?>
