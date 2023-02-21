<?php
require 'conn.php';
global $conn;
session_start();


if(isset($_POST['login'])) {
    if(isset($_POST['name']) && !empty($_POST['name']))
    $username=$_POST['name'];
    else
    echo "please enter your name";

    if(isset($_POST['pass']) && !empty($_POST['pass']))
        $pass=$_POST['pass'];
    else
        echo "please enter your password";
}

if (!empty($username)&&!empty($pass)){
$query = "SELECT * FROM user WHERE Name = '$username' AND Password = '$pass'";
$runquery = mysqli_query($conn , $query);
$rows = mysqli_num_rows($runquery);

if($rows>0)
{
    header('location:receipt.php');
    $_SESSION['username'] = $username;
    
}
else{
    echo "invalid email or password";
}
}
?>