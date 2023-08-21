<?php include('../database/db.php');

if(isset($_POST{'submit'})){
    
    $id_konsumen= $_POST['konsumen'];
    $id_kopi = $_POST['kopi'];
    $qty = $_POST['qty'];
       $UserID = $_POST['UserID'];

    $sql = "INSERT INTO barangkeluar(UserID, id_konsumen, id_kopi, qty) VALUES ('$UserID', '$id_konsumen', '$id_kopi', '$qty');";
    $sql .= "UPDATE kopi SET stok=stok - $qty WHERE id_kopi=$id_kopi";

    $result = mysqli_multi_query($conn,$sql); 

    if($result){
        header('Location: ../php/orderClientPage.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?> 
