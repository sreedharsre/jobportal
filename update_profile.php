<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:shome.php");
    exit();
}

include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $companyId = $_POST['companyId'];
    $companyName = $_POST['companyName'];
    $contactPerson = $_POST['contactPerson'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $areaOfWork = $_POST['areaOfWork'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $sql = "UPDATE emp_profile SET companyName=?, contactPerson=?, address=?, city=?, email=?, mobile=?, areaOfWork=?, password=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $companyName, $contactPerson, $address, $city, $email, $mobile, $areaOfWork, $password, $id);

    if ($stmt->execute()) {
        
        header("location: profile.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
