<?php
session_start();
$selected = $_SESSION['cart'];
$length = count($selected);
echo "products in your cart: <br>";
for ($i=0; $i<$length; $i++){
    echo "$selected[$i] <br>";

} 
$file = fopen('selected.txt', 'w');
fwrite($file, "");
fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </style>
    <title>Document</title>
</head>
<body>
 <a href="products.php" class="btn btn-primary">back to products page</a> 


</body>
</html>
