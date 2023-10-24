<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $warehouse_id = $_POST['warehouse_id']; 
  if($warehouse_id == "1500434P"){
    $response = [
        "status" => 200,
        "message" => "Success",
         "data" => [ 
            [
                "id" => 1,
                "warehouse_id" => 101,
                "name" => "ROOM 10",
            ],
            [
                "id" => 2,
                "warehouse_id" => 102,
                "name" => "ROOM 12",
            ],
            [
                "id" => 3,
                "warehouse_id" => 103,
                "name" => "ROOM 13",
            ],
            [
                "id" => 4,
                "warehouse_id" => 104,
                "name" => "ROOM 17",
            ],
    ]    // Add more rows as needed
    ]; 
  }else if($warehouse_id == "1500525P"){
    $response = [
        "status" => 200,
        "message" => "Success",
         "data" => [ 
            [
                "id" => 1,
                "warehouse_id" => 201,
                "name" => "ROOM 11",
            ],
            [
                "id" => 2,
                "warehouse_id" => 202,
                "name" => "ROOM 121",
            ],
            [
                "id" => 3,
                "warehouse_id" => 203,
                "name" => "ROOM 136",
            ],
            [
                "id" => 4,
                "warehouse_id" => 204,
                "name" => "ROOM 172",
            ],
    ]    // Add more rows as needed
    ]; 

  }else if($warehouse_id == "1500526P"){
    $response = [
        "status" => 200,
        "message" => "Success",
         "data" => [ 
            [
                "id" => 1,
                "warehouse_id" => 301,
                "name" => "ROOM 110",
            ],
            [
                "id" => 2,
                "warehouse_id" => 302,
                "name" => "ROOM 112",
            ],
            [
                "id" => 3,
                "warehouse_id" => 303,
                "name" => "ROOM 131",
            ],
            [
                "id" => 4,
                "warehouse_id" => 304,
                "name" => "ROOM 175",
            ],
    ]    // Add more rows as needed
    ]; 
  }else if($warehouse_id == '1500584P'){
    $response = [
        "status" => 200,
        "message" => "Success",
         "data" => [ 
            [
                "id" => 1,
                "warehouse_id" => 401,
                "name" => "ROOM 101",
            ],
            [
                "id" => 2,
                "warehouse_id" => 402,
                "name" => "ROOM 122",
            ],
            [
                "id" => 3,
                "warehouse_id" => 403,
                "name" => "ROOM 133",
            ],
            [
                "id" => 4,
                "warehouse_id" => 404,
                "name" => "ROOM 175",
            ],
    ]    // Add more rows as needed
    ]; 
  }else{
    return $response = [
        "status" => 200,
        "message" => "Bisa Kok Cuman ID nya ga kecatet"
    ]; 
  }

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