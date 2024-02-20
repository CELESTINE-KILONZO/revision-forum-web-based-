<?php
// Connection parameters
$servername = "localhost";
$username = "hyperese";
$password = "CP@%Eergy%%%%354@";
$dbname = " hyperese_ricc_payment_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$mpesaMessage = $_POST['mpesaMessage'];
$subject = $_POST['subject'];

// Prepare and execute SQL query
$sql = "INSERT INTO payment_details (name, phone, mpesa_message, subject) VALUES ('$name', '$phone', '$mpesaMessage', '$subject')";

if ($conn->query($sql) === TRUE) {
    echo "Payment details inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
