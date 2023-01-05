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
            // pop item from the start of the array
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

/**
 * This'll work as expected.
 */
$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
print_r($stack);

/**
 * And this too.
 */
//$stack = new Stack(3, array(1, 2, 3, 4, 5));
