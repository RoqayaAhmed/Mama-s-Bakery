<?php
require 'conn.php';
global $conn;

if(isset($_POST['submit'])) {
    if(isset($_POST['name']) && !empty($_POST['name']))
    $user_name=$_POST['name'];
    else
    echo "please enter your name";
    if(isset($_POST['email']) && !empty($_POST['email']))
    $email=$_POST['email'];
    else
    echo "please enter your email";

    if(isset($_POST['pass']) && !empty($_POST['pass']))
    $user_pass=$_POST['pass'];
    else
        echo "please enter your password";
}

if (!empty($email)&&!empty($user_name)&&!empty($user_pass)){
$query = "INSERT INTO `user`( `Name`, `Email`, `Password`) VALUES ('$user_name','$email','$user_pass');";
$runquery = mysqli_query($conn , $query);}
?>
