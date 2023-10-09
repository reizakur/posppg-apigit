<?php
include ("koneksi.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve POST data
    $company = $_POST['company'];
    $geturl = $_POST['geturl'];
    $dataendofday =  $_POST['dataendofday'];
 
    // Convert JSON data to an associative array
    $data = json_decode($_POST['dataendofday'],true);
    
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
            ('$warehouseId', '$cashierId', '$datetrx', '$cash', '$none_cash', '$cash_cashier', '$rek_jw', '$rek_tax', '$syncedbi', '$created_at', '$updated_at', '$created_by', '$updated_by')");
            $go=mysqli_query($con,$sqlsatu); 
           
            if($sqlsatu){
                $response = [
                    "status" => 200,
                    "message" => "Success",
                    "access_token" => "asdassMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
                  ];
                echo json_encode($response);
              }else{
                $response = [
                    "status" => 404,
                    "message" => "Gagal",
                    "access_token" => "asdassMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
                  ];
                echo json_encode($response);
              }        
        }
    } else {
        // JSON decoding failed
        echo "JSON decoding error";
    }
}
?>
