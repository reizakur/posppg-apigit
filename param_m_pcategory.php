<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $id_m_pcategory = $_POST['id_m_pcategory'];
    if($id_m_pcategory == 'K001'){
     $data =   [
            [
                "id" => 1,
                "name" => "SPA",
                "value" => "K001",
                "active" => "Y"
            ],
            [
                "id" => 2,
                "name" => "LULURAN",
                "value" => "K001",
                "active" => "Y"
            ]
            ];
    }else if ($id_m_pcategory == '002'){
        $data =   [
        [
            "id" => 1,
            "name" => "MIE AYAM",
            "value" => "002",
            "active" => "Y"
        ],
        [
            "id" => 2,
            "name" => "NASI GOYENG",
            "value" => "002",
            "active" => "Y"
        ]
        ];  
    }else{
      return $response = [
            "status" => 200,
            "message" => "Bisa Kok Cuman ID nya ga kecatet"
        ];
    }
 

    $response = [
        "status" => 200,
        "message" => "Success",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        "data" => $data
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}else[
    $response = [
        "status" => 201,
        "message" => "Failed",
    ];
    echo json_encode($response);
}
?>