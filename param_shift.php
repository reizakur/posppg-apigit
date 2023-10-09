<?php
include ("koneksi.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $datashift = $_POST['datashift'];
    echo($datashift);
        echo("hmmmmm 3242");
  
  $jsonData = $_POST['datashift'];

$data = json_decode($jsonData, true);
echo('kucing 234'); 
if ($data != null) {
    // Access the decoded data here
    print_r($data);
    echo('wakawa 777');
} else {
    // JSON decoding failed
    echo "JSON decoding error";
}
foreach ($data as $item) { 
    echo('kambing 234');
    $id =  $item['id'];
    $warehouse_id =  $item['warehouse_id'];
    $cashier_id =  $item['cashier_id'];
    $shift_id =  $item['shift_id'];
    $shiftin =  $item['shiftin'];
    $shiftout =  $item['shiftout'];
    $amtmodal =  $item['amtmodal'];
    $amtsetor =  $item['amtsetor'];
    $amtshift =  $item['amtshift'];
    $created_at =  $item['created_at'];
    $updated_at =  $item['updated_at'];
    $created_by =  $item['created_by'];
    $updated_by =  $item['updated_by'];   
    
    
    $sqlsatu = mysqli_query($con,"insert into m_shiftlog 
    (warehouse_id, cashier_id, shift_id, shiftin, shiftout, amtmodal, amtsetor, amtshift, created_at, updated_at, created_by, updated_by ) 
    values 
    ('$warehouse_id', '$cashier_id', '$shift_id', '$shiftin', '$shiftout', '$amtmodal', '$amtsetor', '$amtshift', '$created_at', '$updated_at', '$created_by', '$updated_by')");
    
    $go=mysqli_query($con,$sqlsatu); 
    if($sqlsatu){
        echo "m_shiftlog berhasil";
        echo "Record inserted successfully yang m_psnya.<br>";
       $shiftlog_id = mysqli_insert_id($con); 
    }else{              
        echo "m_shiftlog gagal";
         echo "Error: " . mysqli_error($con);  
    }
    
    foreach ($item['data_m_shift_bon_manual'] as $shiftBonManual) {
        $id = $shiftBonManual['id'];
        $shiftlog_id = $shiftlog_id;
        $modal1 = $shiftBonManual['modal1'];
        $modal2 = $shiftBonManual['modal2'];
        $sisa1 = $shiftBonManual['sisa1'];
        $sisa2 = $shiftBonManual['sisa2'];
        $created_at = $shiftBonManual['created_at'];
        $updated_at = $shiftBonManual['updated_at'];
        $created_by = $shiftBonManual['created_by'];
        $updated_by = $shiftBonManual['updated_by'];

        $sqlsatu = mysqli_query($con,"insert into m_shift_bon_manual 
        (shiftlog_id, modal1, modal2, sisa1, sisa2, created_at, updated_at, created_by)
        values 
        ('$shiftlog_id', '$modal1', '$modal2', '$sisa1', '$sisa2', '$created_at', '$updated_at', '$created_by')");
        $go=mysqli_query($con,$sqlsatu); 
        if($sqlsatu){
            echo "m_vpos_treatment berhasil";
            echo "Record inserted successfully yang m_psnya.<br>";
           $lastPosLineId = mysqli_insert_id($con); 
        }else{              
            echo "m_vpos_treatment gagal";
             echo "Error: " . mysqli_error($con);  
        }


        echo "\n"; // Separation between records
    }
    
    echo "\n"; // Separation between items
}
}
  
  
?>