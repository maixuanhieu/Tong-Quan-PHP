<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng Future Value Calculator</title>
</head>
<body>
    <form method="POST">
    <input type="number" name ="Amount" placeholder="Inventment Amount">
    <input type="number" name ="Rate" placeholder="Yearly Interest Rate">
    <input type="number" name ="Years" placeholder="Number of Years">
    <input type="submit" value="Result">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $amount = $_POST["Amount"];
        $rate = $_POST["Rate"];
        $year = $_POST["Years"];
        $result = $amount * (1+ $rate/100) ** $year;
        echo $result;
    //     $result = $amount + ($amount*$rate/100);
    //     for ($i=1; $i < $year; $i++){
    //         if ($year == 1){
    //             echo $result;
    //             return;
    //         } else {
    //             $result = $result + ($result*$rate/100);
               
    //         }
            
    //     }
    //     echo $result;
    }
    ?>
</body>
</html>