<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-color:gray;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}


</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT roll, fullname,series,cgpa,phone FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>roll</th><th>fullname</th><th>series</th><th>cgpa</th><th>phone</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["roll"]. "</td><td>" . $row["fullname"]."</td> <td>" .$row["series"]. "</td><td>" .$row["cgpa"]."</td><td>" .$row["phone"]."</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>