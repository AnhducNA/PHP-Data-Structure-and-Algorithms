<?php
// Tạo hàng đợi;
$newQueue = new SplQueue();

// Thêm phần tử vào hàng đợi
for ($i = 0; $i <= 5; $i++) {
    $newQueue->enqueue($i);
}

//using rewind() function: đưa con trỏ về đầu hàng đợi
$newQueue->rewind();

//using valid() function: kiểm tra queue có hợp lệ hay không sau khi sử dụng rewind() function
while($newQueue->valid()){
//    Hiển thị từng phần tử của hàng đợi ra màn hình
    echo $newQueue->current(),"\n";
//    Con trỏ nhảy đến phần tử tiếp theo.
    $newQueue->next();
}

print_r($newQueue);

// Xóa 2 phần tử từ hàng đợi
$newQueue->dequeue();
$newQueue->dequeue();
print_r($newQueue);
