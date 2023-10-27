<?php

// <!-- simple arrays -->
$numbers = [1, 2, 3, 4, 5, 6];
$fruits = array('mangoes', 'lemons', 'banana');

// echo $fruits[1];

// print_r ($fruits);
// var_dump ($numbers);

// $person = [
//     'first_name' => 'NMoise',
//     'breed' => 'Pure Breed',
//     'email' => 'nmoise@gmail.com',
// ];
$people = [
    [
        'first_name' => 'NMoise',
        'last_name' => 'Pure ',
        'email' => 'nmoise@gmail.com',
    ],
    [
        'first_name' => 'benjamin',
        'last_name' => ' Breed',
        'email' => 'benjm@gmail.com',
    ],
    [
        'first_name' => 'olivier',
        'last_name' => 'black',
        'email' => 'olivier@gmail.com',
    ]

];
echo $people [2]['email'];
// var_dump(json_encode($people));
