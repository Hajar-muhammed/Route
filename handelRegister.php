<?php 
session_start();
if(isset($_POST['submit'])){
    extract($_POST);

    //validation
    //name (required - string- length 5>50)
    $errors =[];
    if (empty($name)){
        $errors[]="name is required";
    }elseif(is_numeric($name)){
        $errors []= "name must be string";
    }elseif(strlen($name)<5 || strlen($name)>50){
      $errors[]="name must be betweem 5 and 50";
    }elseif(!($name ==ucfirst($name))){
        $errors[]="name must have upper name first";
    }
    //email (required - email)
    if (empty($email)){
        $errors[]="email is requierd";
    }elseif(! filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[]="enter validate email";
    }
    //password (reqired)
    if (empty($password)){
        $errors[]="password is requierd";
    }
    //phone (numeric, =11)
    if( ! is_numeric($phone)){
        $errors []= "phone must be integer";
    }elseif( mb_strlen($phone) != 11){
        $errors []= "phone must be 11 digit ";
    }
     
    
    if (empty($errors)){
        $users =[
            
               'name' => $name ,
               'email' => $email,
               'password' => $password,
               'phone' => $phone,
               'address' => $address
            
        ];
        (isset($_SESSION['users']) && in_array($arr,$_SESSION['users']))? 'found' :  $_SESSION['users'] []= $users;
     
        header("location:login.php");
     }else{
         $_SESSION['errors'] = $errors;
        
         header("location:signup.php");
     }
  }

  