<?php
phpinfo();

$servername = "db";
$username = "app_user";
$password = "app_password";
$dbname = "app_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM test_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Data from MySQL:</h2>";
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>