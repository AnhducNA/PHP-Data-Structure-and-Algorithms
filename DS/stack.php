<?php

class stack
{
    protected $stack;
    protected $limit;


    public function __construct($limit = 5, $stack = []) {
        // khởi tạo ngăn xếp.
        $this->stack = $stack;
        // ngăn xếp có thể chứa $limit phần tử
        $this->limit = $limit;
    }

    public function push($item) {
        // Kiểm tra ngăn xếp bị tràn
        if (count($this->stack) < $this->limit) {
            // Thêm phần tử vào đầu ngăn xếp
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
            // trap for stack underflow
            throw new RunTimeException('Stack is empty!');
        } else {
            // lấy phần tử từ đầu ngăn xếp
            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }

}

//  Thêm một số phần tử vào trong Stack:
$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
print_r($stack);

echo "Lấy một số phần tử ra khỏi Stack:". "\n";
echo $stack->pop()."\n";
echo $stack->pop()."\n";

echo "Lấy phần tử trên cùng của Stack:". "\n";
echo $stack->top()."\n";


