<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ajax_users";

$connect = mysqli_connect($host, $user, $pass, $db);

// if($connect){
// echo "success";
// };
// if(isset($_POST));
if($_SERVER['REQUEST_METHOD'] == 'POST'){ //server request checks if there was a post method
// if (isset($_POST['submit'])) {//if u use post it needs a post var with it
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];

    $sql = "INSERT into users values(null, '$f_name', '$l_name', '$email')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "User ". mysqli_insert_id($connect) . " " . $f_name . " added to the database";
    }
    else{
        echo "Error inserting data: ".mysqli_error($connect);
    }
}else{
    echo "Wrong request method";
}
