<!-- Write a PHP script to list all the records
in the student table in tabular format. -->
<?php
$connect = mysqli_connect('localhost', 'root', '', 'studentdb');
$query = "select * from student";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    echo "<table
border='1'>
<tr>
<th>Enrollment_No</th>
<th>First Name</th>
<th>Last Name</th>
<th>Branch</th>
<th>Contact_No</th>
</tr>";
    while ($data =
        mysqli_fetch_assoc($result)
    ) {
        echo "<tr>
<td>" . $data['Enrollment_no'] . "</td>
<td>" . $data['fname'] . "</td>
<td>" . $data['lname'] . "</td>
<td>" . $data['Branch'] . "</td>
<td>" . $data['Contact_No'] . "</td>
</tr>";
    }
    echo "</table>";
} else {
    echo "No
records found";
}
?>