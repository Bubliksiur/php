<?php
    $conn = new mysqli("localhost", "root", "", "users");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $job = $_POST['job'];
    $hobby = $_POST['hobby'];

    $sql = "INSERT INTO users(name, email, age, job, hobby) VALUES ('$name', '$email', '$age', '$job', '$hobby')";
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
?>
