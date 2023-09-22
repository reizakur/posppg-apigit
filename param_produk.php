<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $id_product = $_POST['id_product'];
    if($id_product == '002'){
     $data = [
        [
            "id" => 2,
            "value" => "002",
            "name" => "Bolu terbang",
            "stocked" => "N",
            "treatment" => "N",
            "sold" => "N",
            "konsinyasi" => "N",
            "mingguan" => "N",
            "harian" => "N",
            "bulanan" => "N",
            "uom_id" => 1,
            "category_id" => 1,
            "active" => "Y",
            "created_at" => "2023-09-15 09:40:40.641",
            "updated_at" => "2023-09-15 09:40:40.641",
            "created_by" => 1,
            "updated_by" => 1
 ],
 [
    "id" => 3,
    "value" => "002",
    "name" => "Makan Enak",
    "stocked" => "N",
    "treatment" => "N",
    "sold" => "N",
    "konsinyasi" => "N",
    "mingguan" => "N",
    "harian" => "N",
    "bulanan" => "N",
    "uom_id" => 1,
    "category_id" => 1,
    "active" => "Y",
    "created_at" => "2023-09-15 09:40:40.641",
    "updated_at" => "2023-09-15 09:40:40.641",
    "created_by" => 1,
    "updated_by" => 1
],
    ];

    }else if ($id_product == '003'){
       $data = [
        [
            "id" => 2,
            "value" => "003",
            "name" => "Bolu terbang",
            "stocked" => "N",
            "treatment" => "N",
            "sold" => "N",
            "konsinyasi" => "N",
            "mingguan" => "N",
            "harian" => "N",
            "bulanan" => "N",
            "uom_id" => 1,
            "category_id" => 1,
            "active" => "Y",
            "created_at" => "2023-09-15 09:40:40.641",
            "updated_at" => "2023-09-15 09:40:40.641",
            "created_by" => 1,
            "updated_by" => 1
 ],
 [
    "id" => 3,
    "value" => "003",
    "name" => "Makan Enak",
    "stocked" => "N",
    "treatment" => "N",
    "sold" => "N",
    "konsinyasi" => "N",
    "mingguan" => "N",
    "harian" => "N",
    "bulanan" => "N",
    "uom_id" => 1,
    "category_id" => 1,
    "active" => "Y",
    "created_at" => "2023-09-15 09:40:40.641",
    "updated_at" => "2023-09-15 09:40:40.641",
    "created_by" => 1,
    "updated_by" => 1
],
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
}else{
    $response = [
        "status" => 201,
        "message" => "Failed"
    ];
    echo json_encode($response);
}
?>