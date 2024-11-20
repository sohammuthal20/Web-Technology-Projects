<?php
$servername = "localhost";
$username = "root";
$password = "admin@123";
$dbname = "wtl";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollNo = $_POST["rollNo"];
    $studName = $_POST["studName"];
    $studDept = $_POST["studDept"];
    $passingYear = $_POST["passingYear"];
    $classGrades = $_POST["classGrades"];

    $sql = "INSERT INTO student (rollNo, studName, studDept, passingYear, classGrades) VALUES ('$rollNo', '$studName', '$studDept', '$passingYear', '$classGrades')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
