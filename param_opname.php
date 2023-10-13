<?php
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $company = $_POST['company'];
    $geturl = $_POST['geturl'];
    $dataminventory = $_POST['dataminventory'];
    echo ('$dataminventory56565');
    echo ($dataminventory);
    // Validate JSON data
    // if (!empty($dataminventory)) {
    //     $jsonData = $_POST['dataminventory'];
    //     $data = json_decode($jsonData, true);

    //     if ($data !== null) {
    //         // Loop through the 'data' array
    //         foreach ($data['data'] as $item) {

    //             $id = $item['id'];
    //             $movementdate = $item['movementdate'];
    //             $warehouse_id = $item['warehouse_id'];
    //             $trxtime = $item['trxtime'];
    //             $syncedbi = $item['syncedbi'];
    //             $syncedadem = $item['syncedadem'];
    //             $opnametype = $item['opnametype'];
    //             $created_at = $item['created_at'];
    //             $updated_at = $item['updated_at'];
    //             $created_by = $item['created_by'];
    //             $updated_by = $item['updated_by'];

    //             // Insert data into the m_shiftlog table
    //             $sqlMInventory = "INSERT INTO m_inventory 
    //             (movementdate, warehouse_id, trxtime, syncedbi, syncedadem, opnametype, created_at, updated_at, created_by, updated_by)  
    //               VALUES 
    //             ('$movementdate', '$warehouse_id', '$trxtime', '$syncedbi', '$syncedadem', '$opnametype', '$created_at', '$updated_at', '$created_by', '$updated_by')";

    //             // $resultShiftLog = mysqli_query($con, $sqlShiftLog);


    //             // Loop through the 'datamshiftbonmanual' array
    //             foreach ($data['datamshiftbonmanual'] as $shiftBonManual) {

    //                 $id = $items['id'];
    //                 $product_id = $items['product_id'];
    //                 $qty = $items['qty'];
    //                 $uom_id = $items['uom_id'];
    //                 $trxtime = $items['trxtime'];
    //                 $inventory_id = $items['inventory_id'];
    //                 $created_at = $items['created_at'];
    //                 $updated_at = $items['updated_at'];
    //                 $created_by = $items['created_by'];
    //                 $updated_by = $items['updated_by'];

    //                 $sqlMInventory = "INSERT INTO m_inventoryline 
    //                 (product_id, qty, uom_id, trxtime, inventory_id, created_at, updated_at, created_by, updated_by)  
    //                   VALUES 
    //                 ('$product_id', '$qty', '$uom_id', '$trxtime', '$inventory_id', '$created_at', '$updated_at', '$created_by', '$updated_by')";               
                        
                
    //             }


    //         }
    //         $response = [
    //             "status" => 200,
    //             "message" => "Success",
    //         ];
    //         echo json_encode($response);
    //     } else {
    //         $response = [
    //             "status" => 405,
    //             "message" => "Gagal",
    //         ];
    //         echo json_encode($response);
    //     }
    // } else {
    //     $response = [
    //         "status" => 405,
    //         "message" => "Internet Bermaslah",
    //     ];
    //     echo json_encode($response);
    // }
}
?>

 