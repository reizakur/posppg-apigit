<?php
include "koneksi.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $datampos = $_POST['datampos'];
    $datamposline = $_POST['datamposline'];
    echo($datampos); 
    echo("damn 123123");
    echo($datamposline);
    // die();

    $data = json_decode($_POST['datamposline'], true);
    echo("mati listrik123");
    echo($data);
    echo("mati listrik");
    // Check if the decoding was successful
    if ($data == null) {
        echo("Failed to decode JSON.");
    }else{
        // echo("mati hatiiii");
    // Loop through the array
    foreach ($data as $item) {
        $id = mysqli_real_escape_string($conn, $item['id']);
        $pos_id = mysqli_real_escape_string($conn, $item['pos_id']);
        $product_id = mysqli_real_escape_string($conn, $item['product_id']);
        $qty = mysqli_real_escape_string($conn, $item['qty']);
        $price = mysqli_real_escape_string($conn, $item['price']);
        $taxamt = mysqli_real_escape_string($conn, $item['taxamt']);
        $discountamt = mysqli_real_escape_string($conn, $item['discountamt']);
        $pricelist = mysqli_real_escape_string($conn, $item['pricelist']);
        $trxtime = mysqli_real_escape_string($conn, $item['trxtime']);
        $created_at = mysqli_real_escape_string($conn, $item['created_at']);
        $updated_at = mysqli_real_escape_string($conn, $item['updated_at']);
        $created_by = mysqli_real_escape_string($conn, $item['created_by']);
        $updated_by = mysqli_real_escape_string($conn, $item['updated_by']);
    
        // Define the SQL INSERT statement
        $sql = "INSERT INTO m_posline (id, pos_id, product_id, qty, price, taxamt, discountamt, pricelist, trxtime, created_at, updated_at, created_by, updated_by)
                VALUES ('$id', '$pos_id', '$product_id', '$qty', '$price', '$taxamt', '$discountamt', '$pricelist', '$trxtime', '$created_at', '$updated_at', '$created_by', '$updated_by')";
      if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully.<br>";
    } else {
        echo "Error inserting record: " . mysqli_error($conn) . "<br>";
    }
    }
}
    // Insert data into the database (replace with your actual table and column names)
   
    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $dbConnection->close();
}
?>
