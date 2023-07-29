<?php include('../database/db.php');

if(isset($_POST{'submit'})){
    $namakopi = $_POST['namakopi'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO kopi (namakopi, deskripsi, stok, harga) 
    VALUES ('$namakopi', '$deskripsi', '$stok', '$harga')";
    $result = mysqli_query($conn,$sql); 

    if($result){
        header('Location: ../php/viewProductPage.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?> 
