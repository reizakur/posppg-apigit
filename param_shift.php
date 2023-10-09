<?php
include ("koneksi.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $datampos = $_POST['datampos'];
    echo($datampos);
        echo("hmmmmm");
  
  $jsonData = $_POST['datampos'];

$data = json_decode($jsonData, true);
echo($data);
foreach ($data as $item) {
    $id = $item['id'];
    $warehouse_id = $item['warehouse_id'];
    $name = $item['name'];
    $shiftin = $item['shiftin'];
    $shiftout = $item['shiftout'];
    $active = $item['active'];
    $created_at = $item['created_at'];
    $updated_at = $item['updated_at'];
    $created_by = $item['created_by'];
    $updated_by = $item['updated_by'];   
    
    
    $sqlsatu = mysqli_query($con,"insert into m_shiftlog 
    (id, warehouse_id, name, shiftin, shiftout, active, created_at, updated_at, created_by) 
    values 
    ('$id','$warehouse_id', '$name', '$shiftin', '$shiftout', '$active', '$created_at', '$updated_at', '$created_by')");
    
    $go=mysqli_query($con,$sqlsatu); 
    if($sqlsatu){
        echo "m_vpos_treatment berhasil";
        echo "Record inserted successfully yang m_psnya.<br>";
       $lastPosLineId = mysqli_insert_id($con); 
    }else{              
        echo "m_vpos_treatment gagal";
         echo "Error: " . mysqli_error($con);  
    }
    
    foreach ($item['data_m_shift_bon_manual'] as $shiftBonManual) {
        $id = $shiftBonManual['id'];
        $shiftlog_id = $shiftBonManual['shiftlog_id'];
        $modal1 = $shiftBonManual['modal1'];
        $modal2 = $shiftBonManual['modal2'];
        $sisa1 = $shiftBonManual['sisa1'];
        $sisa2 = $shiftBonManual['sisa2'];
        $created_at = $shiftBonManual['created_at'];
        $updated_at = $shiftBonManual['updated_at'];
        $created_by = $shiftBonManual['created_by'];
        $updated_by = $shiftBonManual['updated_by'];

        $sqlsatu = mysqli_query($con,"insert into m_shift_bon_manual 
        (id, shiftlog_id, modal1, modal2, sisa1, sisa2, created_at, updated_at, created_by)
        values 
        ('$id', '$shiftlog_id', '$modal1', '$modal2', '$sisa1', '$sisa2', '$created_at', '$updated_at', '$created_by')");
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