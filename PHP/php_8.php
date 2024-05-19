<!-- Write a PHP script to delete all rows from
student table whose roll numbers are between 1
and 3. -->

<?php
$connect = mysqli_connect('localhost', 'root', '', 'studentdb');
$query = "delete from student where Enrollment_No between 1 and 3";
$result = mysqli_query(
    $connect,
    $query
);
if ($result) {
    echo "Delete data
uccessfully";
} else {
    echo
    "error occur";
}
?>