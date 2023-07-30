<?php 
include("../database/db.php");

$users = $_GET['UserID'];

$sql = "DELETE FROM users WHERE UserID=$users" ;

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/kelolaAdmin.php');
}


?>