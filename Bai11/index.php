<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm giá trị nhỏ nhất trong mảng sử dụng phương thức</title>
</head>
<body>
    <?php
    $array = [9,7,8,19];
    $min = $array[0];
    $index = 0;
    function minNum($array,$min,$index){
        for($i = 1; $i < count($array)  ; $i++){
            if($array[$i] < $min){
                $min=$array[$i];
                $index = $i;
            }
        }
        echo "Vị trí số nhỏ nhất là: ". $index;
        return;
    }
    minNum($array,$min,$index);
    ?>

</body>
</html>