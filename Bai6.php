<?php
echo "<h2>Mảng 1</h2>";
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

echo "<pre>";
print_r($keys);
echo "</pre>";

echo "<h2>Mảng 2</h2>";
$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

echo "<pre>";
print_r($values);
echo "</pre>";

echo "<h2>mảng thứ 3 từ 2 mảng trên</h2>";
$keysAndValues = [];
////Sử dụng for
//for ($i = 1; $i <= count($keys); $i++) {
//    $keysAndValues += [$keys['field'.$i] => $values['field'.$i.'value']];
//}
////Sử dụng foreach
foreach ($keys as $k => $val) {
    $keysAndValues += [$keys[$k] => $values[$k.'value']];
}


echo "<pre>";
print_r($keysAndValues);
echo "</pre>";