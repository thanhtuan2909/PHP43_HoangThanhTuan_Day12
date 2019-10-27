<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
//Test các TH khác
//$arrs = [2, 5, 2];
//$arrs = [22, 5, -1];
//$arrs = [1, 5, -1];

function calculator($arrs, $operator)
{
    $result = $arrs[0];
    switch ($operator) {
        case '+':
            $str = "Tổng các phần tử = ";
            foreach ($arrs as $key => $value) {
                $str .= "$value + ";
                if ($key == 0) {
                    continue;
                }
                $result += $value;
            }
            $str = substr($str, 0, -2);
            $str .= " = " . $result;
            break;
        case '-':
            $str = "Hiệu các phần tử = ";
            foreach ($arrs as $key => $value) {
                $str .= "$value + ";
                if ($key == 0) {
                    continue;
                }
                $result -= $value;
            }
            $str = substr($str, 0, -2);
            $str .= " = " . $result;
            break;
        case '/':
            $str = "Thương các phần tử = ";
            foreach ($arrs as $key => $value) {
                $str .= "$value / ";
                if ($key == 0) {
                    continue;
                }
                $result /= $value;
            }
            $str = substr($str, 0, -2);
            $str .= " = " . $result;
            break;
        case '*':
            $str = "Tích các phần tử = ";
            foreach ($arrs as $key => $value) {
                $str .= "$value * ";
                if ($key == 0) {
                    continue;
                }
                $result *= $value;
            }
            $str = substr($str, 0, -2);
            $str .= " = " . $result;
            break;
    }
    return $str;
}

echo "<b>" . calculator($arrs, '+') . "</b><br>";
echo "<b>" . calculator($arrs, '-') . "</b><br>";
echo "<b>" . calculator($arrs, '*') . "</b><br>";
echo "<b>" . calculator($arrs, '/') . "</b><br>";