<?php
abstract class AbstractArrayList {
    protected $list; // Array

    //Lay gia tri phan tu co chi so $index
    abstract function get($index);

    // Them 1 phan tu vao danh sach
    abstract function add($value);

    // Xoa 1 phan tu co chi so la $index khoi danh sach
    abstract function remove($index);

    // Lay kich thuoc cua danh sach
    abstract function size();

    // Tim vi tri cua phan tu co gia tri $value
    abstract function indexOf($value);

    // Kiem tra danh sach rong
    abstract function isEmpty($index);
}