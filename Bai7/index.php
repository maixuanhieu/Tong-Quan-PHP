<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Simple Calculator</h1>
    <p class="title">Calculator</p>
    <form method="POST">
        <div>
            <p>First operand:</p>
            <p>Operator:</p>
            <p>Second operand:</p>

        </div>
        <div class="input">
            <input type="number" name="operand">
            <select name="operator">
                <option value="addition">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiple">Multiple</option>
                <option value="division">Division</option>
            </select>
            <input type="number" name="operand2">
            <input type="submit" value="Calculate">
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $operand1 = $_POST["operand"];
        $operator = $_POST["operator"];
        $operand2 = $_POST["operand2"];
        
        function calculate($operand1,$operator,$operand2){
            try {
                if($operand1 == "" || $operand2 == "") {
                    throw new Exception("Chưa nhập giá trị toán hạng");
                }

                $result = 0;

                switch ($operator){
                    case "addition":
                        $result = $operand1 + $operand2;
                        break;
                    case "subtraction":
                        $result = $operand1 - $operand2;
                        break;
                    case "multiple":
                        $result = $operand1 * $operand2;
                    case "division":
                        try {
                            if($operand2 == 0) {
                                throw new Exception("Không thể thực hiện phép chia cho 0");
                            }
    
                            $result = $operand1 / $operand2;
                        } catch (Exception $ex) {
                            return $ex->getMessage();
                        }
                        break;
                    default:
                        "Không thực hiện được phép tính";
                }
                return $result;
            } catch (Exception $exception) {
                // Ghi log file

                return $exception->getMessage();
            }
            
        }

        function opera($operator){
            switch ($operator){
                case "addition":
                    return "+";
                case "subtraction":
                    return "-";
                case "multiple":
                    return "*";
                case "division":
                    return "/";
            }
            return;
        }

        $result = calculate($operand1,$operator,$operand2);

        echo "Result: ".$operand1.opera($operator).$operand2."=". $result;
    }
    ?>
</body>

</html>