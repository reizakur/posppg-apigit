<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    
    if ($username == 'nakia' && $password == '123123') {
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
    } else if ($username == 'fella' && $password == 'fella123') {
        $response = [
            "status" => 200,
            "message" => "Success",
            "access_token" => "asdassMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
            "data" => [
                [
                    "name" => "fella",
                    "username" => "fella",
                    "password" => "fella123",
                    "pin" => "12345",
                    "nik" => "23432334",
                    "rolepos_id" => 2
                ]
            ]
        ];
    } else {
        // Invalid credentials
        $response = [
            "status" => 401,
            "message" => "Unauthorized"
        ];
    }

    // Send the JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Handle other HTTP methods or requests without POST data
    http_response_code(405); // Method Not Allowed
}
?>
