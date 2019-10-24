<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
//Test các TH khác
//$arrs = [2, 5, 2];
//$arrs = [22, 5, -1];
//$arrs = [1, 5, -1];

function sum($arrs){
    $sum = 0;
    foreach ($arrs as $key => $value) {
        $sum += $value;
    }
    return $sum;
}

function sub($arrs) {
    $sub = 0;
    foreach ($arrs as $key => $value){
        $sub -= $value;
    }
    $result = $sub + 2*$arrs[0];
    return $result;
}

function mul($arrs){
    $mul = 1;
    foreach ($arrs as $key => $value){
        $mul *= $value;
    }
    return $mul;
}

function div($arrs){
    $div = 1;
    foreach ($arrs as $val){
        $div /= $val;
    }
    $result = $div * $arrs[0] * $arrs[0];
    return $result;
}

echo "Tổng các phần tử  = 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = " . sum($arrs);
echo "<br>";
echo "Tích các phần tử  = 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = " . mul($arrs);
echo "<br>";
echo "Hiệu các phần tử  = 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = " . sub($arrs);
echo "<br>";
echo "Thương các phần tử  = 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = " .div($arrs);