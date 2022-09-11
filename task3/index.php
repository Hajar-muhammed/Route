<?php
//Q1
function  factorial($x){
    $fact =1;
    for($i=1; $i<=$x; $i++){
        $fact *= $i;
    }
    return $fact;
}
$x = 5;
echo factorial($x);

echo"<hr>";

//Q2
function ArraySort ($x){
    $length = count($x);
for ($i=0; $i<$length; $i++){
    for($j=$i+1; $j<$length; $j++){
        if($x[$i]>$x[$j]){
            $t=$x[$j];
            $x[$j]=$x[$i];
            $x[$i]=$t;
        
        }
    }
    
}
return $x;
}
$x = [8, 93, 10, 14, 54, 2, 7, 30, 74, 34, 120];
$X = ArraySort($x);
$length = count($x);
for ($i=0; $i<$length; $i++){
echo "$X[$i]   ";
}

echo"<hr>";

//Q3
function palindrome ($string){
    $string = strtolower($string);
    $palindrome = true;
    $length = strlen($string);
    for($i=0; $i< $length/2; $i++){
        if ($string[$i] != $string[$length-$i-1]){
            $palindrome=false;
            break;
        }
    }
    if($palindrome){
        echo "Given string is palindrome <br>";
    }else{
       echo "Given string is not a palindrome <br>";
    }
}
$s = 'SAMMaS';
palindrome($s);
$st= 'ABCd';
palindrome($st);

echo"<hr>";

//Q5
$nums = [4, 7, 5];
[$x, $y, $z]= $nums;
echo " $x  $y  $z";
echo"<hr>";

//Q6
$userData = [
    'name' => 'Ahmed',
    'job' => 'backend',
    'language' => 'php',
    'framework' => 'laravel',
];
["name" => $name, "job" => $job, "language" => $language, "framework" => $framework] = $userData;
echo " $name $job $language $framework";

echo "<hr>";

//Q7
function getPriceWithDiscount( $price){
    if($price >1000){
        $price -= $price*0.1;
    }elseif($price <1000){
        $price -= $price *0.05;
    }
    return $price;
}
$price = 1200;
echo getPriceWithDiscount($price)."  "; 
$price = 500;
echo getPriceWithDiscount($price)."  "; 
