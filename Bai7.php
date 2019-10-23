<?php
$array = [12, 5, 10, 125, 60, 90, 345, -123, -125, 0];

foreach ($array as $value) {
    if ($value >= 100 && $value <= 200 && $value %5 ==0 ) {
        echo "Phần tử thõa mãn điều kiện <= 200 , >= 100 và chia hết cho 5 trong mảng là: <b style='font-size: 20px;'>$value</b><br>";
    }
}
