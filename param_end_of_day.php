<?php
//satu m_shiflog bisa banyak m_shift_bon_ambual
include ("koneksi.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $dataendofday = $_POST['dataendofday'];
    // echo($company);
    echo($dataendofday);
        echo("hmmmmm");
  
  $jsonData = $_POST['dataendofday'];
  
  echo("hmmmmm123");
  $data = json_decode($jsonData, true);
  
  echo("hmmmmm321"); 

foreach($data as $item){

$warehouse_id = $jsonData['warehouse_id'];
$cashier_id = $jsonData['cashier_id'];
$datetrx = $jsonData['datetrx'];
$cash = $jsonData['cash'];
$none_cash = $jsonData['none_cash'];
$cash_cashier = $jsonData['cash_cashier'];
$rek_jw = $jsonData['rek_jw'];
$rek_tax = $jsonData['rek_tax'];
$syncedbi = $jsonData['syncedbi'];
$created_at = $jsonData['created_at'];
$updated_at = $jsonData['updated_at'];
$created_by = $jsonData['created_by'];
$updated_by = $jsonData['updated_by'];


$sqlsatu = mysqli_query($con,"insert into m_end_of_daylog 
(warehouse_id, cashier_id, datetrx, cash, none_cash, cash_cashier, rek_jw, rek_tax, syncedbi, created_at, updated_at, created_by, updated_by)
values 
('$warehouse_id', '$cashier_id', '$datetrx', '$cash', '$none_cash', '$cash_cashier', '$rek_jw', '$rek_tax', '$syncedbi', '$created_at', '$updated_at', '$created_by', '$updated_by')");
$go=mysqli_query($con,$sqlsatu); 

if($sqlsatu){
    echo "m_end_of_daylog berhasil";
    echo "Record inserted successfully yang m_psnya.<br>";
 
}else{              
    echo "m_end_of_daylog gagal";  
}

}}
 
?>