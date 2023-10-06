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
foreach ($data['data'] as $item) { 
        $id = $item['id'];
        $documentno = $item['documentno'];
        $ranno = $item['ranno'];
        $syncedbi = $item['syncedbi'];
        $syncedadem = $item['syncedadem'];
        $dateordered = $item['dateordered'];
        $bonmanual = $item['bonmanual'];
        $description = $item['description'];
        $trxtime = $item['trxtime'];
        $warehouse_id = $item['warehouse_id'];
        $cashier_id = $item['cashier_id'];
        $customer_id = $item['customer_id'];
        $gro_id = $item['gro_id'];
        $guide_id = $item['guide_id'];
        $created_at = $item['created_at'];
        $updated_at = $item['updated_at'];
        $created_by = $item['created_by'];
        $updated_by = $item['updated_by'];
         
        $sqlsatu = mysqli_query($con,"insert into m_pos 
        (documentno, ranno, dateordered, bonmanual, description, trxtime, syncedbi, syncedadem, warehouse_id, cashier_id, customer_id, gro_id, guide_id, created_at, updated_at, created_by, updated_by)
        values 
        ('$documentno', '$ranno', '$dateordered', '$bonmanual', '$description', '$trxtime', '$syncedbi', '$syncedadem', '$warehouse_id', '$cashier_id', '$customer_id', '$gro_id', '$guide_id', '$created_at', '$updated_at', '$created_by', '$updated_by')");
        $go=mysqli_query($con,$sqlsatu); 
 
    if($sqlsatu){
        echo "m_pos berhasil";
         echo "Record inserted successfully yang m_psnya.<br>";
       $lastPosId = mysqli_insert_id($con); 
    }else{
      
        echo "m_pos gagal";
         echo "Error: " . mysqli_error($con);  
    }

    // Access data_m_vpospayment
    foreach ($item['data_m_vpospayment'] as $payment) {
        $id = $payment['id'];
        $pos_id = $lastPosId;
        $invoicedamt = $payment['invoicedamt'];
        $payamt = $payment['payamt'];
        $changeamt = $payment['changeamt'];
        $ptype = $payment['ptype'];
        $edc_id = $payment['edc_id'];
        $card_id = $payment['card_id'];
        $cardnumber = $payment['cardnumber'];
        $cardname = $payment['cardname'];
        $trxtime = $payment['trxtime'];
        $created_at = $payment['created_at'];
        $updated_at = $payment['updated_at'];
        $created_by = $payment['created_by'];
        $updated_by = $payment['updated_by'];

        $sqlsatu = mysqli_query($con,"insert into m_pospayment 
        (id, pos_id, invoicedamt, payamt, changeamt, ptype, edc_id, card_id, cardnumber, cardname, trxtime, created_at, updated_at, created_by, updated_by)
        values 
        ('$id', '$pos_id', '$invoicedamt', '$payamt', '$changeamt', '$ptype', '$edc_id', '$card_id', '$cardnumber', '$cardname', '$trxtime', '$created_at', '$updated_at', '$created_by', '$updated_by')");
        $go=mysqli_query($con,$sqlsatu); 
        // ... access other fields in data_m_vpospayment ...

        if($sqlsatu){
            echo "m_vpospayment berhasil";
             echo "Record inserted successfully yang m_psnya.<br>";
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
        $product_id =  $mposline['product_id'];
        $qty = $mposline['qty'];
        $price = $mposline['price'];
        $taxamt = $mposline['taxamt'];
        $discountamt = $mposline['discountamt'];
        $pricelist = $mposline['pricelist'];
        $trxtime = $mposline['trxtime'];
        $created_at = $mposline['created_at'];
        $updated_at = $mposline['updated_at'];
        $created_by = $mposline['created_by'];
        $updated_by = $mposline['updated_by'];

        $sqlsatu = mysqli_query($con,"insert into m_posline 
        (pos_id, product_id, qty, price, taxamt, discountamt, pricelist, trxtime, created_at, updated_at, created_by, updated_by) 
        values 
        ('$pos_id', '$product_id', '$qty', '$price', '$taxamt', '$discountamt', '$pricelist', '$trxtime', '$created_at', '$updated_at', '$created_by', '$updated_by')");
        $go=mysqli_query($con,$sqlsatu); 
       

        if($sqlsatu){
            echo "m_posline berhasil";
             echo "Record inserted successfully yang m_psnya.<br>";
           $lastPosLineId = mysqli_insert_id($con); 
        }else{
          
            echo "m_posline gagal";
             echo "Error: " . mysqli_error($con);  
        }

        // Access m_vpos_komisi
        foreach ($posline['m_vpos_komisi'] as $komisi) {
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
              

              $sqlsatu = mysqli_query($con,"insert into m_pos_komisi 
              (pos_id, posline_id, partner_id, totalamt, komisi, komisiamt, payment_id, created_at, updated_at, created_by, updated_by) 
              values 
              ('$pos_id', '$posline_id', '$partner_id', '$totalamt', '$komisi', '$komisiamt', '$payment_id', '$created_at', '$updated_at', '$created_by', '$updated_by')");
              $go=mysqli_query($con,$sqlsatu); 


              if($sqlsatu){
                echo "m_vpos_komisi berhasil";
                 echo "Record inserted successfully yang m_psnya.<br>";
               $lastPosLineId = mysqli_insert_id($con); 
            }else{
              
                echo "m_vpos_komisi gagal";
                 echo "Error: " . mysqli_error($con);  
            }


          }

        // Access m_vpos_treatment
        foreach ($posline['m_vpos_treatment'] as $treatment) {
            $id = $treatment['id'];
            $pos_id = $lastPosId;
            $posline_id = $lastPosLineId;
            $terapis_id = $treatment['terapis_id'];
            $room_id = $treatment['room_id'];
            $created_at = $treatment['created_at'];
            $updated_at = $treatment['updated_at'];
            $created_by = $treatment['created_by'];
            $updated_by = $treatment['updated_by'];

            $sqlsatu = mysqli_query($con,"insert into m_pos_treatment 
            (pos_id, posline_id, terapis_id, room_id, created_at, updated_at, created_by, updated_by) 
            values 
            ('$pos_id', '$posline_id', '$terapis_id', '$room_id', '$created_at', '$updated_at', '$created_by', '$updated_by')");
            $go=mysqli_query($con,$sqlsatu); 
            if($sqlsatu){
                echo "m_vpos_treatment berhasil";
                echo "Record inserted successfully yang m_psnya.<br>";
               $lastPosLineId = mysqli_insert_id($con); 
            }else{              
                echo "m_vpos_treatment gagal";
                 echo "Error: " . mysqli_error($con);  
            }

           }

        // Access m_vposline_promo
        foreach ($posline['m_vposline_promo'] as $promo) {
            $id =  $promo['id'];
            $pos_id = $lastPosId;
            $posline_id = $lastPosLineId;
            $promo_id = $promo['promo_id'];
            $promoline_id = $promo['promoline_id'];
            $qty = $promo['qty'];
            $discount = $promo['discount'];
            $discountamt = $promo['discountamt'];
            $created_at = $promo['created_at'];
            $updated_at = $promo['updated_at'];
            $created_by = $promo['created_by'];
            $updated_by = $promo['updated_by'];



            $sqlsatu = mysqli_query($con,"insert into m_posline_promo 
            (pos_id, posline_id, promo_id, promoline_id, qty, discount, discountamt, created_at, updated_at, created_by, updated_by) 
            values 
            ('$pos_id', '$posline_id', '$promo_id', '$promoline_id', '$qty', '$discount', '$discountamt', '$created_at', '$updated_at', '$created_by', '$updated_by')");
            $go=mysqli_query($con,$sqlsatu); 

           
            if($sqlsatu){
                echo "m_vposline_promo berhasil";
                echo "Record inserted successfully yang m_psnya.<br>";
               $lastPosLineId = mysqli_insert_id($con); 
            }else{              
                echo "m_vposline_promo gagal";
                 echo "Error: " . mysqli_error($con);  
            }
            }
    }
}
}
  
  
?>