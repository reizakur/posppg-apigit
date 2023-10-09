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

                if ($resultShiftLog) {
                    $shiftlog_id = mysqli_insert_id($con);
                    echo "m_shiftlog berhasil\n";
                } else {
                    echo "m_shiftlog gagal: " . mysqli_error($con) . "\n";
                }

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

                    if ($resultShiftBonManual) {
                        echo "m_shift_bon_manual berhasil\n";
                    } else {
                        echo "m_shift_bon_manual gagal: " . mysqli_error($con) . "\n";
                    }
                }
            }
        } else {
            // JSON decoding failed
            echo "JSON decoding error\n";
        }
    } else {
        // JSON data is empty
        echo "JSON data is empty\n";
    }
}
?>
