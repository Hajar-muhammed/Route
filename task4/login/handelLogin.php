<?php
if(isset($_POST['submit'])){
   extract($_POST);
   if(isset($_POST['remember'])){
    
    setcookie("password", $password);
    setcookie("email", $email);
    echo "Cookies set Successfuly";

    }else{
        echo "Coockies not set";
    }
} else {
    header("location:login.php");
}
