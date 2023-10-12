<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company'];
    $geturl = $_POST['geturl'];
    $periode = $_POST['periode'];
    if($periode == ''){
    $response = [
        "status" => 200,
        "message" => "Success",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        "data" => [
            [
                "name" => "TEPUNG TERIGU PROTEIN TINGGI",
                "value" => "1000010000103",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "N",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "TEPUNG PROTEIN RENDAH (CREAM)",
                "value" => "1000010000303",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "N",
                "mingguan" => "Y",
                "bulanan" => "Y",
                "konsinyasi" => "N"
            ],
            [
                "name" => "TEPUNG TERIGU PROTEIN SEDANG",
                "value" => "1000010000503",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "N",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "TEPUNG MAIZENA",
                "value" => "1000010018003",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "N",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "MARGARINE (BUNS)",
                "value" => "1000020002203",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "N",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "MARGARINE (CREAM)",
                "value" => "1000020002303",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "N",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "IMPROVER S KIMO",
                "value" => "1000040004003",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "N",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "IMPROVER",
                "value" => "1000040004103",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "N",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "GLUTEN",
                "value" => "1000040005003",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "N",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "NOVARIS FULL CREAM MILK P",
                "value" => "1000050005403",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "N",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ]
        ]
    ];
}else if($periode == 'D'){
    $response = [
        "status" => 200,
        "message" => "Success",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        "data" => [
            [
                "name" => "TEPUNG TERIGU PROTEIN TINGGI",
                "value" => "1000010000103",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "Y",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "TEPUNG PROTEIN RENDAH (CREAM)",
                "value" => "1000010000303",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "Y",
                "mingguan" => "Y",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "TEPUNG TERIGU PROTEIN SEDANG",
                "value" => "1000010000503",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "Y",
                "mingguan" => "Y",
                "bulanan" => "Y",
                "konsinyasi" => "N"
            ],           
        ]
    ];
}else if($periode == 'W'){
    $response = [
        "status" => 200,
        "message" => "Success",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        "data" => [
            [
                "name" => "TEPUNG MAIZENA",
                "value" => "1000010018003",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "N",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "MARGARINE (BUNS)",
                "value" => "1000020002203",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "Y",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "MARGARINE (CREAM)",
                "value" => "1000020002303",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "Y",
                "mingguan" => "Y",
                "bulanan" => "Y",
                "konsinyasi" => "N"
            ],         
        ]
    ];
}else if($periode == 'M'){
    $response = [
        "status" => 200,
        "message" => "Success",
        "access_token" => "asadaMMsnCAq28NGKqEf6jRueKLsf0wFnAcz2dOrPQF53GYS9AUzwWtiNFKQRniFb",
        "data" => [
            [
                "name" => "IMPROVER S KIMO",
                "value" => "1000040004003",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "Y",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "IMPROVER",
                "value" => "1000040004103",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "Y",
                "mingguan" => "Y",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ],
            [
                "name" => "GLUTEN",
                "value" => "1000040005003",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "Y",
                "mingguan" => "Y",
                "bulanan" => "Y",
                "konsinyasi" => "N"
            ],
            [
                "name" => "NOVARIS FULL CREAM MILK P",
                "value" => "1000050005403",
                "uomName" => "Gram",
                "uomSymbol" => "Gram",
                "categoryValue" => "SCIPC001",
                "categoryName" => "BAHAN MENTAH",
                "stocked" => "Y",
                "purchased" => "Y",
                "sold" => "Y",
                "bom" => "N",
                "active" => "Y",
                "harian" => "Y",
                "mingguan" => "N",
                "bulanan" => "N",
                "konsinyasi" => "N"
            ]
        ]
    ];
}esle{

}
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    $response = [
        "status" => 201,
        "message" => "Failed",
    ];
    echo json_encode($response);
}
