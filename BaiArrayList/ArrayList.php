<?php
include('AbstractArrayList.php');

class ArrayList extends AbstractArrayList
{

    public $arrayList = array();


    //them moi phan tu vao danh sach
    public function add($value)
    {
        array_push($this->arrayList, $value);
    }

    //lay ve gia tri cua phan tu co chi so $index
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    //xoa phan tu co chi so $index
    public function remove($index)
    {
        if ($index < 0 && $index > $this->size()-1) {
            return -1;
        }
        array_splice($this->arrayList, $index,1);
    }

    //lay ve kich thuoc cua danh sach
    public function size()
    {
        return count($this->arrayList);
    }

    //tim vi tri cua phan tu co gia tri $value
    public function indexOf($value)
    {
        for ($i = 0; $i<$this->size() ;$i++) {
            if ($this->arrayList[$i] == $value) {
                return $i;
            }
        }
        return -1;
    }

    //kiem tra rong
    public function IsEmpty($index)
    {
        return empty($this->arrayList);
    }

    public function clear()
    {
        $this->array = array();
    }

    public function sort()
    {
        sort($this->array);
    }

    public function addAll($value)
    {
        $this->array = array_merge($this->array,$value);
    }
 
    public function arr1($arr1)
    {
        $this->arr1 = $this->array;
    }

    public function reset()
    {
        $this->array = $this->arr1;
    }


}


