<?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
    $rollno = $_POST['rollno'];

    //database connection
    $conn = new mysqli('localhost', 'root', '', 'websitedata');
    if ($conn->connect_error) {
        die('connection failed: '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO register (name, age, email, Password, rollno) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $age, $email, $Password, $rollno);
        $stmt->execute();
        echo "Registration successful";
        $stmt->close();
        $conn->close();
    }
?>
