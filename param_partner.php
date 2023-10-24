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
            "ptype" => "TypeA",
            "value" => 100,
            "name" => "John",
            "pt_id" => 101,
            "hp" => 12345
        ],
        [
            "id" => 2,
            "ptype" => "TypeB",
            "value" => 200,
            "name" => "Alice",
            "pt_id" => 102,
            "hp" => 67890
        ],
        [
            "id" => 3,
            "ptype" => "TypeC",
            "value" => 150,
            "name" => "Bob",
            "pt_id" => 103,
            "hp" => 55555
        ],
        [
            "id" => 4,
            "ptype" => "TypeA",
            "value" => 120,
            "name" => "Eva",
            "pt_id" => 104,
            "hp" => 98765
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
            "ptype" => "TypeA",
            "value" => 100,
            "name" => "John",
            "pt_id" => 101,
            "hp" => 12345
        ],
        [
            "id" => 2,
            "ptype" => "TypeB",
            "value" => 200,
            "name" => "Alice",
            "pt_id" => 102,
            "hp" => 67890
        ],
        [
            "id" => 3,
            "ptype" => "TypeC",
            "value" => 150,
            "name" => "Bob",
            "pt_id" => 103,
            "hp" => 55555
        ],
        [
            "id" => 4,
            "ptype" => "TypeA",
            "value" => 120,
            "name" => "Eva",
            "pt_id" => 104,
            "hp" => 98765
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
            "ptype" => "TypeA",
            "value" => 100,
            "name" => "John",
            "pt_id" => 101,
            "hp" => 12345
        ],
        [
            "id" => 2,
            "ptype" => "TypeB",
            "value" => 200,
            "name" => "Alice",
            "pt_id" => 102,
            "hp" => 67890
        ],
        [
            "id" => 3,
            "ptype" => "TypeC",
            "value" => 150,
            "name" => "Bob",
            "pt_id" => 103,
            "hp" => 55555
        ],
        [
            "id" => 4,
            "ptype" => "TypeA",
            "value" => 120,
            "name" => "Eva",
            "pt_id" => 104,
            "hp" => 98765
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
            "ptype" => "TypeA",
            "value" => 100,
            "name" => "Jaja",
            "pt_id" => 101,
            "hp" => 12345
        ],
        [
            "id" => 2,
            "ptype" => "TypeB",
            "value" => 200,
            "name" => "Kidut",
            "pt_id" => 102,
            "hp" => 67890
        ],
        [
            "id" => 3,
            "ptype" => "TypeC",
            "value" => 150,
            "name" => "KARTA",
            "pt_id" => 103,
            "hp" => 55555
        ],
        [
            "id" => 4,
            "ptype" => "TypeA",
            "value" => 120,
            "name" => "Eva",
            "pt_id" => 104,
            "hp" => 98765
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