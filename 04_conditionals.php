<?php 
 /* Operators */
 /*
  < Less than
  > Greater than
  <= Less than or equal to (==)
  >= Greater than or equal to (===)
  == Equal to
  === Identical (same type and value)
  !=  Not equal to
  !== Not identical (different types or values)
 */

//  $age = 17;
//  if($age >= 18){
//     echo "You are old enough to vote";
//  }else{
//     echo  "Sorry you're not old enough to vote.";
//  }


// $t= date("H");
// echo $t;

// if($t < 12){
//     echo "Good Morning!";
// }elseif($t < 17){
//     echo "Good Afternoon";
// }else{
//     echo "Good Evening";
// }

$posts =[];
// if(!empty($posts)){
//     echo $posts[0];
// }else{
//     echo  "No Posts Found!";
// }

// echo !empty($posts) ? $posts[0]: "No posts found"; //ternary operator

// $firstPost= !empty($posts) ? $posts[0]: "No posts found";
// echo $firstPost;

// $firstPost= $posts[0] ??  "No posts found!";

// echo $firstPost;

$favColor = "Yellow";
switch($favColor){
    case "Red": 	
        echo "Your favorite color is Red"; 
        break;
    case "Blue": 	
        echo "Your favorite color is Blue"; 
        break;
    case "Red": 	
        echo "Your favorite color is Green"; 
        break;
    default:
        echo "Sorry, your favorite color isn't Red, Blue or Green."; 
        break;

}

?>