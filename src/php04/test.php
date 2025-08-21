<?php
$addr = [
    [
        'name' => 'たろう',
        'age' => '20',
        'addres' => '東京',
        'tel' => '08066665555',
        'mail' =>'0000@gmail.com'
    ],
    [
        'name' => 'じろう',
        'age' => '25',
        'addres' => '大阪',
        'tel' => '08066665555',
        'mail' => '0000@gmail.com',        
    ],
    [
        'name' => 'さぶろう',
        'age' => '29',
        'addres' => '福岡',
        'tel' => '08066665555',
        'mail' => '0000@gmail.com'
    ]
    ];

    echo '<pre>';
    var_dump($addr);
    echo '</pre>';

    foreach($addr as $a){
        if($a['age'] >= 25){
            echo $a['name'];
            echo '<br>';
        }
    }
