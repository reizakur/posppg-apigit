<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $icpl = $_POST['icpl']; 
  $data = [ 
                    [
                        "id_y" => "1",
                        "name" => "Category Y1", 
                        "parent_id" => "",
                        "summary" => "Y",
                        "data_m_product_menu"=> []
                    ], 
                        [
                            "id_n" => "1",
                            "name" => "Category N1", 
                            "parent_id" => "1",
                            "summary" => "N",
                            "data_m_product_menu"=> []
                        ],
                    // ],

                        [
                            "id_y" => "2",
                            "name" => "Category Y2", 
                            "parent_id" => "",
                            "summary" => "Y",
                            "data_m_menu_category_n" => []
                        ],
                        [
                            "id_y" => "3",
                            "name" => "Category Y3",                        
                            "parent_id" => "",
                            "summary" => "Y",                            
                            "data_m_menu_category_n" => []
                        ],
                        [
                            "id_n" => "1",
                            "name" => "Category N1",
                            "parent_id" => "3",
                            "summary" => "N",
                            "data_m_product_menu" => [
                                        [
                                            "id_m_product" => "1",
                                           
                                        ],
                                        [
                                            "id_m_product" => "2",
                                        ]
                                    ]
                        ],
                        [
                            "id_n" => "2",
                            "name" => "Category N2",                                   
                            "parent_id" => "3",
                            "summary" => "N",
                            "data_m_product_menu" => [
                                        [
                                            "id_m_product" => "3",
                                        ],
                                    ]
                        ],

            ];
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