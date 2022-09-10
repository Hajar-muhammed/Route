<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      .card {
        float: left;
      }
    </style>
    <title>Document</title>
</head>
<body>
  <?php
  session_start();
  $products=['oil', 'cheese', 'bread', 'ketchap'];
  $length = count($products);
  for ($i=0; $i<$length; $i++){
    $name = $products[$i];
    
    ?>
   <div class="card" style="width: 18rem;">
  <img src="images/<?php echo $name?>.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $name?></h5>
    <p class="card-text">30 LE</p>
    <a href="products.php?<?php echo $i ?> " class="btn btn-primary">add to cart</a>
  </div>
<?php
  }
  $selected=[];
 
$file = fopen('selected.txt', 'a');
   for ($i=0; $i<$length; $i++){
   
    if($_SERVER['QUERY_STRING'] == $i){

      fwrite($file, "$products[$i]\n");
    
  }}
fclose($file);
$file = fopen('selected.txt', 'r');

while( $line = fgets($file)){
  $selected[]= $line;
   }
   fclose($file);

   $_SESSION['cart'] =$selected;


  ?>

</div>
</body>
</html>


