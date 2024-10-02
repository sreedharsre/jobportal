<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $jobtitle = $_POST['job-title'];
    $totalvacancy = $_POST['total-vacancy'];
    $qualification = $_POST['qualification'];
    $other = $_POST['other'];
    $description = $_POST['description'];

   
    $stmt = $conn->prepare("INSERT INTO managejob (jobtitle, totalvacancy, qualification, other, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sisss", $jobtitle, $totalvacancy, $qualification, $other, $description);

   
    if ($stmt->execute()) {
        echo "New job posted successfully";
        header("Location: managejob.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request";
}
?>
