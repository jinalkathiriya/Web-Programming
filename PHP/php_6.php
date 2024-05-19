<!-- Write a PHP script to alter student table. For ex: modify sname by
increasing its length. -->

<?php
$connect = mysqli_connect('localhost', 'root', '', 'studentdb');
$query = "alter table student modify fname varchar(25)";
$result = mysqli_query($connect, $query);
if ($result) {
    echo "column modified
successfully";
} else {
    echo "error in modifing
column";
}
?>