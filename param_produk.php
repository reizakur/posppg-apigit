<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $icpl = $_POST['icpl'];
 
    if ($icpl == "ICPL29") {
        
        $icplValue = "ICPL29";
        $effectiveDate = "2023-10-01";
        $priceValue = 100.00;
    } elseif ($icpl == "ICPL30") {
        
        $icplValue = "ICPL30";
        $effectiveDate = "2023-10-02";
        $priceValue = 150.00;
    } elseif ($icpl == "ICPL31") {
        
        $icplValue = "ICPL31";
        $effectiveDate = "2023-10-03";
        $priceValue = 200.00;
    } else {
        
        $icplValue = "DefaultICPL";
        $effectiveDate = "2023-10-01";
        $priceValue = 100.00;
    }
    
  
  $data = [  
     "data_m_product" => [
                        [
                            "id_m_product_menu" => "1",
                            // "product_id" => "Product1",
                            "menu_category_id" => "1",
                            // "active_m_product_menu" => "true",
                            "id" => "1",
                            "value" => "100.00",
                            "name" => "Product Name 1",
                            "stocked" => "true",
                            "treatment" => "Treatment1",
                            "sold" => "Sold1",
                            "konsinyasi" => "Konsinyasi1",
                            "mingguan" => "Y",
                            "harian" => "Y",
                            "bulanan" => "N",
                            "uom_id" => "1",
                            "category_id" => "1",
                            // "active_m_product" => "true",
                            // "created_at" => "2023-10-01",
                            // "updated_at" => "2023-10-01",
                            // "created_by" => "User1",
                            // "updated_by" => "User2",
                            // "id_m_product_price" => "1",
                            "icpl" => "$icplValue",
                            "effective" => "$effectiveDate",
                            "price" => $priceValue
                        ],
                        [
                            "id_m_product_menu" => "2",
                            // "product_id" => "Product2",
                            "menu_category_id" => "1",
                            // "active_m_product_menu" => "true",
                            "id" => "2",
                            "value" => "200.00",
                            "name" => "Product Name 2",
                            "stocked" => "true",
                            "treatment" => "Treatment2",
                            "sold" => "Sold2",
                            "konsinyasi" => "Konsinyasi2",
                            "mingguan" => "Y",
                            "harian" => "Y",
                            "bulanan" => "Y",
                            "uom_id" => "2",
                            "category_id" => "2",
                            // "active_m_product" => "true",
                            // "created_at" => "2023-10-01",
                            // "updated_at" => "2023-10-01",
                            // "created_by" => "User1",
                            // "updated_by" => "User2",
                            // "id_m_product_price" => "2",
                            "icpl" => "$icplValue",
                            "effective" => "$effectiveDate",
                            "price" => $priceValue
                        ],
                        [
                            "id_m_product_menu" => "3",
                            // "product_id" => "Product3",
                            "menu_category_id" => "2",
                            // "active_m_product_menu" => "true",
                            "id" => "3",
                            "value" => "300.00",
                            "name" => "Product Name 3",
                            "stocked" => "true",
                            "treatment" => "Treatment3",
                            "sold" => "Sold3",
                            "konsinyasi" => "Konsinyasi3",
                            "mingguan" => "Y",
                            "harian" => "N",
                            "bulanan" => "Y",
                            "uom_id" => "",
                            "category_id" => "",
                            // "active_m_product" => "",
                            // "created_at" => "2023-10-",
                            // "updated_at" => "2023-10-",
                            // "created_by" => "",
                            // "updated_by" => "",
                            // "id_m_product_price" => "3",
                            "icpl" => "$icplValue",
                            "effective" => "$effectiveDate",
                            "price" => $priceValue
                        ],
                    ]
                
            ];


    $response = [
        "status" => 200,
        "message" => "Success",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        "data" => $data
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}else{
    $response = [
        "status" => 201,
        "message" => "Failed"
    ];
    echo json_encode($response);
}
?>