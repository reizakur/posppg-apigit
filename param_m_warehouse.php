<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $warehouse_id = $_POST['warehouse_id'];
    if($warehouse_id == 'R00TEST'){
      $response = 
      [
      [
        "icpl" => "ICP999 ",
        "warehouse" => "R00TEST",
        "validfrom" => "2018-09-17",
        "active" => "Y"
    ],
    [
        "icpl" => "ICP777",
        "warehouse" => "R00TEST",
        "validfrom" => "2018-11-27",
        "active" => "Y"
    ],
    [
        "icpl" => "ICP999",
        "warehouse" => "R00TEST",
        "validfrom" => "2019-10-01",
        "active" => "Y"
    ],
    [
        "icpl" => "ICP888",
        "warehouse" => "R00TEST",
        "validfrom" => "2019-10-17",
        "active" => "Y"
    ],
    [
        "icpl" => "ICP999",
        "warehouse" => "R00TEST",
        "validfrom" => "2020-02-21",
        "active" => "Y"
    ],
    [
        "icpl" => "ICP888",
        "warehouse" => "R00TEST",
        "validfrom" => "2020-03-19",
        "active" => "Y"
    ],
    [
        "icpl" => "ICP999",
        "warehouse" => "R00TEST",
        "validfrom" => "2020-04-03",
        "active" => "Y"
    ]
    ];

    }else if($warehouse_id == 'BP063302'){
      $response=[
       [ 
        "icpl" => "ICBP03",
        "warehouse" => "BP063302",
        "validfrom" => "2022-10-05",
        "active" => "Y"
      ]
      ];
        
    }else if($warehouse_id == 'BP010101'){
    $response =  [[ 
      "icpl" => "ICBP01",
     "warehouse" => "BP010101",
     "validfrom" => "2022-10-07",
     "active" => "Y"]];
       
    }else{
      $response = [
        "status" => 201,
        "message" => "Failed",
    ];
    }
    $response = [
        "status" => 200  .$warehouse_id ,
        "message" => "Success",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        "data" => $response
        
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
