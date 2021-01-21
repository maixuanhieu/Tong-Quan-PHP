<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xây dựng lớp QuadraticEquation</title>
</head>
<body>
<form method="POST">
        <input type="number" name="a" style="width:50px;"><b> x^2 + </b>
        <input type="number" name="b" style="width:50px;"><b> x + </b>
        <input type="number" name="c" style="width:50px;"><b> = 0 </b><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
    include("quadraticEquation.php");
        if (!empty($_POST["a"]) || !empty($_POST["b"]) || !empty($_POST["c"])) {
            $solve = new QuadraticEquation($_POST["a"], $_POST["b"], $_POST["c"]);
            echo $solve->getRoot();
        }
    }
    ?>
</body>
</html>