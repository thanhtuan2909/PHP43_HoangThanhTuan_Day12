<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

echo "<pre>";
print_r($numbers);
echo "</pre>";


echo "Phần tử đầu tiên của mảng: " . reset($numbers) . "<br>";
echo "Phần tử cuối cùng của mảng: " . end($numbers) . "<br>";
echo "Số lớn nhất của mảng: " . max($numbers) . "<br>";
echo "Số nhỏ nhất của mảng: " . min($numbers) . "<br>";
echo "Tổng các phần tử của mảng: " . array_sum($numbers) . "<br>";
sort($numbers);
echo "Sắp xếp mảng theo chiều tăng các giá trị: " . "<br>";
echo "<pre>";
print_r($numbers);
echo "</pre>";
$arr = [];
for ($i = count($numbers)-1; $i >= 0; $i--){
    $arr[$i] = $numbers[$i];
}
echo "Sắp xếp mảng theo chiều giảm các giá trị: " . "<br>";
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "Sắp xếp mảng theo chiều tăng key: " . ksort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";
echo "Sắp xếp mảng theo chiều giảm key: ";
echo "<pre>";
print_r($arr);
echo "</pre>";