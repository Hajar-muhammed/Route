
<?php
function getPriceWithDiscount( $price){
    if ( $price >1000 ) {
        $price *= 1.1;
    }elseif ($price <1000) {
        $price *= 1.05;
    }
    return $price;
}
if( isset( $_POST['submit'] ) ) {
    extract($_POST);
    //rules - errors
    //valdation
    //name (required - string- length 5>255)
    $errors =[];
    if ( empty($name ) ) {
        $errors[]="name is required";
    }elseif ( is_numeric($name) ) {
        $errors []= "name must be string";
    }elseif ( strlen($name)<5 || strlen($name)>255 ) {
      $errors[]="name must be betweem 5 and 255";
    
   }

//description (required - email)
if ( is_numeric($description) ) {
    $errors []= "description must be string";
}
//price (requierd - number > =0)
if (empty($price) ) {
    $errors[]="price is required";
}elseif ( ! is_numeric($price) ) {
    $errors[]="price must be integer";
}elseif ($price <0) {
    $errors[]="price must be more than 0";
}
}
if ( ! empty($errors) ) { 
    echo"errors : <br>";
  $length = count($errors);
  for ( $i=0; $i < $length; $i++) {
    echo $i+1 ." - $errors[$i] <br>";
  }
}else{
    echo "Product name is : $name <br>";
    if( ! empty ( $description ) ){
        echo "description: $description <br> ";
    } 
    echo "Price after discount: ". getPriceWithDiscount($price);
}