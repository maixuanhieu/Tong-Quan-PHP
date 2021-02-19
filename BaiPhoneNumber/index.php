<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phân loại số điện thoại</title>
</head>
<body>
<?php

include "function.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phones = $_REQUEST['phone'];
    $phonesArr = explode(',', $phones);
}
$viettelNumbers = ['086', '096', '097', '098', '032', '033', '034', '035', '036', '037', '038', '039'];
$vinaNumbers = ['088', '091', '094', '083', '084', '085', '081', '082'];
$mobiNumbers = ['089', '090', '093', '070', '079', '077', '076', '078'];

?>

<form class="container" style="margin-top: 30px" action="#" method="post">
    <div class="form-group" style="float: left">
        <textarea name="phone" class="form-control" id="validationTextarea" placeholder="Input phone numbers" cols="30"
                  rows="10"><?php if (isset($phones)) {
                echo $phones;
            } ?></textarea>
        <br>
        <button class="btn btn-primary" type="submit">Classify</button>
    </div>
    <div style="float: left; margin-left: 20px">
        <?php if (isset($phones)): ?>
        Viettel:
            <?php showPhoneNumber(classifyNetwork($phonesArr, $viettelNumbers)); ?>
            <br>
        Vinaphone:
            <?php showPhoneNumber(classifyNetwork($phonesArr, $vinaNumbers)); ?>
            <br>
        Mobiphone:
            <?php showPhoneNumber(classifyNetwork($phonesArr, $mobiNumbers)); ?>
        <?php endif; ?>
    </div>
</form>
</body>
</html>