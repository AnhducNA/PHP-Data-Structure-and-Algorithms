<?php
function quick_sort($my_array) {
    $lesser = $greater = [];
    if(count($my_array) < 2) {
        return $my_array;
    }
    $pivot_key = key($my_array);
//    Lấy phần tử đầu tiên ra khỏi Stack
    $pivot_value = array_shift($my_array);
    foreach($my_array as $value) {
        if($value <= $pivot_value)
        {
            $lesser[] = $value;
        }elseif ($value > $pivot_value)
        {
            $greater[] = $value;
        }
    }
    return array_merge(quick_sort($lesser),array($pivot_key=>$pivot_value),quick_sort($greater));
}

$my_array = [51, -49 , -53 , 78 , 68, 92, -89, 100, 48, -43];
echo 'Mảng ban đầu : '.implode(',',$my_array).'\n';
$my_array = quick_sort($my_array);
echo 'Mảng đã được sắp xếp : '.implode(',',$my_array);
?>