<?php
$arr = [
    [
        'name'=>'Miamr',
        'age'=>'99'
    ],
    [
        'name'=>'NeMiamr',
        'age'=>'88'
    ],
    [
        'name'=>'Vasia',
        'age'=>'5'
    ]
];
file_put_contents('serialize', serialize($arr));
