<?php
if(strpos($_SERVER['REQUEST_URI'],"DB.php")){
    require_once 'Utils.php';
    PlainDie();
}

$conn = new mysqli("localhost", "plexusc2_lieshooter", "***", "plexusc2_lieshooter");
if($conn->connect_error != null){
    die($conn->connect_error);
}