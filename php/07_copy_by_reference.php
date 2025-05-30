<?php

# function can't return more that one value

echo "Call by reference or copy by references <br>";
function display(&$a,&$b){
    $a=$a+100;
    $b=$b+20;
}

$a=43; 
$b=80;
display($a,$b);

echo $a." ".$b;

?>