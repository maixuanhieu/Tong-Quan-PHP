<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng đọc số thành chữ</title>
</head>
<body>
    <form method="POST">
    <input type="number" name="number" value="Nhập vào một số">
    <input type="submit" value="Đọc số">
    </form>
    <?php
    function readUnit($num)
    {
        switch ($num) {
            case 0:
                return "";
            case 1:
                return "one";
            case 2:
                return "two";
            case 3:
                return "three";
            case 4:
                return "four";
            case 5:
                return "five";
            case 6:
                return "six";
            case 7:
                return "seven";
            case 8:
                return "eight";
            case 9:
                return "nine";
        }
    }
    function readTeen($num)
    {
        switch ($num) {
            case 10:
                return "ten";
            case 11:
                return "eleven";
            case 12:
                return "twelve";
            case 13:
                return "thirteen";
            case 14:
                return "fourteen";
            case 15:
                return "fifteen";
            case 16:
                return "sixteen";
            case 17:
                return "seventeen";
            case 18:
                return "eightteen";
            case 19:
                return "nineteen";
        }
    }
    function readTenth($num)
    {
        switch ($num) {
            case 0:
                return "";
            case 2:
                return "twenty";
            case 3:
                return "thirty";
            case 4:
                return "fourty";
            case 5:
                return "fifty";
            case 6:
                return "sixty";
            case 7:
                return "seventy";
            case 8:
                return "eighty";
            case 9:
                return "ninety";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if ($number < 10) {
        echo readUnit($number);
        }
        elseif ($number < 20) {
        echo readTeen($number);
        }
        elseif ($number < 100) {
            echo readTenth(floor($number / 10)) . " " . readUnit($number % 10);
        }
        elseif ($number < 1000) {
            if (($number % 100 > 9) and ($number % 100 < 20)) {
                echo (readUnit(floor($number / 100)) . " hundred and " . readTeen($number % 100));
            }
            elseif ($number % 100 == 0) {
                echo readUnit(floor($number / 100)) . " hundred";
            }
            else {
                echo (readUnit(floor($number / 100)) . " hundred and " . 
                      readTenth(floor(($number % 100) / 10)) . " " . 
                      readUnit($number % 10));
            }
        }
    }
    ?>
    ?>
</body>
</html>