<?php include('../database/db.php');

if(isset($_POST{'submit'})){
    
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];

    $sql = "INSERT INTO users (UserName, UserPassword) VALUES ('$userName', '$userPassword')";
    $result = mysqli_query($conn,$sql); 

    if($result){
        header('Location: ../php/kelolaAdmin.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?> 
