<?php
 
 include_once('DevideByZeroException.php');

try{
    $result = new DivideByZeroException();
    echo $result->divide(100, 5);
    echo $result->divide(100, 0);
} catch (DivideByZeroException $e) {
    echo '<br/> Có lỗi xảy ra: '. $e;
}
