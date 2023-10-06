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
    // echo($conn);
    $data = json_decode($_POST['datamposline'], true);
    echo("mati listrik123");
    echo($data);
    echo("mati listrik");
    // Check if the decoding was successful
    if ($data == null) {
        echo("Failed to decode JSON.");
    }else{
  // Insert data into the database (replace with your actual table and column names)
   
 
}
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
