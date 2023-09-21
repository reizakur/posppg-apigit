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
                "name" => "Makangan",
                "value" => "K001",
                "active" => "Y"
            ],
            [
                "id" => 2,
                "name" => "Waloyo",
                "value" => "002",
                "active" => "Y"
            ]
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