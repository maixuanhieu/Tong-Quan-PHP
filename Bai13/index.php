<form method="POST">
<input type="number" name="x">
<input type="number" name="y">
<input type="submit" value="Search">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $x = $_POST["x"];
    $y = $_POST["y"];
    
    $arr = [];
    for($i=0; $i< $y; $i++){
        $arr[$i]=[];
        for($j=0; $j<$x; $j++){
            $random = rand(1,1000);
            $arr[$i][$j] = $random;
            echo $arr[$i][$j] . " ";
        }
        echo "<br/>";
    }
    function findMax($arr,$x,$y){
        $max = $arr[0][0];
        $index = 0;
        $index2 = 0;
        for ($i =0; $i < $y ; $i++){
            for ($j = 0; $j < $x; $j++){
                if($arr[$i][$j] > $max){
                    $max = $arr[$i][$j];
                    $index = $i;
                    $index2 = $j;
                    
                }
                
            }
        }
        echo "Phần tử lớn nhất trong mảng là: ". $max ." tại tọa độ: x- " . $x . " y-" . $y;
    }
    findMax($arr,$x,$y);
}

?>