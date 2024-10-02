<?php
session_start();
$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "jobportal";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$companyId = $_POST['company-id'];
$companyName = $_POST['company-name'];
$contactPerson = $_POST['contact-person'];
$address = $_POST['address'];
$city = $_POST['city'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$areaOfWork = $_POST['area-of-work'];
$userName = $_POST['username'];
$pas = $_POST['password'];


$sql = "INSERT INTO emp_profile (companyId, companyName, contactPerson, address, city, email, mobile, areaOfWork, userName, password)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("isssssssss", $companyId, $companyName, $contactPerson, $address, $city, $email, $mobile, $areaOfWork, $userName, $pas);

if ($stmt->execute()) {
    $_SESSION['msg']="New record created successfully";
    header("location:static_employer_reg.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$stmt->close();
$conn->close();
?>
