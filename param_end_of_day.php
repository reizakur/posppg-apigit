<?php
include ("koneksi.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve POST data
    $company = $_POST['company'];
    $geturl = $_POST['geturl'];
    $dataendofday =  '{
        "data": [
            {
                "id": "1",
                "warehouse_id": "DOC001",
                "cashier_id": "RAN001",
                "datetrx": "2023-10-01",
                "cash": "Manual123",
                "none_cash": "Sample Description",
                "cash_cashier": "2023-10-01 10:30:00",
                "rek_jw": "Synced123",
                "rek_tax": "Synced456",
                "syncedbi": "123",
                "created_at": "456",
                "updated_at": "789",
                "created_by": "101",
                "updated_by": "111"
            }
        ]
    }';
    echo ($dataendofday);

    echo ('mau lu apa si');
    // Convert JSON data to an associative array
    $data = json_decode($_POST['dataendofday'],true);
    echo($data);
    // Check if JSON decoding was successful
    if ($data != null) {

        // Loop through the data
        foreach ($data['data'] as $item) {
            $id = $item['id'];
            $warehouseId = $item['warehouse_id'];
            $cashierId = $item['cashier_id'];
            $datetrx = $item['datetrx'];
            $cash = $item['cash'];
            $none_cash = $item['none_cash'];
            $cash_cashier = $item['cash_cashier'];
            $rek_jw = $item['rek_jw'];
            $rek_tax = $item['rek_tax'];
            $syncedbi = $item['syncedbi'];
            $created_at = $item['created_at'];
            $updated_at = $item['updated_at'];
            $created_by = $item['created_by'];
            $updated_by = $item['updated_by'];

            $sqlsatu = mysqli_query($con,"insert into m_end_of_daylog 
            (warehouse_id, cashier_id, datetrx, cash, none_cash, cash_cashier, rek_jw, rek_tax, syncedbi, created_at, updated_at, created_by, updated_by)
            values 
            ($warehouseId', '$cashierId', '$datetrx', '$cash', '$none_cash', '$cash_cashier', '$rek_jw', '$rek_tax', '$syncedbi', '$created_at', '$updated_at', '$created_by', '$updated_by')");
            $go=mysqli_query($con,$sqlsatu); 
 
            if($sqlsatu){
                echo "m_pos berhasil";
              }else{
              
                echo "m_pos gagal";
                 echo "Error: " . mysqli_error($con);  
            }
            // Perform database insertions here for each record
            // Example code for inserting into m_end_of_daylog table
           
            if ($result) {
                echo "Record inserted successfully into m_end_of_daylog table.<br>";
            } else {
                echo "Error: " . mysqli_error($con);
            }
        }
    } else {
        // JSON decoding failed
        echo "JSON decoding error";
    }
}
?>
