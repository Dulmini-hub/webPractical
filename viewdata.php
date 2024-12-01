<?php
// Database connection details
$servername = "localhost";
$username = "root";  // Replace with your database username
$password = "";  // Replace with your database password
$dbname = "testdb";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    $table="<table border='1'>
    <tr>
    <th>Id</th>
    <th>First Nmae</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone No</th>
    <th>Comment</th>
    <th>Delete</th>
    </tr>
    ";

    while($row = mysqli_fetch_assoc($result)){
        $table.="
        <tr>
    <th>".$row['id']."</th>
    <th>".$row['firstname']."</th>
    <th>".$row['lastname']."</th>
    <th>".$row['email']."</th>
    <th>".$row['phone']."</th>
    <th>".$row['comment']."</th>
    <td> <a href = '#'>Delete</a></td>
    </tr>";
    }

} else {
    $table.= "0 reasult";
}

echo $table;
mysqli_close($conn);
?>