<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM managejob WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION["delete"]="Record deleted successfully";
        header("Location: managejob.php");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
} else {
    header("Location: managejob.php");
    exit;
}
?>
