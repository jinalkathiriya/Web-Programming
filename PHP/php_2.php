<!-- Write a PHP script to list all the databases available in mysql. -->

<?php
$connect = mysqli_connect('localhost', 'root', '');
$query = "show databases";
$result = mysqli_query($connect, $query);
while ($i = mysqli_fetch_array($result))
    print($i[0] . "<br>");
?>