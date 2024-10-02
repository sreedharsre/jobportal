<?php

$conn=new mysqli("localhost","root","","jobportal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobTitle = $_POST['jobTitle'];
    $totalVacancy = $_POST['totalVacancy'];
    $qualification = $_POST['qualification'];
    $description = $_POST['description'];
    $interviewDate = $_POST['interviewDate'];
    $interviewTime = $_POST['interviewTime'];
    $other = $_POST['other'];

    $sql = "INSERT INTO managewalkin (jobtitle, vacancy, qualification, other, description, interviewdate, interviewtime)
    VALUES ('$jobTitle', '$totalVacancy', '$qualification', '$other', '$description', '$interviewDate', '$interviewTime')";

    if ($conn->query($sql) === TRUE) {
        header("Location: managewalkin.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM managewalkin WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header("Location: managewalkin.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
