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
// $t = date('H');
// if ($t < 12){
//     echo 'Good Morning';
// }elseif ($t < 17) {
//     echo ',  Good Afternoon are you having a good day!';
// } else {
//     echo 'Good Evening we hope you had a good day with us ';
// }


$POST = [ 'Moise'];


// if (!empty($POST)) {
//     // we must have some details or infos in  $post array space
//     echo $POST[0];
// } else {
//     // to have this output printed out on the screen we have to delete everything in $post array [NIZEYIMANA Moise]
//     echo "No post was made yet ";
// }
// here are one line code that can perform the same task as the above one 

// echo !empty ($POST) ? $POST [0] : 'No post made yet ';

// $firstPost = $POST[0] ?? null;

// echo $firstPost;

$favColor = ['yellow'];

switch ($favColor){
    case 'red':
        echo 'your favorite color is red';
        break;
    case 'blue':
        echo  'you favorite color is blue';
        break;
    case 'yellow':
        echo 'your favorite color is yellow';
        break;
    default:
    echo 'color not found';


}
