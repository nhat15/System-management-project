<?php
    require_once '../database/config.php'
?>

<?php
    $error = array();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $ID = $_POST['ID'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        if (empty($name)) {
            $error[name] = 'Bạn chưa nhập tên';
        } 
        if (empty($email)) {
            $error[email] = 'Bạn chưa nhập email';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = 'Bạn đã nhập sai định dạng email. Vui lòng nhập lại.';
        }
        if (empty($password)) {
            $error[password] = 'Bạn chưa nhập mật khẩu';
        } 

        if (!$error) {
            $sql = "INSERT INTO teacher (Name, ID, Email) values ('$name', '$ID', '$email')";
            $sql2 = "INSERT INTO teacher_account (user_name, password, ID) values ('$email', '$password', '$ID')";
            if ($qr = mysqli_query($link, $sql) && $qr2 = mysqli_query($link, $sql2)) {
                echo '<script type="text/javascript">';
                echo ' alert("Cập nhật thành công!")';  //not showing an alert box.
                echo '</script>';
                header('location: teacher.php');
                exit();
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/leftbar.css">
    <link rel="stylesheet" href="css/teacher_adding.css">
    <title>Thêm giáo viên</title>
</head>
<body>

    <?php
        include("leftbar.php")
    ?>

    <section class="home_section">
        <nav>
            <?php
                include("header.php")
            ?>
        </nav>

        <div class="main_content">
            <ul class="breadcrumb">
                <li><a href="index.php">Trang chủ</a></li>
                <li>Thêm giáo viên</li>
            </ul>

            <h2>Thêm giáo viên</h2>
            <form action="" method="POST" class="container">
            
                <div>
                    <label class="teacher name">Họ và tên:</label>
                    <input type="text" name="name" id="name">
                </div>

                <div>
                    <label class="teacher gender">Giới tính:</label>
                    <select name="gender" id="gender">
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                </div>
                
                <div>
                    <label class="teacher dob">Ngày sinh:</label>
                    <input type="date" name="dob" id="dob">
                </div>

                <div>
                    <label class="teacher address">Địa chỉ:</label>
                    <input type="text" name="address" id="address">
                </div>

                <div>
                    <label class="teacher email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>

                <div>
                    <label class="teacher grade">Khối:</label>
                    <input type="text" name="grade" id="grade">
                </div>
                
                <div>
                    <label class="teacher class">Lớp:</label>
                    <input type="text" name="class" id="class">
                </div>

                <div>
                    <label class="teacher phonenumber">Số điện thoại:</label>
                    <input type="text" name="phonenumber" id="phonenumber">
                </div>

                <div>
                    <label class="teacher username">Tên tài khoản</label>
                    <input type="text" name="username" id="username">
                </div>

                <div>
                    <label class="teacher password">Mật khẩu</label>
                    <input type="text" name="password" id="password">
                </div>

                <div>

                </div>

                <div></div>

                <div class = "submission">
                    <input type="submit" onclick="javascript:Accept();" value="Chấp nhận">
                    <input type="button" onclick="javascript:Deny();" value="Bỏ qua">
                </div>
            </form>
        </div>
    </section>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let sidebar = document.querySelector('.navbar')
        let sidebarBtn = document.querySelector('.menu')
        $(document).ready(function () {
            $(sidebarBtn).click(function () { 
                $(sidebar).toggleClass("active");
            });

            $(".profile").click(function () { 
                $(".user_profile_item").slideToggle();
            
            });

            $(".subject").click(function () { 
                $('nav ul .sub_item').slideToggle();
                $('nav ul .first').toggleClass("rotate")
                // console.log('a')
            });

            $(".teacher").click(function () { 
                $('nav ul .teacher_item').slideToggle();
                $('nav ul .second').toggleClass("rotate")
                // console.log('a')

            });

            $(".student").click(function () { 
                $('nav ul .student_item').slideToggle();
                $('nav ul .third').toggleClass("rotate")
                console.log('a')
            });

            $("submit").click(function () { 
                fullname = $("#name");

                
            });

        });

   </script>
</body>
</html>
