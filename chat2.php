<?php
// Database configuration
$host = 'localhost';
$dbName = 'helpin_hand';
$username = 'root';
$password = '';

// Establishing connection to the database
$conn = new mysqli($host, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieving form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = $_POST['query'];

    // Inserting data into the database
    $sql = "INSERT INTO helpin_hand (name, email, query) VALUES ('$name', '$email', '$query')";

    if ($conn->query($sql) === true) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Closing the database connection
$conn->close();
?>