<?php
/* TASK 1:
Write a program to reverse this string from “emocleW ot
PHP” to “Welcome to PHP” */
echo "Task 1:".'<br>';

$string = "emocleW oT PHP";
// echo  strrev($string);
$arrString = explode(" ",$string);
// print_r($arrString);
foreach($arrString as $array){

    for($i=strlen($array)-1 ;$i>=0 ;$i--){
        echo $array[$i];
    }
    echo " ";
}
echo '<br>';
/* --------------------------------------------------------- */


/* TASK 2:
There is an indexed array $arr = [2, 3, 4, 6, 7, 9, 11, 20].
Write a php program to filter this array by even number
using arrow function. */
echo "Task 2:".'<br>';

$arr = [2, 3, 4, 6, 7, 9, 11, 20];
$evenNum = array_filter($arr ,fn($arr)=>$arr%2===0);
print_r($evenNum);
echo '<br>';


// $array = [2, 3, 4, 6, 7, 9, 11, 20];
// $evenNum=[];
//     foreach($array as $arr){
//         if($arr%2===1){
//             $evenNum[]=$arr;
//         }
//     }
// print_r($evenNum);

/* --------------------------------------------------------- */


/* TASK 3:
We want to implement a function that could sum all
provided values as below.
● $total = sum (2, 3) then $total = 5
● $total = sum (2, 3, 4) then $total = 9
● $total = sum (2, 3, 4, 5) then $total = 14 */
echo "Task 3:".'<br>';

function sum(...$number){
    $total = 0;
    foreach($number as $num){
        $total +=$num;
    }
    return $total;
}
echo sum(1,2,3,4,5,6).'<br>';
echo sum(2,3,4).'<br>';
echo sum(2,3,4,5);

?>