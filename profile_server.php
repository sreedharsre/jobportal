<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:shome.php");
    exit();
}
$userid = $_SESSION['username'];
include 'db_connect.php';
            //getting the details from databse
$sql = "SELECT * FROM emp_profile WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userid);
$stmt->execute();
$result = $stmt->get_result();
$userDetails = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>