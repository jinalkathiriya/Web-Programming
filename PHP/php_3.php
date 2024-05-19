<!-- Write a PHP script to list all the tables available in a particular
database. -->

<?php
$connect = mysqli_connect('localhost', 'root', '', 'studentdb');
$query = "show tables";
$result = mysqli_query($connect, $query);
while ($i = mysqli_fetch_array($result))
    print($i[0] . "<br>");
?>