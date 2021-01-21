<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lớp Circle và lớp Cylinder</title>
</head>

<body>
    <?php
    include_once('Circle.php');
    include_once('Cylinder.php');

    $circle = new Circle('Circle 01', 3, 'blue');
    echo 'Circle area: ' . $circle->calculateArea() . '<br />';
    echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
    echo 'Color: ' . $circle->color(). '<br />';

    $cylinder = new Cylinder('Cylinder 01', 3, 'yellow', 4);
    echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
    echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
    echo 'Color: ' . $cylinder->color(). '<br />';
    ?>
</body>

</html>