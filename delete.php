<?php


echo $id = $_GET['id'];

require 'conn.php';
global $conn;

$query = "DELETE FROM products WHERE id = '$id' ;";
$runQuery = mysqli_query($conn , $query);

if ($runQuery) {
    # code...
    
    header('location: option.html');
}else{
    echo "not working";
}





?>