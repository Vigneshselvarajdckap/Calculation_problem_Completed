<?php

$arr = 
[
    [12,-1,80,60,-1], // ans => 140
    [12,-1,10,5,0],   // ans => 15
    [-1,2,3,6,-1],    // ans => 11
    [0,-1,7,7,-1],    // ans => 14
    [12,2,22,8,-1]    // ans => 0
];


$res = [];
$maximum = [];
for ($i=0; $i <= count($arr)-1; $i++) 
{
    $check = false;
    $sum = 0;
    for ($l=0; $l <= count($arr)-1; $l++) 
    { 
        if ($check) 
        {
            if($arr[$i][$l] == -1)
            {
                $check = false;
                break;
            }
            else
            {
                $sum += $arr[$i][$l];
            }
        }

        if($arr[$i][$l] == -1)
        {
            $check = true;
        }
    }
    $res[] = $sum;
}
array_push($maximum,max($res));

print_r($res);
print_r($maximum);

