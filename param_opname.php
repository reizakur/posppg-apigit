<?php
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $company = $_POST['company'];
    $geturl = $_POST['geturl'];
    $dataminventory = $_POST['dataminventory'];
    echo ('$dataminventory56565');
    echo ($dataminventory);
    // Validate JSON data
    if (!empty($dataminventory)) {
        echo ('satu123');
        $jsonData = $_POST['dataminventory'];
        $data = json_decode($jsonData, true);
        echo ($data);
        if ($data !== null) {
            echo ('satu124');
            // Loop through the 'data' array
            foreach ($data['data'] as $item) {
                echo ('satu125');
                $id = $item['id'];
                $movementdate = $item['movementdate'];
                $warehouse_id = $item['warehouse_id'];
                $trxtime = $item['trxtime'];
                $syncedbi = $item['syncedbi'];
                $syncedadem = $item['syncedadem'];
                $opnametype = $item['opnametype'];
                $created_at = $item['created_at'];
                $updated_at = $item['updated_at'];
                $created_by = $item['created_by'];
                $updated_by = $item['updated_by'];

$sqlsatu = mysqli_query($con,"insert into m_inventory 
(movementdate, warehouse_id, trxtime, syncedbi, syncedadem, opnametype, created_at, updated_at, created_by, updated_by)
values 
('$movementdate', '$warehouse_id', '$trxtime', '$syncedbi', '$syncedadem', '$opnametype', '$created_at', '$updated_at', '$created_by', '$updated_by')");

$go=mysqli_query($con,$sqlsatu); 
                // $resultShiftLog = mysqli_query($con, $sqlShiftLog);
                if ($sqlsatu){
                    echo ("m_inventory true");
                }else{
                    echo ("m_inventory false");
                }

                // Loop through the 'datamshiftbonmanual' array
                foreach ($item['data_m_inventoryline'] as $shiftBonManual) {
                    echo ('satu128');
                    $id = $items['id'];
                    $product_id = $items['product_id'];
                    $qty = $items['qty'];
                    $uom_id = $items['uom_id'];
                    $trxtime = $items['trxtime'];
                    $inventory_id = $items['inventory_id'];
                    $created_at = $items['created_at'];
                    $updated_at = $items['updated_at'];
                    $created_by = $items['created_by'];
                    $updated_by = $items['updated_by'];

               
                     $sqlsatu = mysqli_query($con,"insert into m_inventoryline 
                     (product_id, qty, uom_id, trxtime, inventory_id, created_at, updated_at, created_by, updated_by)
                     values 
                     ('$product_id', '$qty', '$uom_id', '$trxtime', '$inventory_id', '$created_at', '$updated_at', '$created_by', '$updated_by')");
                     $go=mysqli_query($con,$sqlsatu); 
                     // ... access other fields in data_m_vpospayment ...
                     if ($sqlsatu){
                        echo ("m_inventoryline true");
                    }else{
                        echo ("m_inventoryline false");
                    }
                
                }


            }
            $response = [
                "status" => 200,
                "message" => "Success",
            ];
            echo json_encode($response);
        } else {
            $response = [
                "status" => 405,
                "message" => "Gagal",
            ];
            echo json_encode($response);
        }
    } else {
        $response = [
            "status" => 405,
            "message" => "Internet Bermaslah",
        ];
        echo json_encode($response);
    }
}
?>

 