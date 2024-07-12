<?php 
$colors=[
    1=>'red',
    4=>'green',
    6=>'blue',
    8=>'yellow',
];
echo $colors[4];

$hex=[
    "green"=>"#009966",
    "blue"=>"#000099",
    "yellow"=>"#ffff99"
];
echo $hex["yellow"];

$people=[
    [
        "first_name"=>'John', "last_name"=>'Doe',
        "email"=>"john@gmail.com"
    ],
    [
        "first_name"=>'Jane', "last_name"=>'Doe',
        "email"=>"jane@gmail.com"
    ],
    [
        "first_name"=>'Kebin', "last_name"=>'Doe',
        "email"=>"kebin@gmail.com"
    ],
];
// echo $people[0]["first_name"];
// var_dump(json_encode($people));
?>