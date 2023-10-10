<?php
//
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company']; 
    $geturl = $_POST['geturl']; 
    $id_m_warehouse_icpl = $_POST['id_m_warehouse_icpl'];
    $senderin = $_POST['sender'];
    echo $id_m_warehouse_icpl;
    echo $senderin;
    if($id_m_warehouse_icpl == '1500434P'){
     $data = [
     [
        "id" => 1,
        "warehouse_id"=> "1500434P",
        "icpl"=> "ICPL01",
        "validfrom"=> "2023-01-03 00:00:00",
        "active"=> "Y"
    ],
    [
        "id"=> 3,
        "warehouse_id"=> "1500434P",
        "icpl"=> "ICPL03",
        "validfrom"=> "2023-09-01 00:00:00",
        "active"=> "Y"
    ]
    ];

    }else if($id_m_warehouse_icpl == '1500525P'){
     $data = [
     [
        "id" => 1,
        "warehouse_id"=> "1500525P",
        "icpl"=> "ICPL01",
        "validfrom"=> "2023-01-03 00:00:00",
        "active"=> "Y"
    ],
    [
        "id"=> 3,
        "warehouse_id"=>"1500525P",
        "icpl"=> "ICPL03",
        "validfrom"=> "2023-09-01 00:00:00",
        "active"=> "Y"
    ]
    ];

    } else if($id_m_warehouse_icpl == '1500526P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "1500526P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"1500526P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
    }else if($id_m_warehouse_icpl == '1500584P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "1500584P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"1500584P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
    }else if($id_m_warehouse_icpl == '1500414P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "1500414P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"1500414P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
    }else if($id_m_warehouse_icpl == '1500608P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "1500608P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"1500608P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
    }else if($id_m_warehouse_icpl == '1500495P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "1500495P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"1500495P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
    }else if($id_m_warehouse_icpl == '1558023P'){
     $data = [
     [
        "id" => 1,
        "warehouse_id"=> "1558023P",
        "icpl"=> "ICPL01",
        "validfrom"=> "2023-01-03 00:00:00",
        "active"=> "Y"
    ],
    [
        "id"=> 3,
        "warehouse_id"=>"1558023P",
        "icpl"=> "ICPL03",
        "validfrom"=> "2023-09-01 00:00:00",
        "active"=> "Y"
    ]
    ];

}else if($id_m_warehouse_icpl == '2500434P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "2500434P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"2500434P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
    }else if($id_m_warehouse_icpl == '2500525P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "2500525P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"2500525P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
    }else if($id_m_warehouse_icpl == '2500526P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "2500526P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"2500526P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
    }else if($id_m_warehouse_icpl == '500434P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "500434P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"500434P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
    }else if($id_m_warehouse_icpl == '2500414P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "2500414P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"2500414P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
    }else if($id_m_warehouse_icpl == '2500608P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "2500608P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"2500608P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
       }else if($id_m_warehouse_icpl == '2500495P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "2500495P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"2500495P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
    }else if($id_m_warehouse_icpl == '2558023P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "2558023P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"2558023P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
       }else if($id_m_warehouse_icpl == '3500434P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "3500434P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"3500434P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
       }else if($id_m_warehouse_icpl == '3500525P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "3500525P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"3500525P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
       }else if($id_m_warehouse_icpl == '3500526P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "3500526P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"3500526P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
       }else if($id_m_warehouse_icpl == '3500584P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "3500584P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"3500584P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
       }else if($id_m_warehouse_icpl == '3500414P'){
        $data = [
        [
           "id" => 1,
           "warehouse_id"=> "3500414P",
           "icpl"=> "ICPL01",
           "validfrom"=> "2023-01-03 00:00:00",
           "active"=> "Y"
       ],
       [
           "id"=> 3,
           "warehouse_id"=>"3500414P",
           "icpl"=> "ICPL03",
           "validfrom"=> "2023-09-01 00:00:00",
           "active"=> "Y"
       ]
       ];
   
       }else if ($id_m_warehouse_icpl == '3500414P'){
      $data = [
            [
              "id" => 1,
              "warehouse_id"=> '3500414P',
              "icpl"=> "ICPL015",
              "validfrom"=> "2023-01-03 00:00:00",
              "active"=> "Y"
          ],
          [
              "id"=> 3,
              "warehouse_id"=> '3500414P',
              "icpl"=> "ICPL013",
              "validfrom"=> "2023-09-01 00:00:00",
              "active"=> "Y"
          ]
          ];
    }else if ($id_m_warehouse_icpl == '3500495P'){
        $data = [
              [
                "id" => 1,
                "warehouse_id"=> '3500495P',
                "icpl"=> "ICPL015",
                "validfrom"=> "2023-01-03 00:00:00",
                "active"=> "Y"
            ],
            [
                "id"=> 3,
                "warehouse_id"=> '3500495P',
                "icpl"=> "ICPL013",
                "validfrom"=> "2023-09-01 00:00:00",
                "active"=> "Y"
            ]
            ];
      }else if ($id_m_warehouse_icpl == '3558023P'){
        $data = [
              [
                "id" => 1,
                "warehouse_id"=> '3558023P',
                "icpl"=> "ICPL015",
                "validfrom"=> "2023-01-03 00:00:00",
                "active"=> "Y"
            ],
            [
                "id"=> 3,
                "warehouse_id"=> '3558023P',
                "icpl"=> "ICPL013",
                "validfrom"=> "2023-09-01 00:00:00",
                "active"=> "Y"
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
}else{
    $response = [
        "status" => 201,
        "message" => "Failed"
    ];
    echo json_encode($response);
}
?>