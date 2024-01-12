<?php
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $bloodType = $_POST['bloodType'];
    $message = $_POST['message'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'blood_bank_db');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO donors (fullName, email, phone, location, bloodType, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $fullName, $email, $phone, $location, $bloodType, $message);
        $execval = $stmt->execute();

        if (!$execval) {
            echo $stmt->error;
        }

        echo json_encode(['status' => 'success']);  // Return a response (optional)
        $stmt->close();
        $conn->close();
    }
?>