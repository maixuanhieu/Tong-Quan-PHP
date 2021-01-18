
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST["Description"];
    $price = $_POST["Price"];
    $discount = $_POST["Discount"];
    $result = $price * $discount * 0.01;
    $result1= $price - $result;
    echo $result;
    echo $result1;
}

?>
