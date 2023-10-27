<?php
/*
-------------------------------PHP DATA TYPES --------------------------------

String   - a series of character surrounded by quotes
Integer  - whole numbers
Arrays   - special variables which can hold more than one value
Float    -decimal numbers
Booleans - true or false
Objects   - a class
Resources -special variables that can hold a resource
NULL      - empty variables
*/
// --------------------------Variables rules---------------------------------------

// variables must be prefixed with $ 
// variables must be started with a letter or underscore character
// variables can't started with a number
$name = 'NMoise';   // string
$age = 40;   // integer
$has_kids =true; // booleans
$cash_in_hands = 203.75 ; // floating


// echo $name. 'is'. $age. 'years old'.'with'.$has_kids.$cash_in_hands.'rwf';
// echo "${name} is ${age} years old ${has_kids}";
// var_dump($cash_in_hands);
$x = 5+5;
// echo $x - 4;
// echo 10/2;
// echo 10%3;

define ('Host',' localhost');
define('DB_name','dev_db');
echo DB_name;



































?>