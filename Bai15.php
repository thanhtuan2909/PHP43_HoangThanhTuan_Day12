<?php
$array = [1, 3, 2, 5, 4, 8, 7, 9];

//array_sum()
$sum = array_sum($array);
echo "Tổng: $sum<br>";

//array_key_exists()
echo array_key_exists('hoangtuan', $array) ? 'Có tồn tại' : 'Không tồn tại';
echo "<br>";

//array_merge()
$array1 = ['a', 'b', 'c'];
$arrayNew1 = array_merge($array, $array1);
echo "<pre>";
print_r($arrayNew1);
echo "</pre>";

//array_search()
$search1 = array_search('a', $arrayNew1);
echo "Key của a là: $search1<br>";

//array_slice()
$arrayNew2 = array_slice($arrayNew1, 2,8);
echo "<pre>";
print_r($arrayNew2);
echo "</pre>";

//array_values()
$array2 = [1 => 'a', 5 => 'b', 3 => 'c', 2 => 'd'];
$arrayNew3 = array_values($array2);
echo "<pre>";
print_r($arrayNew3);
echo "</pre>";

//array_keys()
$arrayNew4 = array_keys($array2);
echo "<pre>";
print_r($arrayNew4);
echo "</pre>";

//array_pop()
$arrayNew5 = array_pop($arrayNew4);
echo "Phần tử cuối cùng: $arrayNew5<br>";

//Nhiều quá anh ạ =))