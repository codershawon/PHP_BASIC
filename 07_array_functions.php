<?php 
$fruits=["apple","banana","orange"];
//Search Array
// var_dump(in_array("banana", $fruits));


//Add to array
$fruits[]="grape";
array_push($fruits,"kiwi","mango");
array_unshift($fruits, "cherry");

//Remove from array
// array_pop($fruits);
// array_shift($fruits);

//Split into 2 chunks
// $chunked_array= array_chunk($fruits, 2);
// print_r($chunked_array);

// print_r($fruits);

$arr1= [1,2,3];
$arr2= [4,5,6];
$arr3=array_merge($arr1,$arr2);

$arr4=[...$arr3, ...$arr2];
// print_r($arr3);
print_r($arr4);

//Array Combine
$a=["apple","banana","orange"];
$b=["grape","kiwi","mango"];
$c=array_combine($a,$b);
print_r($c);

$keys=array_keys($c);
// print_r($keys);

$flipped= array_flip($c);
// print_r($flipped);

$numbers= range(1, 10);
$newNumbers= array_map(function ($num){return $num * 2;},$numbers);
// print_r($newNumbers);

$lessThan10= array_filter($numbers, fn($number)=> $number < 10);

// print_r($lessThan10);

$sum=array_reduce($numbers, fn($carry, $number)=> $carry + $number);
var_dump($sum);
?>