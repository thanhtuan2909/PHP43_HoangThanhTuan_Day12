<?php
echo "<h2>Mảng 1</h2>";
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);

echo "<pre>";
print_r($keys);
echo "</pre>";

echo "<h2>Mảng 2</h2>";
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);

echo "<pre>";
print_r($values);
echo "</pre>";

echo "<h2>mảng thứ 3 từ 2 mảng trên</h2>";
$keysAndValues = [
    $keys["field1"] => $values["field1value"],
    $keys["field2"] => $values["field2value"],
    $keys["field3"] => $values["field3value"]
];

echo "<pre>";
print_r($keysAndValues);
echo "</pre>";