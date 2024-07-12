<?php
/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/
$file="extras/users.txt";
if(file_exists("extras/users.txt")){
    // echo readfile($file);
    $handle=fopen($file, "r");
    $contents=fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
}else{
    $handle=fopen($file,"w");
    $contents="Shawon" . PHP_EOL . "Rafi" . PHP_EOL . "Ranvir";
    fwrite($handle, $contents);
    fclose($handle);
}
?>