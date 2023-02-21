<?php
session_start();
require 'conn.php';
global $conn;

if(isset($_POST['login'])) {
    if(isset($_POST['uname']) && !empty($_POST['uname']))
    $name=$_POST['uname'];
    else
    echo "please enter your name";

    if(isset($_POST['pass']) && !empty($_POST['pass']))
        $pass=$_POST['pass'];
    else
        echo "please enter your password";
}

if (!empty($name)&&!empty($pass)){
$query = "SELECT * FROM admin WHERE name = '$name' AND password = '$pass'";
$runquery = mysqli_query($conn , $query);
$rows = mysqli_num_rows($runquery);

if($rows>0){
     $_SESSION['admin']=$name;
    header('location:option.html');}
else echo "incorrect user name or password";
}
?>