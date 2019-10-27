<?php
$array = ['programming','php','basic','dev','is','program is PHP'];
//$array = ['hoang', 't', 'thanh' , 'tuan', 'hoangthanhtuan', 'devpromaidichhanoi', 'is', 'php', 'cntt'];
/**
 * @param $array
 * @return string
 */
function strMax($array){
    $length = '';
    $max = $array[0];
    foreach ($array as $key => $value) {
        if (strlen($value) > strlen($max)) {
            $max = $value;
            $length = strlen($value);
        }
    }
    $str = "Chuỗi lớn nhất là $max, độ dài $length<br>";
    return $str;
}

/**
 * @param $array
 * @return string
 */
function strMin($array){
    $length = '';
    $min = $array[0];
    foreach ($array as $key => $value){
        if (strlen($value) < strlen($min)){
            $min = $value;
            $length = strlen($value);
        }
    }
    $str = "Chuỗi nhỏ nhất là $min, độ dài $length<br>";
    return $str;
}

echo strMax($array);
echo strMin($array);