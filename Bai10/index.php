<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký người dùng</title>
</head>

<body>
    <h1>FORM ĐĂNG KÝ NGƯỜI DÙNG</h1>
    <form method="post">
    <fieldset style="width:400px">
    <legend>Form</legend>
    
        <table>
            <tr>
                <td>Tên người dùng: </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Điện thoại: </td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value= "Đăng ký" name="submit"></td>
            </tr>
        </table>
    
    </fieldset>
    </form>
    <?php

    function saveDataJSON($fileName, $name, $email, $phone) {
        try {
            // Thuc thi luu du lieu vao file

            // Kiem tra file JSON co ton tai hay khong,
            // neu khong thi nem ra ngoai le

            if(!file_exists($fileName)) {
                throw new Exception("File Db khong ton tai");
            }

            // Kiem tra name, email hoac phone khong duoc de trong
            if($name == "" || $email == "" || $phone ==""){
                throw new Exception("Cần nhập đầy đủ thông tin");
            }
            
            // Kiem tra dung dinh dang email
            if (filter_var($email,FILTER_VALIDATE_EMAIL) == false){
                throw new Exception("Nhập sai định dạng email");
            }

            // 1. Lay du lieu mang tu trong file JSON
                // 1.1 Lay du lieu tu file JSON
                $jsonString = file_get_contents($fileName);

                // 1.2 Chuyen chuoi JSON thanh mang
                $userList = json_decode($jsonString);

            // 2. Them mot phan tu vao mang
                // 2.1 Khai bao doi tuong new User
                $newUser = (object)[
                    "name" => $name,
                    "email" => $email,
                    "phone" => $phone
                ];

                // 2.2 Them phan tu User moi vao mang
                $userList[] = $newUser;

            // 3. Luu vao file JSON
                // 3.1 Chuyen du lieu mang thanh chuoi
                $output = json_encode($userList);

                // 3.2 Luu du lieu vao file
                file_put_contents($fileName, $output);

        } catch (Exception $ex) {
            // Thuc thi khi xay ra ngoai le luu du lieu vao file

            // Thong bao loi ra man hinh
            throw $ex;
        }
    }


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name= $_POST["name"];
        $email= $_POST["email"];
        $phone= $_POST["phone"];
        try {
            saveDataJSON("./users.json", $name, $email, $phone);
        } catch(Exception $ex){
            $errorMessage = $ex->getMessage();

            echo $errorMessage;
        }
        
    } 
    ?>
</body>

</html>