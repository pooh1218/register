<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_crud";


//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}

$name = $_POST["name"];
$email =  $_POST["email"];
$password = $_POST["psw"];

$sql = "INSERT INTO user(name, email, password)
VALUES('$name', '$email', '$password')";


if($conn->query($sql) === true){
    echo "New record created successfully";
} else{
    echo "Error:" .$sql ."<br>" .$conn->error;
}

$conn->close();

?>