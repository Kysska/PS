<?php
    session_start();
    require_once 'connect.php';
    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone_number = $_POST['number'];
    $password_confirm = $_POST['password_confirm'];
    $avatar = "../imageanimals/avatar.png";

    $res = $connect->prepare("SELECT * FROM `users` WHERE `email` = ?");
    $res->execute([$email]);
    if($res->rowCount() > 0){
        $_SESSION['message'] = "Email уже был использован";
        header('Location:../singup.php');
        die();
    }
    $res = $connect->prepare("SELECT * FROM `users` WHERE `login` = ?");
    $res->execute([$login]);
    if($res->rowCount() > 0){
        $_SESSION['message'] = "Login уже был использован";
        header('Location:../singup.php');
        die();
    }
    
    if($password === $password_confirm){
        $path = 'avatar/' .time() .$_FILES['avatar']['name'];
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'.$path) && isset($_FILES['avatar']['tmp_name'][0])){
            $_SESSION['message'] = 'Ошибка при загрузке изображения';
            header('Location: ../singup.php');
        }
       $password = password_hash($password, PASSWORD_BCRYPT);
       $query=$connect->prepare("INSERT INTO `users` (`id`, `full_name`, `login`, `address`, `phone_number`, `email`, `password`) VALUES (NULL, ?, ?, ?, ?, ?, ?)");
       $query->execute([$full_name, $login, $address, $phone_number, $email, $password]);
       if(isset($_FILES['avatar']['tmp_name'][0])){
        $prepare = $connect->prepare("INSERT INTO users (avatar) VALUES (?) WHERE `id` = ?");
        $prepare->execute([$path, $id]); 
       }
       else{
        $path = 'avatar/defolt.jpg';
        $prepare = $connect->prepare("INSERT INTO users (avatar) VALUES (?) WHERE `id` = ?");
        $prepare->execute([$path, $id]); 
       }
       $_SESSION['message'] = "Регистрация прошла успешно!";
       header('Location:../login.php');
    }
    else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location:../singup.php');
    }
?>