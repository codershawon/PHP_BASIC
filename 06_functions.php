<?php
//Normal Function
function sum($n1, $n2){
    return $n1 + $n2;
}
$number=sum(10,20);
// echo $number;

//Arrow Function
$multiply= fn($n1,$n2)=> $n1 * $n2;
// echo $multiply(5,3);

?>