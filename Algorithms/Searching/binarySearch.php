<?php
function binarySearch(array $arr, $x)
{
    // kiểm tra mảng trống
    if (count($arr) === 0) {
        return false;
    } else{
        $min = 0;
        $max = count($arr) - 1;
        while ($min <= $max) {

            // compute middle index
            $mid = floor(($min + $max) / 2);

            // element found at mid
            if ($arr[$mid] == $x) {
                return true;
            }

            if ($x < $arr[$mid]) {
                // search the left side of the array
                $max = $mid - 1;
            } else {
                // search the right side of the array
                $min = $mid + 1;
            }
        }
        return false;
    }
}

$arr = array(1, 3, 4, 9, 15, 16);
$value = 16;
if (binarySearch($arr, $value) == true) {
    echo $value . " Exists";
} else {
    echo $value . " Doesnt Exist";
}