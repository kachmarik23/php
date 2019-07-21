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
print_r($json_Data);