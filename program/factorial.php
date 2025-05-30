<?php

# retuen by value

function factorial($n){
    $f=1;

    while($n !=0){
        $f *=$n;
        $n--;
    }
    return $f;
}

$result = factorial(20);
echo "The factorial of the given number is".$result;
?>