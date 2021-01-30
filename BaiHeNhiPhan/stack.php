<?php
class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($element)
    {
        if (count($this->stack) < $this->limit){
            array_push($this->stack, $element);
        } else {
            throw new RuntimeException('Stack is Full');
        }
    }

    public function pop()
    {
        if($this->isEmpty()){
            throw new RuntimeException('Stack is Empty');
        } else {
            return array_pop($this->stack);
        }
    }

    public function isEmpty(){
        return empty($this->stack);
    }
}
