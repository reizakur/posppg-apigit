<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $response = [
        "status" => 200,
        "message" => "Success",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        "data" => [
            [
                "name" => "BAZAAR ATRIUM DSM ALL BRAND 1 S/D 30 SEP",
                "value" => "500434P",
                "active" => "Y"
            ],
            [
                "name" => "BAZAAR BANDARA JUANDA 1 A GATE 8 SURABAY",
                "value" => "500525P",
                "active" => "Y"
            ],
            [
                "name" => "BAZAAR BANDARA JUANDA 1 A SURABAYA",
                "value" => "500526P",
                "active" => "Y"
            ],
            [
                "name" => "BAZAAR BANDARA KUALANAMO MEDAN II 2018",
                "value" => "500584P",
                "active" => "Y"
            ],
            [
                "name" => "BAZAAR BDR BANJARMASIN POLO",
                "value" => "500414P",
                "active" => "N"
            ],
            [
                "name" => "BAZAAR BLR BINTAN",
                "value" => "500608P",
                "active" => "Y"
            ],
            [
                "name" => "BAZAAR BSB BALIKPAPAN (JULI'2016)",
                "value" => "500495P",
                "active" => "Y"
            ],
            [
                "name" => "BAZAAR GAMBIR EXPO KEMAYARON P",
                "value" => "558023P",
                "active" => "N"
            ],
        ]
    ];
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