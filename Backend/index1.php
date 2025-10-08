<?php 
$servername = "localhost:3306";
$username = "root";
$password = ""; 
$dbname = "stayfinder";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $a = $_POST['t1'];
    $b = $_POST['t2'];
    $sql = "INSERT INTO login (username,password) VALUES ('$a', '$b')";

    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
?>
