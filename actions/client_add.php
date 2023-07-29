<?php include('../database/db.php');

if(isset($_POST{'submit'})){
    $nama_konsumen = $_POST['nama_konsumen'];
    $alamat_konsumen = $_POST['alamat_konsumen'];
   

    $sql = "INSERT INTO konsumen (nama_konsumen, alamat_konsumen) 
    VALUES ('$nama_konsumen','$alamat_konsumen')";
    $result = mysqli_query($conn,$sql); 

    if($result){
        header('Location: ../php/viewKonsumenPage.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?> 
