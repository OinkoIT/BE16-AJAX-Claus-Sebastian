<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ajax_users";

$connect = mysqli_connect($host, $user, $pass, $db);

if (isset($_GET['display'])) {
    $sql = "SELECT * from users";
    $result = mysqli_query($connect, $sql);
    echo json_encode($users = mysqli_fetch_all($result, MYSQLI_ASSOC));    
} 
else {
    echo "Error";
}