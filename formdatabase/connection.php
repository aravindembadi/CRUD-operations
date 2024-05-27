<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];

    // Establishing connection to the database
    $con = new mysqli('localhost', 'root', '', 'data_forms');

    // Check if connection is successful
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare SQL statement to prevent SQL injection
    $sql = "INSERT INTO data (name, email, gender, mobile) VALUES (?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $gender, $mobile);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>
