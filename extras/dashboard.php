<?php
session_start();
if(isset($_SESSION['username'])){
    echo "<h1>Welcome " . $_SESSION["username"] . "</h1>";
    echo '<a href="logout.php">Logout</a>';
}else{
    echo "<h1>You are not logged in.</h1>";
    echo "<a href='/php-crash/13_sessions.php'>Click here to login</a>";
}
?>