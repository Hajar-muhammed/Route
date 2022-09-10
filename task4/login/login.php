<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
   

<div class="container w-50">
  <?php
if ( ! empty($_COOKIE['email'] ) && ! empty($_COOKIE['password']) ){
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];

   }
   ?>
<form action="handelLogin.php" method="post" >
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" value="<?php if ( ! empty($_COOKIE['email'] )) echo $_COOKIE['email'];?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password"  value="<?php if ( ! empty($_COOKIE['password'] )) echo sha1($_COOKIE['password'])  ;?>" class="form-control" id="exampleInputPassword1">
  </div>
  <input type="checkbox"  name="remember" >
<label for="remember me button"> remember me</label><br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>

