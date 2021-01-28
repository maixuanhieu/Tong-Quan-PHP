<?php
abstract class AbstractLinkedList {
    abstract public function add($value);

    abstract public function addFirst($value);

    abstract public function addLast($value);

    abstract public function pop();

    abstract public function popFirst();

    abstract public function head();

    abstract public function tail();

    abstract public function remove($node);
}