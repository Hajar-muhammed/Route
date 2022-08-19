<?php
// Q1
echo "Hello <br>";
$firstName = "Ahmed" ; 
$lastName = "Ali" ;
echo "$firstName $lastName";
echo "<br> <br><br>";


//Q2
//a
$x= 5; $y= 8; $z=6;
echo -$x+$y*$z ."<br>";
//b
$x=55; $y=9;
echo ($x+$y)%$y."<br>";
//c
$x = 20 ; $y= 3 ; $z=5; $k= 8;
$result =  $x - ($y*$z)/$k;
echo ceil($result)."<br>"; 
//d
$x = 5 ; $y= 3 ; $z=2; $k= 8;
echo $x +(($x*3)/3)*$z-$k %$y;
echo "<br> <br><br>";

//Q3
$x = 25.5;  $y=3.5; $z=40.5; $k= 4.5;
$result = ($x*$y- $y**2)/($z-$k);
echo $result ;
echo "<br> <br><br>";


//Q4
$hexMessage= '596f7520636f6e76657274656420697420636f72726563746c7921';
echo hex2bin($hexMessage) ;
echo "<br> <br><br>";


//Q5
$htmlContent = "<h1>PHP track</h1><p>PHP is an interpreted language</p>";
echo  strip_tags($htmlContent) ;
echo "<br> <br><br>";

//Q6
$username = " Ahmed    Muhammad  ";
echo stripslashes ($username);
echo "<br> <br><br>";


//Q7
$num = 15023198.91;
echo number_format($num ,2);