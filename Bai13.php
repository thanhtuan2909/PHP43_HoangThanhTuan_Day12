<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$tbc = array_sum($numbers)/count($numbers);
echo "Giá trị trung bình của mảng: $tbc<br>";

$big = '';
$small = '';
foreach ($numbers as $value) {
    if ($value > $tbc){
        $big .= "$value, ";
    } else {
        $small .= "$value, ";
    }
}

echo "Các phần tử lớn hơn giá trị trung bình: " . substr($big, 0, -2) . "<br>";
echo "Các phần tử nhỏ hơn giá trị trung bình: " . substr($small, 0, -2) . "<br>";