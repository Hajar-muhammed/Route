<?php
session_start();
if(isset ($_POST['submit'])){
    extract($_POST);
    $emailColumn = array_column($_SESSION['users'], 'email');
    $keyEmail = array_search($email, $emailColumn);
    if($email == $_SESSION['users'][$keyEmail]['email'] && $password == $_SESSION['users'][$keyEmail]['password'] ){
        if(isset($_POST['remember'])){
    
            setcookie("password", $password);
            setcookie("email", $email);
            $cookie = "Cookies set Successfuly";
            $_SESSION['cookie'] = $cookie;
        }
            header("location:index.php");
            
        }else{
            $wrong ="Wrong email or password";
            $_SESSION['wrong']= $wrong;
            header("location:login.php");
        }
}