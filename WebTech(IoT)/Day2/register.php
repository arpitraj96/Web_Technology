<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $address=$_POST["address"];

    $conn = new mysqli("localhost", "root", " ", "registration");

    if ($conn->connct_error) {
        die("connection failed: " . $conn->connect_error);

    }
    $sql = "INSERT INTO reg(username,password,email,address) VALUES ('$username', '$password','$email','$address')"

    if ($conn->query($sql) == TRUE){
        echo "Registration successful!";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}