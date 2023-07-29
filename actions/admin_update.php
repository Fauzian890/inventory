<?php include('../database/db.php');

//$idkategori = $_GET['kat'];

    $userId = $_POST['userID'];
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];


$sql = "UPDATE users SET UserName='$userName',  UserPassword='$userPassword' WHERE UserID='$userId'";

if ($conn->query($sql) === TRUE) {
    header('Location: ../php/kelolaAdmin.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>