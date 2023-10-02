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
    die();
    

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
