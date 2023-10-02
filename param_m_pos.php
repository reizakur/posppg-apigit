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

    $data = json_decode($datamposline);
    echo("mati listrik123");
    // echo($data);
    echo("mati listrik");
    // Check if the decoding was successful
    if ($data === null) {
        echo("Failed to decode JSON.");
    }else{
        echo("mati hatiiii");
    // Loop through the array
    foreach ($data as $item) {
        echo "ID: " . $item['id'] . "<br>";
        echo "POS ID: " . $item['pos_id'] . "<br>";
        echo "Product ID: " . $item['product_id'] . "<br>";
        echo "Quantity: " . $item['qty'] . "<br>";
        echo "Price: " . $item['price'] . "<br>";
        echo "Tax Amount: " . $item['taxamt'] . "<br>";
        echo "Discount Amount: " . $item['discountamt'] . "<br>";
        echo "Price List: " . $item['pricelist'] . "<br>";
        echo "Transaction Time: " . $item['trxtime'] . "<br>";
        echo "Created At: " . $item['created_at'] . "<br>";
        echo "Updated At: " . $item['updated_at'] . "<br>";
        echo "Created By: " . $item['created_by'] . "<br>";
        echo "Updated By: " . $item['updated_by'] . "<br>";
        echo "<hr>";
    }
}
    // Insert data into the database (replace with your actual table and column names)
    $sql = "INSERT INTO your_table_name (company, geturl, id_m_warehouse_icpl) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $company, $geturl, $id_m_warehouse_icpl);

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
