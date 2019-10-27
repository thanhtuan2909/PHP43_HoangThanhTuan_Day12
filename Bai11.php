<?php
$array = array(1, 2, 3, 4, 5);

echo "<h3>Mảng ban đầu</h3>";
echo "<pre>";
print_r($array);
echo "</pre>";

unset($array[2]);
array_values($array);

echo "<h3>Mảng sau khi xóa phần tử thứ 3</h3>";
echo "<pre>";
print_r($array);
echo "</pre>";

