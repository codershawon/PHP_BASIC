<?php 
/* For Loops */
// for($x=0;$x<=10;$x++){
//     echo "The number is $x <br>";
// }

/* while Loops */
// $x = 0;
// while($x <= 10){
//     echo "The number is $x <br>";
//     $x++;
// }

/* do While Loop */
/* do..while loop will always execute the block of code once, even if the condition is false. */
// $x = 6;
// do{
//     echo "The number is $x <br>";
//     $x++;
// }while($x<=5);

/* Foreach Loop */
// $posts =["First Post", "Second Post", "Third Post"];
// foreach ($posts as $index=>$post){
//     echo $index + 1 . "-" .$post . "<br>";
// }

$person=[
    "first_name"=> "John",
    "last_name"=> "Doe",
    "email"=>"johndoe@gmail.com",
];
foreach ($person as $key => $value){
    echo $key . " - " . $value . "<br>";
}
?>