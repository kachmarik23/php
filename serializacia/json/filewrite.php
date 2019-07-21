<?php
$arr = [
    [
        'name'=>'Miamr',
        'age'=>99,
        'bool'=> false
    ],
    [
        'name'=>'NeMiamr',
        'age'=>88,
        'bool'=> false
    ],
    [
        'name'=>'Vasia',
        'age'=>5,
        'bool'=> false
    ]
];
$json_Data=json_encode($arr);
file_put_contents('serialize', $json_Data);
