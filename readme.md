# PHP-Data-Structure-and-Algorithms

Thực hiện bởi: Lê Anh Đức

## Data Structure

### Stack (ngăn xếp)

- Stack (ngăn xếp) là một cấu trúc dữ liệu danh sách, trong đó việc thêm và lấy các phần tử được thực hiện theo quy tắc
  FILO (Fist-In/Last-Out), có nghĩa là phần tử nào được đưa vào đầu tiên thì sẽ được lấy ra sau cùng. Nguyên tắc này
  cũng được gọi là LIFO (Last-IN/First-Out), có nghĩa là phần tử nào được đưa vào sau cùng thì sẽ được lấy ra trước
  tiên.
- Kết quả tại: https://github.com/AnhducNA/PHP-Data-Structure-and-Algorithms/blob/main/DS/stack.php

### Queue (hàng đợi)

- Queue (hàng đợi) là một cấu trúc dữ liệu danh sách được quản lý theo thứ tự, trong đó việc thêm và lấy các phần tử
  được thực hiện theo quy tắc FIFO (First-In/First-Out), có nghĩa là phần tử nào được đưa vào đầu tiên thì sẽ được lấy
  ra
  đầu tiên.
- Kết quả tại: https://github.com/AnhducNA/PHP-Data-Structure-and-Algorithms/blob/main/DS/queue.php

## Algorithms

### Sort (Sắp xếp)

#### QuickSort

- Sắp xếp nhanh là một loại so sánh, có nghĩa là nó có thể sắp xếp các mục thuộc bất kỳ loại nào mà mối quan hệ "nhỏ
  hơn" (chính thức là tổng thứ tự) được xác định.
- Kết quả tại: https://github.com/AnhducNA/PHP-Data-Structure-and-Algorithms/blob/main/Algorithms/Sort/quickSort.php
#### HeapSort

- Bước 1: Xây dựng một heap tối đa chứa phần tử lớn nhất của heap ở gốc
  Bước 2: Hoán đổi phần tử cuối cùng của heap với phần tử gốc và xóa phần tử cuối cùng khỏi heap. Với các phần tử còn
  lại lặp lại bước 1.
- Kết quả tại: https://github.com/AnhducNA/PHP-Data-Structure-and-Algorithms/blob/main/Algorithms/Sort/heapSort.php
