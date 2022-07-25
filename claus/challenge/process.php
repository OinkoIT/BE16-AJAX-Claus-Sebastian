<?php

$conn=mysqli_connect('localhost','root','','ajaxTest');

if(isset($_POST['fname'])&&$_POST['lname']&&$_POST['email']){
   $fname=mysqli_real_escape_string($conn,$_POST['fname']);
   $lname=mysqli_real_escape_string($conn,$_POST['lname']);
   $email=mysqli_real_escape_string($conn,$_POST['email']);

   $query="INSERT INTO users(fname,lname,email) VALUES ('$fname','$lname', '$email')";

   if(mysqli_query($conn,$query)){
       echo "user added";
   }else{
       echo mysqli_error($conn);
   }
};
?>