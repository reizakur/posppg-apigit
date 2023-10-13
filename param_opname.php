<?php
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $company = $_POST['company'];
    $geturl = $_POST['geturl'];
    $datashift = $_POST['datashift'];
    
    // Validate JSON data
    if (!empty($datashift)) {
        $jsonData = $_POST['datashift'];
        $data = json_decode($jsonData, true);

        if ($data !== null) {
            // Loop through the 'data' array
            foreach ($data['data'] as $item) {

i$  `-*/9d
movementdat$    `-*/9e
warehouse_i$    `-*/9d
trxtim$ `-*/9e
syncedb$    `-*/9i
syncedade$  `-*/9m
opnametyp$  `-*/9e
created_a$  `-*/9t
updated_a$  `-*/9t
created_b$  `-*/9y
updated_by

                $warehouse_id = $item['warehouse_id'];
                $cashier_id = $item['cashier_id'];
                $shift_id = $item['shift_id'];
                $shiftin = $item['shiftin'];
                $shiftout = $item['shiftout'];
                $amtmodal = $item['amtmodal'];
                $amtsetor = $item['amtsetor'];
                $amtshift = $item['amtshift'];
                $created_at = $item['created_at'];
                $updated_at = $item['updated_at'];
                $created_by = $item['created_by'];
                $updated_by = $item['updated_by'];

                // Insert data into the m_shiftlog table
                $sqlShiftLog = "INSERT INTO m_shiftlog 
                (warehouse_id, cashier_id, shift_id, shiftin, shiftout, amtmodal, amtsetor, amtshift, created_at, updated_at, created_by, updated_by) 
                VALUES 
                ('$warehouse_id', '$cashier_id', '$shift_id', '$shiftin', '$shiftout', '$amtmodal', '$amtsetor', '$amtshift', '$created_at', '$updated_at', '$created_by', '$updated_by')";

                $resultShiftLog = mysqli_query($con, $sqlShiftLog);
 

                // Loop through the 'datamshiftbonmanual' array
                foreach ($item['datamshiftbonmanual'] as $shiftBonManual) {
                    $modal1 = $shiftBonManual['modal1'];
                    $modal2 = $shiftBonManual['modal2'];
                    $sisa1 = $shiftBonManual['sisa1'];
                    $sisa2 = $shiftBonManual['sisa2'];
                    $created_at = $shiftBonManual['created_at'];
                    $updated_at = $shiftBonManual['updated_at'];
                    $created_by = $shiftBonManual['created_by'];
                    $updated_by = $shiftBonManual['updated_by'];

                    // Insert data into the m_shift_bon_manual table
                    $sqlShiftBonManual = "INSERT INTO m_shift_bon_manual 
                    (shiftlog_id, modal1, modal2, sisa1, sisa2, created_at, updated_at, created_by, updated_by) 
                    VALUES 
                    ('$shiftlog_id', '$modal1', '$modal2', '$sisa1', '$sisa2', '$created_at', '$updated_at', '$created_by', '$updated_by')";

                    $resultShiftBonManual = mysqli_query($con, $sqlShiftBonManual);
 
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







id
product_id
qty
uom_id
trxtime
inventory_id
created_at
updated_at
created_by
updated_by