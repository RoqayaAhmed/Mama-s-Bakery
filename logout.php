<?php
require 'conn.php';
global $conn;

session_start();
session_unset();
header("location:login.html");

?>