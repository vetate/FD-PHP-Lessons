<?PHP

$user = "root";
$password = "";
$db = "###";
$server = "127.0.0.1";

$conn = new mysqli($server, $user, $password, $db);

// Check connection
if ($conn->error) {
    echo "Failed to connect to MySQL: " . $conn->error;
} else {
    echo "connection to DB found"; // put 2 slashes in front of echo if conection is successful
}

?>
