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
                "id" => 1,
                "active" => "Y",
                "name" => "SPA DONG"
            ],
            [
                "id" => 2,
                "active" => "Y",
                "name" => "MINUM AJA"
            ],
            [
                "id" => 3,
                "active" => "Y",
                "name" => "GUIDE"
            ]
            ];
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