<?php include('../database/db.php');

if(isset($_POST{'submit'})){
    
    $namakategori = $_POST['nama_kategori'];

    $sql = "INSERT INTO kategori (nama_kategori) VALUES ('$namakategori')";
    $result = mysqli_query($conn,$sql); 

    if($result){
        header('Location: ../php/viewKategoriPage.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?> 
