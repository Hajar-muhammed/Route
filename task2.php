<?php
//Q1
$x= 15; $y=20; $z=25;
if ($x>=20 && $y > $z && $x > $y-$z){
    echo "true <br>";
}elseif (($x>=20 && $z > $y && $x < $z-$y)) {
    echo "true <br>";
}elseif (($y>=20 && $z > $x && $y < $z-$x)) {
    echo "true <br>";
}elseif (($y>=20 && $x > $z && $y < $x-$z)) {
    echo "true <br>";
}elseif (($z>=20 && $x > $y && $z < $x-$y)) {
    echo "true <br>";
}elseif (($z>=20 && $y > $x && $z < $y-$x)) {
    echo "true <br>";
}else {
    echo "false <br>";
}

echo  "<hr>";

//Q2
$x=10; 
echo octdec("$x");

echo  "<hr>";

//Q3
for ($i=1; $i<100; $i++){
    if ($i%2 != 0){
        echo "$i <br>";
    }
}

echo  "<hr>";

//Q4
$sum = 0;
for ($i=1; $i<100; $i++){
    $count =0;
    for ($j =1; $j<=$i; $j++){
        if ($i % $j ==0){
            $count++;
        } 
    }
    if($count ==2){
        $sum += $i;
    }
    
}
echo $sum;

echo  "<hr>";

//Q5
echo "Divided by 3: <br>";
for($i=1; $i<100; $i++){
    if($i %3==0){
        echo "$i ";
    }
}
echo "<br> Divided by 5: <br>";
for($i=1; $i<100; $i++){
    if($i %5==0){
        echo "$i ";
    }
}
echo "<br> Divided by 3 & 5: <br>";
for($i=1; $i<100; $i++){
    if($i %3==0 && $i %5==0){
        echo "$i ";
    }
}

echo  "<hr>";

//Q6
$count =0;

for($i=1; $i<=4; $i++){
    for($j=1; $j<=4; $j++){
        for($k=1; $k<=4; $k++){
            if ($i != $j && $i != $k && $j != $k){
                echo "$i$j$k <br>";
                $count++;
            }
    
        }
    }
}
echo "The Total Number Of the three-digit-number is $count";
