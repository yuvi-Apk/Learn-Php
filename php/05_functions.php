<?php
 # Example 1
    function sum($a,$b){ // parameter
        return $a + $b;
    }

  $result=sum(90,40); // arguments

  echo " The Addition Of A and B is:".$result ."<br>";


 # concept of varargs
  echo "concept of varargs";

  function sum2(...$a){
    $add=0;
    foreach($a as $m){
        echo $m ."<br>";
        $add += $m;
    }
    return "The sum of the all alements is".$add;
  }

  
 $result2= sum2(90,40,677,663,6766); // arguments

  echo " The Addition Of A and B is:".$result2."<br>";

?>