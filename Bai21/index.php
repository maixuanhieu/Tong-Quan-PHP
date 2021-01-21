<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân sự</title>
</head>

<body>
    <fieldset style="width: 400px">
        <legend>Thêm nhân sự</legend>
        <form method="post"> 
            <table>
                <tr>
                    <td>Họ</td>
                    <td><input type="text" name="lastName"></td>
                </tr>
                <tr>
                    <td>Tên</td>
                    <td><input type="text" name="firstName"></td>
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td><input type="date" name="dateofBirth"></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="add"></td>
                </tr>
                <tr>
                    <td>Vị trí công việc</td>
                    <td><input type="text" name="jobs"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Thêm"></td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php
    include_once "Employee/Employee.php";
    include_once "EmployeeManager/EmployeeManager.php";
    use Employee\Employee;
    use EmployeeManager\EmployeeManager;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $dateofBirth = $_POST["dateofBirth"];
        $add = $_POST["add"];
        $jobs = $_POST["jobs"];
        // die(var_dump($lastName));
        $list_employee = new EmployeeManager();
        $list_employee->add($lastName, $firstName, $dateofBirth, $add, $jobs);
        print_r($list_employee->getEmployee());
    }
    ?>
</body>

</html>