<?php
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];

$arrayNew = [];
foreach ($array1 as $key => $value) {
    $arrayNew[$key][] = $array2[$key];
    $arrayNew[$key][] = $array1[$key][0];
    $arrayNew[$key][] = $array1[$key][1];
}

echo "<pre>";
print_r($arrayNew);
echo "</pre>";

