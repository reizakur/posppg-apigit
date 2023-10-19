<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company'];
    $geturl = $_POST['geturl'];
    $icpl = $_POST['icpl'];
    $data = [
        "data_m_promo_m_promo_activation" => [
            [
                "id_promo" => 1,  // Auto increment, you can set the appropriate value
                "name" => "Promotion 1",
                "ptype" => "Discount",
                "price" => 100,
                "qtybeli" => 2,
                "qtypromo" => 1,
                "discount" => 10,
                "discountamt" => 0,
                "minimalamt" => 50,
                "flexible" => "Yes",
                "get_free" => "No",
                "max_free" => 0,
                "choose_free" => "No",
                "multiple_apply" => "No",
                "online_only" => "Yes",
                "offline_only" => "No",
                "dine_in_only" => "No",
                "delivery_only" => "Yes",
                "limit_promo_outlet" => "Outlet A",
                "limit_promo_customer" => "Customer Type A",
                "limit_period_outlet" => "Outlet A",
                "limit_period_customer" => "Customer Type B",
                "id_m_promo_activation" => 101,
                "startdate" => "2023-10-01",
                "enddate" => "2023-10-31",
                "starttime" => "08:00 AM",
                "endtime" => "10:00 PM",
                "allwarehouse" => "No",
                "allbandara" => "Yes",
                "allnonebandara" => "No",
                "data_m_promo_buy" => [
                    [ 
                        "id_m_promo_buy" => 1,  // Auto increment, you can set the appropriate value
                        "promo_id" => 1,  // Corresponds to the id_promo of the parent promotion
                        "product_id" => 1,
                        "pattern" => "Any",
                        "qty_min" => 3,
                        "qty_max" => 5,
                    ],
                    [
                    "id_m_promo_buy" => 2,  // Auto increment, you can set the appropriate value
                    "promo_id" => 1,  // Corresponds to the id_promo of the parent promotion
                    "product_id" => 3,
                    "pattern" => "Any",
                    "qty_min" => 3,
                    "qty_max" => 5,
                    ]
                ],
            ],
            [
                "id_promo" => "", //Auto increment
                "name" => "",
                "ptype" => "",
                "price" => "",
                "qtybeli" => "",
                "qtypromo" => "",
                "discount" => "",
                "discountamt" => "",
                "minimalamt" => "",
                "flexible" => "",
                "get_free" => "",
                "max_free" => "",
                "choose_free" => "",
                "multiple_apply" => "",
                "online_only" => "",
                "offline_only" => "",
                "dine_in_only" => "",
                "delivery_only" => "",
                "limit_promo_outlet" => "",
                "limit_promo_customer" => "",
                "limit_period_outlet" => "",
                "limit_period_customer"  => "",
                "id_m_promo_activation" => "",
                "startdate" => "",
                "enddate" => "",
                "starttime" => "",
                "endtime" => "",
                "allwarehouse" => "",
                "allbandara" => "",
                "allnonebandara" => "",
                "data_m_promo_buy" => [],
            ],

        ]

    ];
    $response = [   
        "status" => 200,
        "message" => "Success",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        "data" => $data
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    $response = [
        "status" => 201,
        "message" => "Failed"
    ];
    echo json_encode($response);
}
