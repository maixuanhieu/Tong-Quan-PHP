<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị thông báo nếu người dùng nhập số hợp lệ</title>
</head>
<body>
    <form method="post">
    <input type="text" name="number1">
    <select name="operator">
    <option value="add">+</option>
    <option value="sub">-</option>
    <option value="multi">*</option>
    <option value="div">/</option>
    </select>
    <input type="text" name="number2">
    <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $x = $_POST["number1"];
        $operator = $_POST["operator"];
        $y = $_POST["number2"];

        function calc($x,$operator,$y){
            try {
                if($x == "" || $y == "") {
                    throw new Exception("Chưa nhập giá trị toán hạng");
                }
                
                return;
            } catch (Exception $exception) {

                return $exception->getMessage();
            }
    }
}
    ?>
</body>
</html>