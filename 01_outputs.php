<?php 
//  echo "Hello World!3"
//print_r() use for print single values & array
// print_r([1,2,3]);

//var_dump() return more info like data type & length
// var_dump("Hello");
// var_dump(true);

//var_export () similar to var_dump but outputs a string representation of a variable.
var_export("Hello");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Hello World!";?></h1>
    <!-- Short hand we can also use like that -->
    <h1><?= "Hello World!";?></h1>
</body>
</html>