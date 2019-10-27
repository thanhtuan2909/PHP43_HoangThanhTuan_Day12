<?php
//$arrs = ['1', 'B', 'C', 'E'];
$arrs = ['a', 0, null, false];

/**
 * @param $arrs
 * @return array
 */
function toUpper($arrs) {
    $arr = [];
    foreach ($arrs as $key => $value){
        $arr[$key] = strtoupper($value);
    }
    return $arr;
}


echo "<pre>";
print_r(toUpper($arrs));
echo "</pre>";
