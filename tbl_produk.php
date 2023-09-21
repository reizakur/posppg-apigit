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
                "name" => "Nakia",
                "username" => "nakia",
                "password" => "123123",
                "pin" => "123123",
                "nik" => "854644",
                "rolepos_id" => 1
            ]
        ]
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}else{
    $response = [
        "status" => 400,
        "message" => "Success",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        "data" => [
            [
                "name" => "Nakia",
                "username" => "nakia",
                "password" => "123123",
                "pin" => "123123",
                "nik" => "854644",
                "rolepos_id" => 1
            ]
        ]
    ];
    echo json_encode($response);
}
?>