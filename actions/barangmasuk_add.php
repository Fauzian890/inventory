<?php include('../database/db.php');

if(isset($_POST{'submit'})){
    
    $id_supplier = $_POST['supplier'];
     $id_kopi = $_POST['kopi'];
       $qty = $_POST['qty'];
       $UserID = $_POST['UserID'];

    $sql = "INSERT INTO barangmasuk (UserID, id_supplier, id_kopi, qty) VALUES ('$UserID', '$id_supplier', '$id_kopi', '$qty')";
    $result = mysqli_query($conn,$sql); 

    if($result){
        header('Location: ../php/orderPurchasePage.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?> 
