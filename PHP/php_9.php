<!-- Write a PHP script to drop the table student and drop the database
StudentDB. -->

<!-- Drop table: -->

<?php
$connect = mysqli_connect('localhost', 'root', '', 'studentdb');
$query = "drop table student";
$result = mysqli_query(
    $connect,
    $query
);
if ($result) {
    echo "table deleted
successfully";
} else {
    echo
    "error occur";
}
?>

<!-- Drop database : -->

<?php
$connect = mysqli_connect('localhost', 'root', '', 'studentdb');
$query = "drop database studentdb";
$result = mysqli_query($connect, $query);
if ($result) {
    echo "Database deleted successfully";
} else {
    echo
    "error occur";
}
?>