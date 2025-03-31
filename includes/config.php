<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "uninotify");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>