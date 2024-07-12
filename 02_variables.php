<?php
/*-----------PHP Data Types------------*/
/*
- String=> Series of characters surrounded by the quotes
- Integer=> Whole Numbers
- Float=> Decimal Numbers
- Boolean=> True or False
- Array=> Special Variable which can hold a series of values
- Object=> Special variable which holds an instance of a class
- Null=> A special value that indicates no value
- Resources=> Special variables used to store information about external resources such as files, databases and network connections

*/

/*---------Variables Rules---------*/
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables can't start with a number
- Variables can only contain alpha-numeric characters and the underscore character(A-z, 0-9,_)
- Variable are case sensitive ($name and $NAME is different variables)
*/

$name = "John"; //String
$age =  30; //Integer
$has_kids = false; //Boolean
$height = 180.5; //Float

var_dump($height);

// echo $name . ' is ' . $age . ' years old';
// echo "${name} is ${age} years old";
$x = "5" + "5";
// var_dump($x);

define('HOST', 'localhost');

echo HOST;
?>