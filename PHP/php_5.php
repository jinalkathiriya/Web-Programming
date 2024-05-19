<!-- Write a PHP script to insert a row into the table student. The values to
be inserted are taken from a HTML page. -->

<!-- Form HTML & PHP code: -->

<?php
include('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $s1 = $_POST['enroll'];
    $s2 = $_POST['fname'];
    $s3 = $_POST['lname'];
    $s4 = $_POST['branch'];
    $s5 = $_POST['cn'];
    if (!empty($s1)) {
        $insert = "insert into student values('$s1','$s2','$s3','$s4','$s5')";
        $result = mysqli_query($connect, $insert);
        echo
        "<script type='text/javascript'> alert('success') </script>";
    } else {
        echo "<script
type='text/javascript'> alert('fail') </script>";
    }
}
?>
<html>

<head>
    <title>form</title>
</head>

<body>
    <form method="post">
        Enrollment_no:<input type="text" name="enroll"><br><br>
        First Name:<input type="text" name="fname"><br><br>
        Last Name:<input type="text" name="lname"><br><br>
        <label>Branch</label>
        <select name="branch" id="branch">
            <option value="comp">Computer</option>
            <option value="ec">EC</option>
            <option value="civil">Civil</option>
            <option value="mech">Mechanical</option>
        </select>
        <br><br>
        Contact_No:<input type="text" name="cn" pattern="[0-9]{10}"><br><br>
        <input type="submit"><br><br>
        <input type="reset" value="Reset"><br>
    </form>
</body>

</html>

<!-- Connection.php -->

<?php
error_reporting(0);
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'studentdb');
?>