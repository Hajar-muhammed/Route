<?php

if ( isset($_GET['submit'] ) ) {

    extract($_GET);
    switch ($op) {
        case 'sum':
           $result= $x + $y;
            break;
        case 'sub':
             $result = $x - $y;
             break;
         case 'multi':
            $result = $x * $y;
            break; 
        case 'div':
            $result = $x / $y;
            break;    
        
        default:
            $result = "choose corect operation";
            break;
    }
    header("location: calculate.php?result=$result"); 
}else{
    header("location: calculate.php"); 
}

