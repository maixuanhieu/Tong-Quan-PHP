<?php
class stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 10){
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item){
        if (count($this->stack < $this->limit)){
            array_unshift($this->stack,$item);
        } else {
            throw new RuntimeException('Stack is Full');
        }
    }

    public function isEmpty(){
        return empty($this->stack);
    }
     
    public function pop($item){
        if ($this->isEmpty()){
            throw new RuntimeException('Stack is Empty');
        } else {
            return array_shift($this->stack);
        }
    }

    public function top($item){
        return current($this->stack);
    }

}

