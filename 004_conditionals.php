<?php
// --------------------------conditionals in php-----------------------------------
/*
less than (<)
greater than(>)
less than or equal to <=
greater than or equal to >=
equal ==
not equal !=
strictly not equal !==
identical ===
not identical !===
*/
// ---------------------------if statements---------------------------------------
/*
** if statements syntax
if (condition){
    //code to be executed when condition is true;
}
else{
    //code to be executed when condition is false;
    }

*/ 
// this in case you only need two conditions only 
// $age = 25;
// if ($age >= 16){
//     echo 'you are old enough to vote your president';
// }else{
//     echo 'you are not old enough to vote the president';
// }
$t = date('H');
if ($t< 12){
    echo 'Good Morning';
}if ($t<12) {
    echo ',  Good Afternoon are you having a good day!';
} else {
    echo 'Good Evening we hope you had a good day with us ';
}





?>