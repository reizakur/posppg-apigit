<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $id_m_warehouse_icpl = $_POST['id_m_warehouse_icpl'];
    $dbConnection = new mysqli("hostname", "username", "password", "database_name");
      if ($dbConnection->connect_error) {
        die("Connection failed: " . $dbConnection->connect_error);
    }

    // Insert data into the database (replace with your actual table and column names)
    $sql = "INSERT INTO your_table_name (company, geturl, id_m_warehouse_icpl) VALUES (?, ?, ?)";
    $stmt = $dbConnection->prepare($sql);
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
