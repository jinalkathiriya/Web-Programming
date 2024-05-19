<!-- Write a PHP script to create a table student in the database StudentDB. -->

<?php
$connect = mysqli_connect('localhost', 'root', '', 'studentdb');
$query = "create table student(Enrollment_no int(20) primary key,fname varchar(20),lname
varchar(20),Branch varchar(15),Contact_No int(10))";
$result = mysqli_query($connect, $query);
print("Table created");
?>