<?php
abstract class AbstractStack {
    protected $list;

    public function init(){}
    public function push($value){}
    public function pop(){}
    public function top(){}
    public function isEmpty(){}
}