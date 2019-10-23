<?php
$a = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
   ),
   "b"=>array(
       "e"=>2,
       "o"=>array(
           "b"=>3
       )
   )
);


echo "<h2>giá trị = 3 mà có key là b</h2>";
echo $a["b"]["o"]["b"];
echo "<h2>giá trị = 1 mà có key là c</h2>";
echo $a["a"]["c"];
echo "<h2>phần tử có key là a</h2>";
echo "<pre>";
print_r($a["a"]);
echo "</pre>";