
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['firstname'])) 
{ 
    $fisrtname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
} 


$sql ="INSERT INTO testtable (firstname, lastname) VALUES ('".$fisrtname."', '".$lastname."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
?>