<?php
abstract class AbstractLinkedList {
    abstract public function prepend($value);

    abstract public function append($value);

    abstract public function pop();

    abstract public function popFirst();

    abstract public function head();

    abstract public function tail();

    abstract public function remove($node);
}