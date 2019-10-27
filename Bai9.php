<?php
$arrs = ['1', 'B', 'C', 'E'];
//$arrs = ['a', 0, null, false];

/**
 * @param $arrs
 * @return array
 */
function toLower($arrs){
    $arr = [];
    foreach ($arrs as $key => $value){
        $arr[$key] = strtolower($value);
    }
    return $arr;
}

echo "<pre>";
print_r(toLower($arrs));
echo "</pre>";