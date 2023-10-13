 

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company'];
    $geturl = $_POST['geturl'];
    $id_warehouse = $_POST['id_warehouse'];
    echo("damn 666");
    echo($id_warehouse);
if($id_warehouse = "1500434P"){
    echo("damn 111");
    $response = [
        "status" => 200,
        "message" => "Success connRetail",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        "data" => [
            [
            "id" => "001",
            "warehouse_id" => "1500434P",
            "name" => "Shift 1",
            "shiftin" => "08:00 AM",
            "shiftout" => "16:00 PM",
            "active" => "true",
            "created_at" => "2023-01-15 14:30:00",
            "updated_at" => "2023-08-20 09:45:00",
            "created_by" => "John Doe",
            "updated_by" => "Jane Smith"
        ],[
    
            "id" => "002",
            "warehouse_id" => "1500434P",
            "name" => "Shift 2",
            "shiftin" => "16:00 AM",
            "shiftout" => "23:00 PM",
            "active" => "true",
            "created_at" => "2023-02-20 09:15:00",
            "updated_at" => "2023-09-25 11:20:00",
            "created_by" => "Alice Johnson",
            "updated_by" => "Bob Williams"
          ] ,
    [
        "id" => "003",
        "warehouse_id" => "1500434P",
        "name" => "Shift 3",
        "shiftin" => "01:00 AM",
        "shiftout" => "08:30 PM",
        "active" => "true",
        "created_at" => "2023-03-10 16:45:00",
        "updated_at" => "2023-10-15 14:50:00",
        "created_by" => "Eva Brown",
        "updated_by" => "Michael Davis"
    ]
     
        ]
    ];
   
    }else if($id_warehouse = "2500434P"){
        echo("damn 333");
        $response = [
        "status" => 200,
        "message" => "Success connRetail",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        
        "data" => [
        [
        "id" => "001",
        "warehouse_id" => "2500434P",
        "name" => "Shift 1",
        "shiftin" => "08:00 AM",
        "shiftout" => "05:00 PM",
        "active" => "true",
        "created_at" => "2023-01-15 14:30:00",
        "updated_at" => "2023-08-20 09:45:00",
        "created_by" => "John Doe",
        "updated_by" => "Jane Smith"
        ],
        [
            "id" => "002",
            "warehouse_id" => "2500434P",
            "name" => "Shift 2",
            "shiftin" => "07:30 AM",
            "shiftout" => "04:30 PM",
            "active" => "true",
            "created_at" => "2023-02-20 09:15:00",
            "updated_at" => "2023-09-25 11:20:00",
            "created_by" => "Alice Johnson",
            "updated_by" => "Bob Williams"

        ]
        ]
        ];

}else if($id_warehouse = "3500434P"){
    echo("damn 444");
    $response = [
        "status" => 200,
        "message" => "Success connRetail",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        "data" => [
        [
        "id" => "002",
        "warehouse_id" => "3500434P",
        "name" => "Shift 1",
        "shiftin" => "07:30 AM",
        "shiftout" => "04:30 PM",
        "active" => "true",
        "created_at" => "2023-02-20 09:15:00",
        "updated_at" => "2023-09-25 11:20:00",
        "created_by" => "Alice Johnson",
        "updated_by" => "Bob Williams"
      ],

      [
        "id" => "003",
        "warehouse_id" => "3500434P",
        "name" => "Shift 2",
        "shiftin" => "09:00 AM",
        "shiftout" => "06:30 PM",
        "active" => "true",
        "created_at" => "2023-03-10 16:45:00",
        "updated_at" => "2023-10-15 14:50:00",
        "created_by" => "Eva Brown",
        "updated_by" => "Michael Davis"
        ]
        ]
      ];
      echo("damn cccc");
      echo json_encode($response);
    }else{
        echo("damn ooooo");
    
        $response = [
            "status" => 404,
            "message" => "Gagal",
            "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
              ];
            echo json_encode($response);
    } 
 
    echo("damn pppp");
     
}

    ?>