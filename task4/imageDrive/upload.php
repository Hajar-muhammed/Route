<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Upload</title>
</head>
<body>
   
<!-- name , email ,age, gander -->
 
<div class="container w-50">
 
<?php
 session_start();

 if (! empty($_SESSION['errors'])){
  foreach ( $_SESSION['errors'] AS $error){?>
  <div class="alert alert-danger"> <?php echo $error; ?></div>

 <?php }
      unset($_SESSION['errors']);
 }
 ?>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">file</label>
    <input type="file" name="file" class="form-control" w-50 id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    extract($_POST);
    $errors =[];
    
  $image =$_FILES['file'];
$imgName = $image['name'];
$tmp_name= $image['tmp_name'];
$error = $image['error']; 
$size =$image['size'];
$sizeMb = $size /(1024*1024);

$ext = strtolower( pathinfo($imgName, PATHINFO_EXTENSION));



//validation [error, size <=1mb, extention]
 $errors =[];
$extentions = ['jpg', 'png', 'gif', 'jpeg'];
if(! empty($error)){
$errors []= "image not valid";
}elseif($sizeMb >1){
$errors[] = "image large size";
}elseif ( ! in_array($ext, $extentions)){
    $errors [] = "choose correct image";
}
//check 
if (empty($errors)){
   //rename input
   if ( ! empty($name)){
    $newName = $name.".$ext";
    //store
     move_uploaded_file( $tmp_name, "uploadedimages/$newName" );
   }else
    $newName = uniqid().".$ext";
    //store
     move_uploaded_file( $tmp_name, "uploadedimages/$newName" );
    }
}else{
    $_SESSION['errors'] = $errors;
}
?>