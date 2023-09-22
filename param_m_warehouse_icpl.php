<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $id_m_warehouse_icpl = $_POST['id_m_warehouse_icpl'];
    $senderin = $_POST['sender'];
    echo $id_m_warehouse_icpl;
    echo $senderin;
    // if($id_m_warehouse_icpl == 'BP063302'){
    //  $data = [
    //  [
    //     "id" => 1,
    //     "warehouse_id"=> BP063302,
    //     "icpl"=> "ICPL01",
    //     "validfrom"=> "2023-01-03 00:00:00",
    //     "active"=> "Y"
    // ],
    // [
    //     "id"=> 3,
    //     "warehouse_id"=> BP063302,
    //     "icpl"=> "ICPL03",
    //     "validfrom"=> "2023-09-01 00:00:00",
    //     "active"=> "Y"
    // ]
    // ];

    // }else if ($id_m_warehouse_icpl == 'R00TEST'){
    //   $data = [
    //         [
    //           "id" => 1,
    //           "warehouse_id"=> 'R00TEST',
    //           "icpl"=> "ICPL015",
    //           "validfrom"=> "2023-01-03 00:00:00",
    //           "active"=> "Y"
    //       ],
    //       [
    //           "id"=> 3,
    //           "warehouse_id"=> 3,
    //           "icpl"=> "ICPL013",
    //           "validfrom"=> "2023-09-01 00:00:00",
    //           "active"=> "Y"
    //       ]
    //       ];
    // }else{
    //   return $response = [
    //         "status" => 200,
    //         "message" => "Bisa Kok Cuman ID nya ga kecatet"
    //     ];
    // }
 

    // $response = [
    //     "status" => 200,
    //     "message" => "Success",
    //     "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
    //     "data" => $data
    // ];
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