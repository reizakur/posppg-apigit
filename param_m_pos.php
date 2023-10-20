<?php
include ("koneksi.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$company = $_POST['company']; 
$geturl = $_POST['geturl']; 
$datampos = $_POST['datampos'];      
$jsonData = $_POST['datampos']; 
 $data = json_decode($_POST['datampos'],true);
// $data = json_decode($jsonData, true);
// echo($data);
 
// print_r($data);  
foreach ($data['data'] as $item) {  
$id = $item['id'];
$documentno = $item['documentno'];
$ranno = $item['ranno'];
$dateordered = $item['dateordered'];
$bonmanual = $item['bonmanual'];
$description = $item['description'];
$trxtime = $item['trxtime'];
$syncedbi = $item['syncedbi'];
$syncedadem = $item['syncedadem'];
$warehouse_id = $item['warehouse_id'];
$cashier_id = $item['cashier_id'];
$customer_id = $item['customer_id'];
$gro_id = $item['gro_id'];
$guide_id = $item['guide_id'];
$created_at = $item['created_at'];
$updated_at = $item['updated_at'];
$created_by = $item['created_by'];
$updated_by = $item['updated_by'];
$kondisi_pos = $item['kondisi_pos'];
echo('$pppppp');
$now = new DateTime();
$formattedDate = $now->format('Y-m-d');
list($year, $month, $day) = explode("-", $date);

$year = substr($year, -2);
if (strlen($month) == 1) {
    $month = "0" . $month;
}
if (strlen($day) == 1) {
    $day = "0" . $day;
}

$nodocumentexplode = $day . $month . $year; 
echo('$gggggg');
echo($nodocumentexplode);
$findid = mysqli_query($con,"select documentno from m_pos WHERE documentno LIKE '%$nodocumentexplode%' ORDER BY documentno DESC limit 1");
$go=mysqli_query($con,$findid); 
if ($findid) {
    $row = mysqli_fetch_assoc($findid);
    
    if ($row) {
        $documentno = $row['documentno'];
        echo "Last Document Number: $documentno";
    } else {
        echo "No results found.";
    }
  
} else {
    // The query failed, and you can handle the error here.
    echo "Query failed: " . mysqli_error($con);
}

// if($id)
echo('$formattedDate666');
if ($kondisi_pos == 'void'){
    echo("insert into m_vpos");
        $sqlsatu = mysqli_query($con,"insert into m_vpos 
        (documentno,ranno,dateordered,bonmanual,description,trxtime,warehouse_id,cashier_id,customer_id,gro_id,guide_id,created_at,updated_at,created_by,updated_by)
        values 
        ('$nodocumentexplode', '$ranno', '$dateordered', '$bonmanual', '$description', '$trxtime', '$syncedbi', '$syncedadem', '$warehouse_id', '$cashier_id', '$customer_id', '$gro_id', '$guide_id', '$created_at', '$updated_at', '$created_by', '$updated_by')");
        $go=mysqli_query($con,$sqlsatu); 
    }else{
        echo("dua");
        $sqlsatu = mysqli_query($con,"insert into m_pos 
        (documentno,ranno,dateordered,bonmanual,description,trxtime,syncedbi,syncedadem,warehouse_id,cashier_id,customer_id,gro_id,guide_id,created_at,updated_at,created_by,updated_by)
        values 
        ('$nodocumentexplode', '$ranno', '$dateordered', '$bonmanual', '$description', '$trxtime', '$syncedbi', '$syncedadem', '$warehouse_id', '$cashier_id', '$customer_id', '$gro_id', '$guide_id', '$created_at', '$updated_at', '$created_by', '$updated_by')");
        $go=mysqli_query($con,$sqlsatu); 
    }
    if($sqlsatu){ 
        $lastPosId = mysqli_insert_id($con); 
    }else{ 
        echo "m_pos gagal";
         echo "Error: " . mysqli_error($con);  
    }

    // Access data_m_vpospayment
    foreach ($item['data_m_pospayment'] as $payment) {
        $id = $payment['id'] ?? '';
        $pos_id = $lastPosId ?? '';
        $invoicedamt = $payment['invoicedamt'] ?? '';
        $payamt = $payment['payamt'] ?? '';
        $bill = $payment['bill'] ?? '';
        $changeamt = $payment['changeamt'] ?? '';
        $ptype = $payment['ptype'] ?? '';
        $edc_id = $payment['edc_id'] ?? '';
        $card_id = $payment['card_id'] ?? '';
        $cardnumber = $payment['cardnumber'] ?? '';
        $cardname = $payment['cardname'] ?? '';
        $trxtime = $payment['trxtime'] ?? '';
        $created_at = $payment['created_at'] ?? '';
        $updated_at = $payment['updated_at'] ?? '';
        $created_by = $payment['created_by'] ?? '';
        $updated_by = $payment['updated_by'] ?? '';
        $kondisi_pospayment = $payment['kondisi_pospayment'];

 if ($kondisi_pospayment == 'void'){
    echo("duasatu");
    $sqlsatu = mysqli_query($con,"insert into m_vpospayment 
    (pos_id, invoicedamt, payamt, changeamt, ptype, edc_id, card_id, cardnumber, cardname, trxtime, created_at, updated_at, created_by, updated_by)
    values 
    ('$pos_id', '$invoicedamt', '$payamt', '$changeamt', '$ptype', '$edc_id', '$card_id', '$cardnumber', '$cardname', '$trxtime', '$created_at', '$updated_at', '$created_by', '$updated_by')");
    $go=mysqli_query($con,$sqlsatu); 
    // ... access other fields in data_m_vpospayment ...


 }else{
    // echo("duasatutigas");
    $sqlsatu = mysqli_query($con,"insert into m_pospayment 
    (pos_id, bill, payamt, changeamt, ptype, edc_id, card_id, cardnumber, cardname, trxtime, created_at, updated_at, created_by, updated_by)
    values 
    ('$pos_id', '$bill', '$payamt', '$changeamt', '$ptype', '$edc_id', '$card_id', '$cardnumber', '$cardname', '$trxtime', '$created_at', '$updated_at', '$created_by', '$updated_by')");
    $go=mysqli_query($con,$sqlsatu); 
    // ... access other fields in data_m_vpospayment ...
 }
       
        if($sqlsatu){
            // echo "m_pospayment berhasil";
            //  echo "Record inserted successfully yang m_psnya.<br>";
           $lastPosId = mysqli_insert_id($con); 
        }else{
          
            echo "m_vpospayment gagal";
             echo "Error: " . mysqli_error($con);  
        }

    }

    // Access data_mposline
    foreach ($item['data_mposline'] as $posline) {
        $id = $posline['id']; 
        $pos_id =  $lastPosId;
        $posline_id = $mposline['posline_id'];
        $promo_id = $mposline['promo_id'];
        $promoline_id = $mposline['promoline_id'];
        $product_id =  $mposline['product_id'];
        $qty = $mposline['qty'];
        $discount = $mposline['discount'];
        $price = $mposline['price'];
        $taxamt = $mposline['taxamt'];
        $discountamt = $mposline['discountamt'];
        $pricelist = $mposline['pricelist'];
        $applicable = $mposline['applicable'];
        $trxtime = $mposline['trxtime'];
        $created_at = $mposline['created_at'];
        $updated_at = $mposline['updated_at'];
        $created_by = $mposline['created_by'];
        $updated_by = $mposline['updated_by'];
        $kondisi_posline = $mposline['kondisi_posline'];
 
if($kondisi_posline == 'void'){
    $sqlsatu = mysqli_query($con,"insert into m_vposline 
    (pos_id, product_id, qty, price, taxamt, discountamt, trxtime, created_at, updated_at, created_by, updated_by) 
    values 
    ('$pos_id', '$product_id', '$qty', '$price', '$taxamt', '$discountamt', '$trxtime', '$created_at', '$updated_at', '$created_by', '$updated_by')");
    $go=mysqli_query($con,$sqlsatu); 
    
}else if($kondisi_posline == 'voidpromo'){
    $sqlsatu = mysqli_query($con,"insert into m_vposline 
    (pos_id, product_id, qty, price, taxamt, discountamt, trxtime, created_at, updated_at, created_by, updated_by) 
    values 
    ('$pos_id', '$product_id', '$qty', '$price', '$taxamt', '$discountamt', '$trxtime', '$created_at', '$updated_at', '$created_by', '$updated_by')");
    $go=mysqli_query($con,$sqlsatu); 


    if($sqlsatu){
        // echo "m_posline berhasil";
        //  echo "Record inserted successfully yang m_psnya.<br>";
       $lastPosLineId = mysqli_insert_id($con); 
    }else{
      
        echo "m_posline gagal";
         echo "Error: " . mysqli_error($con);  
    }


    $sqlsatu = mysqli_query($con,"insert into m_vposline_promo 
    (pos_id, product_id, qty, price, taxamt, discountamt, pricelist, trxtime, created_at, updated_at, created_by, updated_by) 
    values 
    ('$pos_id', '$product_id', '$qty', '$price', '$taxamt', '$discountamt', '$pricelist', '$trxtime', '$created_at', '$updated_at', '$created_by', '$updated_by')");
    $go=mysqli_query($con,$sqlsatu); 


}else if($kondisi_posline == 'promo'){
    $sqlsatu = mysqli_query($con,"insert into m_posline 
    (pos_id, product_id, qty, price, taxamt, discountamt, trxtime, created_at, updated_at, created_by, updated_by) 
    values 
    ('$pos_id', '$product_id', '$qty', '$price', '$taxamt', '$discountamt', '$trxtime', '$created_at', '$updated_at', '$created_by', '$updated_by')");
    $go=mysqli_query($con,$sqlsatu); 

    if($sqlsatu){
        // echo "m_posline berhasil";
        //  echo "Record inserted successfully yang m_psnya.<br>";
       $lastPosLineId = mysqli_insert_id($con); 
    }else{
      
        echo "m_posline gagal";
         echo "Error: " . mysqli_error($con);  
    }

    $sqlsatu = mysqli_query($con,"insert into m_posline_promo 
    (pos_id, product_id, qty, price, taxamt, discountamt, pricelist, trxtime, created_at, updated_at, created_by, updated_by) 
    values 
    ('$pos_id', '$product_id', '$qty', '$price', '$taxamt', '$discountamt', '$pricelist', '$trxtime', '$created_at', '$updated_at', '$created_by', '$updated_by')");
    $go=mysqli_query($con,$sqlsatu); 


}else{
    $sqlsatu = mysqli_query($con,"insert into m_posline 
    (pos_id, product_id, qty, price, taxamt, discountamt, pricelist, trxtime, created_at, updated_at, created_by, updated_by) 
    values 
    ('$pos_id', '$product_id', '$qty', '$price', '$taxamt', '$discountamt', '$pricelist', '$trxtime', '$created_at', '$updated_at', '$created_by', '$updated_by')");
    $go=mysqli_query($con,$sqlsatu); 
     if($sqlsatu){
            // echo "m_posline berhasil";
            //  echo "Record inserted successfully yang m_psnya.<br>";
           $lastPosLineId = mysqli_insert_id($con); 
        }else{
          
            echo "m_posline gagal";
             echo "Error: " . mysqli_error($con);  
        }
}       


   foreach ($posline['m_pos_komisi'] as $komisi) {
              $id = $komisi['id'];
              $pos_id = $lastPosId;
              $posline_id = $lastPosLineId;
              $partner_id = $komisi['partner_id'];
              $totalamt = $komisi['totalamt'];
              $komisi = $komisi['komisi'];
              $komisiamt = $komisi['komisiamt'];
              $payment_id = $komisi['payment_id'];
              $created_at = $komisi['created_at'];
              $updated_at = $komisi['updated_at'];
              $created_by = $komisi['created_by'];
              $updated_by = $komisi['updated_by'];
              $kondisi_pos_komisi = $komisi['kondisi_pos_komisi'];
            if($kondisi_pos_komisi == 'void'){
              $sqlsatu = mysqli_query($con,"insert into m_vpos_komisi 
              (pos_id, posline_id, partner_id, totalamt, komisi, komisiamt, payment_id, created_at, updated_at, created_by, updated_by) 
              values 
              ('$pos_id', '$posline_id', '$partner_id', '$totalamt', '$komisi', '$komisiamt', '$payment_id', '$created_at', '$updated_at', '$created_by', '$updated_by')");
              $go=mysqli_query($con,$sqlsatu); 
            }else{
                $sqlsatu = mysqli_query($con,"insert into m_pos_komisi 
                (pos_id, posline_id, partner_id, totalamt, komisi, komisiamt, payment_id, created_at, updated_at, created_by, updated_by) 
                values 
                ('$pos_id', '$posline_id', '$partner_id', '$totalamt', '$komisi', '$komisiamt', '$payment_id', '$created_at', '$updated_at', '$created_by', '$updated_by')");
                $go=mysqli_query($con,$sqlsatu);
            }

              if($sqlsatu){
                // echo "m_vpos_komisi berhasil";
                //  echo "Record inserted successfully yang m_psnya.<br>";
               $lastPosLineId = mysqli_insert_id($con); 
            }else{
              
                echo "m_vpos_komisi gagal";
                 echo "Error: " . mysqli_error($con);  
            }


          }

        // Access m_vpos_treatment
        foreach ($posline['m_pos_treatment'] as $treatment) {
            $id = $treatment['id'];
            $pos_id = $lastPosId;
            $posline_id = $lastPosLineId;
            $terapis_id = $treatment['terapis_id'];
            $room_id = $treatment['room_id'];
            $created_at = $treatment['created_at'];
            $updated_at = $treatment['updated_at'];
            $created_by = $treatment['created_by'];
            $updated_by = $treatment['updated_by'];
            $kondisi_pos_treatment = $treatment['kondisi_pos_treatment'];
if($kondisi_pos_treatment == 'void'){
    $sqlsatu = mysqli_query($con,"insert into m_vpos_treatment 
    (pos_id, posline_id, terapis_id, room_id, created_at, updated_at, created_by, updated_by) 
    values 
    ('$pos_id', '$posline_id', '$terapis_id', '$room_id', '$created_at', '$updated_at', '$created_by', '$updated_by')");
    $go=mysqli_query($con,$sqlsatu); 
    
}else{
    $sqlsatu = mysqli_query($con,"insert into m_pos_treatment 
    (pos_id, posline_id, terapis_id, room_id, created_at, updated_at, created_by, updated_by) 
    values 
    ('$pos_id', '$posline_id', '$terapis_id', '$room_id', '$created_at', '$updated_at', '$created_by', '$updated_by')");
    $go=mysqli_query($con,$sqlsatu); 
    
}
           if($sqlsatu){
                // echo "m_vpos_treatment berhasil";
                // echo "Record inserted successfully yang m_psnya.<br>";
               $lastPosLineId = mysqli_insert_id($con); 
            }else{              
                echo "m_vpos_treatment gagal";
                 echo "Error: " . mysqli_error($con);  
            }

           }
 
    }
}
}
