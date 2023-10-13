<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
  if($company == 'connSPA'){
    $response = [
        "status" => 200,
        "message" => "Success connSPA",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        
        "data" => [
            [
                "name" => "BAZAAR SPA *YANG INI ADA SHIFT",
                "value" => "1500434P",
                "active" => "Y"
            ],
            [
                "name" => "SPA BAZAAR BANDARA JUANDA 1 A GATE 8 SURABAY",
                "value" => "1500525P",
                "active" => "Y"
            ],
            [
                "name" => "SPA BAZAAR BANDARA JUANDA 1 A SURABAYA",
                "value" => "1500526P",
                "active" => "Y"
            ],
            [
                "name" => "SPA BAZAAR BANDARA KUALANAMO MEDAN II 2018",
                "value" => "1500584P",
                "active" => "Y"
            ],
            [
                "name" => "SPA BAZAAR BDR BANJARMASIN POLO",
                "value" => "1500414P",
                "active" => "N"
            ],
            [
                "name" => "SPA BAZAAR BLR BINTAN",
                "value" => "1500608P",
                "active" => "Y"
            ],
            [
                "name" => "SPA BAZAAR BSB BALIKPAPAN (JULI'2016)",
                "value" => "1500495P",
                "active" => "Y"
            ],
            [
                "name" => "SPA BAZAAR GAMBIR EXPO KEMAYARON P",
                "value" => "1558023P",
                "active" => "N"
            ],
        ]
   
    ];
    
  }else if($company == 'connFnB'){
    $response = [
        "status" => 200,
        "message" => "Success connFnB",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        
        "data" => [
            [
                "name" => "FnB BAZAAR ATRIUM DSM ALL BRAND 1 S/D 30 SEP * ADA SHIFT",
                "value" => "2500434P",
                "active" => "Y"
            ],
            [
                "name" => "FnB BAZAAR BANDARA JUANDA 1 A GATE 8 SURABAY",
                "value" => "2500525P",
                "active" => "Y"
            ],
            [
                "name" => "FnB BAZAAR BANDARA JUANDA 1 A SURABAYA",
                "value" => "2500526P",
                "active" => "Y"
            ],
            [
                "name" => "FnB BAZAAR BANDARA KUALANAMO MEDAN II 2018",
                "value" => "2500584P",
                "active" => "Y"
            ],
            [
                "name" => "FnB BAZAAR BDR BANJARMASIN POLO",
                "value" => "2500414P",
                "active" => "N"
            ],
            [
                "name" => "FnB BAZAAR BLR BINTAN",
                "value" => "2500608P",
                "active" => "Y"
            ],
            [
                "name" => "FnB BAZAAR BSB BALIKPAPAN (JULI'2016)",
                "value" => "2500495P",
                "active" => "Y"
            ],
            [
                "name" => "FnB BAZAAR GAMBIR EXPO KEMAYARON P",
                "value" => "2558023P",
                "active" => "N"
            ],
        ]
   
    ];

  }else if($company == 'connRetail'){
    $response = [
        "status" => 200,
        "message" => "Success connRetail",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        
        "data" => [
            [
                "name" => "Retail BAZAAR ATRIUM DSM ALL BRAND 1 S/D 30 SEP *ada shit",
                "value" => "3500434P",
                "active" => "Y"
            ],
            [
                "name" => "Retail BAZAAR BANDARA JUANDA 1 A GATE 8 SURABAY",
                "value" => "3500525P",
                "active" => "Y"
            ],
            [
                "name" => "Retail BAZAAR BANDARA JUANDA 1 A SURABAYA",
                "value" => "3500526P",
                "active" => "Y"
            ],
            [
                "name" => "Retail BAZAAR BANDARA KUALANAMO MEDAN II 2018",
                "value" => "3500584P",
                "active" => "Y"
            ],
            [
                "name" => "Retail BAZAAR BDR BANJARMASIN POLO",
                "value" => "3500414P",
                "active" => "N"
            ],
            [
                "name" => "Retail BAZAAR BLR BINTAN",
                "value" => "3500608P",
                "active" => "Y"
            ],
            [
                "name" => "Retail BAZAAR BSB BALIKPAPAN (JULI'2016)",
                "value" => "3500495P",
                "active" => "Y"
            ],
            [
                "name" => "Retail BAZAAR GAMBIR EXPO KEMAYARON P",
                "value" => "3558023P",
                "active" => "N"
            ],
        ]
   
    ];
  }else{

  }
    
    header('Content-Type: application/json');
    echo json_encode($response);
}else{
    $response = [
        "status" => 201,
        "message" => "Failed",
    ];
    echo json_encode($response);
}
?>