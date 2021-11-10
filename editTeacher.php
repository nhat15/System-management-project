<?php
    require_once '../database/config.php';
?>

<?php

    $error = array();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_GET['id'];
        // if (isset ($_POST["update_teacher"])) {
            $name = $_POST["name"];
            $gender = $_POST["gender"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            $phonenumber = $_POST["phonenumber"];

            if (empty($name)) {
                $error['name'] = 'Bạn chưa nhập tên';
            }

            if(empty($address)) {
                $error['address'] = 'Bạn chưa nhập địa chỉ';
            }

            if(empty($email)) {
                $error['email'] = 'Bạn chưa nhập email';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error['email'] = 'Bạn đã nhập sai định dạng email. Vui lòng nhập lại.';
            }

            if(empty($phonenumber)) {
                $error['phonenumber'] = 'Bạn chưa nhập số điện thoại';
            } else if(!is_numeric($phonenumber)) {
                $error['phonenumber'] = 'Bạn đã nhập sai định dạng số điện thoại. Vui lòng nhập lại.';
            }


            if(!$error) {
                $sql2 = "UPDATE teacher SET Name = '$name' WHERE ID = $id";
                if ($qr2 = mysqli_query($link, $sql2)) {
                    header('location: ../frontend/teacher.php');
                    exit();
                }
            }
        } else if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM teacher WHERE ID = $id";
            $query = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($query);
        }

    // Lấy ra giới tính của từng người.
    $sql1 = "SELECT DISTINCT Gender FROM teacher;";
    $qr = mysqli_query($link, $sql1);

    $result = array();
    while ($gender = mysqli_fetch_assoc($qr)) {
        $result[] = $gender;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../frontend/css/leftbar.css">
    <style>
        .home_section .main_content {
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 90px;
            display: flex;
            flex-direction: column;
            line-height: 60px;
        }

        .home_section .main_content ul.breadcrumb {
            padding-top: 10px;
            padding-bottom: 20px;
            list-style: none;
        }

        ul.breadcrumb li {
            display: inline;
            font-size: 18px;
        }

        ul.breadcrumb li+li:before {
            padding: 8px;
            color: #fea801;
            content: ">\00a0";
        }
        ul.breadcrumb li a {
            color: #646464;
            text-decoration: none;
        }

        ul.breadcrumb li a:hover {
            color: #fea801;
        }

        ul.breadcrumb li {
            color: #fea801;
        }

        .container {
            display: grid;
            border: 1px solid transparent;
            background-color: white;
            grid-template-columns: 25% 25% 25% 25%;
            padding-left: 20px;
            padding-bottom: 20px;
        }

        .container div {
            display: flex;
            flex-direction: column;
        }

        h2 {

            font-size: 40px;
            font-weight: 600;
        }

        .container label {
        float: left;
        width: 300px;
        }

        .container label.radio-btn {
        float: left;
        margin-left: 0px;
        display: inline-flex;
        align-items: center;
        }

        .container h2 {
        margin-top: 30px;
        font-size: 50px;
        font-weight: 600;
        margin-bottom: 20px;
        }

        .container .teacher {
        font-size: 25px;
        font-weight: 600;
        color: #646464;
        }

        input[type=text], input[type=email], input[type=date], select {
        border: 1px solid rgb(173, 173, 173);
        width: 250px;
        height: 50px;
        border-radius: 5px;
        padding-left: 10px;
        outline: none;
        font-size: 18px;
        }

        select {
        cursor: pointer;
        }

        input[type=text]:hover, input[type=email]:hover, input[type=date]:hover, select:hover {
        background-color: #eeeeee;
        }

        input[type=date] {
            cursor: pointer;
        }

        div.submission {
        display: flex;
        flex-direction: row;
        margin-top: 40px;
        }

        input[type=submit] {
        padding: 10px;
        margin-right: 10px;
        border-radius: 2px;
        border: none;
        background-color: #ffae01;
        color: white;
        cursor: pointer;
        font-size: 15px;
        width: 100px;
        height: 60px;
        }

        input[type=submit]:hover {
        background-color: #042954;
        } 

        input[type=button] {
        padding: 10px;
        margin-right: 10px;
        border-radius: 2px;
        border: none;
        background-color: #042954;
        color: white;
        cursor: pointer;
        font-size: 15px;
        width: 100px;
        height: 60px;
        }

        input[type=button]:hover {
        background-color: #ffae01;
        } 

    </style>
    <title>Cập nhật thông tin giáo viên</title>
</head>
<body>
    <?php
        include("../frontend/leftbar.php")
    ?>

    <section class="home_section">
        <nav>
            <?php
                include("../frontend/header.php")
            ?>
        </nav>

        <div class="main_content">
            <ul class="breadcrumb">
                <li><a href="../frontend/index.php">Trang chủ</a></li>
                <li><a href="../frontend/teacher.php">Giáo viên</a></li>
                <li>Cập nhật thông tin giáo viên</li>
            </ul>

            <h2>Cập nhật thông tin</h2>

            <?php
                
                
            ?>
            <form method = "POST" class="container" action="">
                <div>
                    <label class="teacher name">Họ và tên:</label>
                    <input type="text" name="name" id="name" value="<?php echo $row['Name'] ?>">
                    <?php echo isset($error['name']) ? $error['name'] : ''; ?>
                </div>

                <div>
                    <label class="teacher gender">Giới tính:</label>
                    <select name="gender" id="gender">
                        <?php
                            foreach($result as $key => $value) {
                        ?>
                        <option <?php if ($value['Gender'] == $row['Gender'])  {echo "selected";} ?> value="<?php echo $value['Gender']; ?>"><?php echo $value['Gender']; ?></option>
                        <?php
                           }
                        ?>
                    </select>
                </div>
                
                <div>
                    <label class="teacher dob">Ngày sinh:</label>
                    <input type="date" name="dob" id="dob" value="<?php echo $row['DateOfBirth'] ?>">
                    
                </div>

                <div>
                    <label class="teacher address">Địa chỉ:</label>
                    <input type="text" name="address" id="address" value="<?php echo $row['Address'] ?>">
                    <?php echo isset($error['address']) ? $error['address'] : ''; ?>
                </div>

                <div>
                    <label class="teacher email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo $row['Email'] ?>">
                    <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                </div>

                <div>
                    <label class="teacher phonenumber">Số điện thoại:</label>
                    <input type="text" name="phonenumber" id="phonenumber" value="<?php echo $row['Phone'] ?>">
                    <?php echo isset($error['phonenumber']) ? $error['phonenumber'] : ''; ?>
                </div>

                <div>
                    <label class="teacher subject">Môn học: </label>
                    <input type="text" name="subject" id="subject" value="<?php echo $row['Subject'] ?>">
                </div>

                <div></div>

                <div class = "submission">
                    <input type="submit" name="update_teacher" value="Chấp nhận">
                    <!-- <input type="button" onclick="javascript:Deny();" value="Bỏ qua"> -->
                </div>
            </form>
        </div>

        <!-- <?php
        //mysqli_close($link);
        ?> -->
    </section>

</body>
</html>