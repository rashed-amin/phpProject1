<?php

/* 
 * @Copyright Rakib Amin
 * Date Created on: 24-Apr-15
 */

echo 'Hi I am Functions.php</br>';

// func takes parameter, returns a value
function add_two($num1,$num2)
{
    $result = $num1 + $num2;
    return $result;
}

// func takes parameter, DOES NOT return a value
function add_two2($num1,$num2)
{
    $result = $num1 + $num2;
    echo $result;
}

// func DOES NOT take parameter, returns a value
function add_two3()
{
    $result = 5 + 6;
    return $result;
}

// func DOES NOT take parameter, DOES NOT return a value
function add_two4()
{
    $result = 5 + 6;
    echo $result;
}

//type 1
$output=add_two(5, 6);
echo $output;
//type 2
add_two2(5, 6);
//type 3
$output=add_two3();
echo $output;
//type 4
add_two4();
