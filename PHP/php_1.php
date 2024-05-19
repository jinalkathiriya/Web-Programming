<!-- Write a PHP script to create a database StudentDB. -->

<?php
$connect = mysqli_connect('localhost', 'root', '');
$query = "create database StudentDB";
$result = mysqli_query($connect, $query);
if ($result) {
    echo "Create Database successfully";
} else {
    echo "Error occur";
}
?>