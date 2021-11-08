<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/leftbar.css">
    <link rel="stylesheet" href="css/student_adding.css">
    <title>Thêm học sinh</title>
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
                <li>Thêm học sinh</li>
            </ul>

            <h2>Thêm học sinh</h2>
            <form action="" method="POST" class="container">
            
            <div>
                <label class="student name">Họ và tên:</label>
                <input type="text" name="name" id="name">
            </div>

            <div class = "fix">
                <label class="student gender">Giới tính:</label>
                <select name="gender" id="gender">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
               
            </div>
            
            <div>
                <label class="student dob">Ngày sinh:</label>
                <input type="date" name="dob" id="dob">
            </div>

            <div>
                <label class="student father">Họ và tên bố:</label>
                <input type="text" name="father" id="father">
            </div>

            <div>
                <label class="student mother">Họ và tên mẹ:</label>
                <input type="text" name="mother" id="mother">
            </div>

            <div>
                <label class="student address">Địa chỉ:</label>
                <input type="text" name="address" id="address">
            </div>

            <div>
                <label class="student email">Email:</label>
                <input type="email" name="email" id="email">
            </div>

            <div>
                <label class="student grade">Khối:</label>
                <input type="text" name="grade" id="grade">
            </div>
            
            <div>
                <label class="student class">Lớp:</label>
                <input type="text" name="class" id="class">
            </div>

            <div>
                <label class="student phonenumber">Số điện thoại:</label>
                <input type="text" name="phonenumber" id="phonenumber">
            </div>

            <div>
                <label class="student username">Tên tài khoản</label>
                <input type="text" name="username" id="username">
            </div>

            <div>
                <label class="student password">Mật khẩu</label>
                <input type="text" name="password" id="password">
            </div>

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

        });

   </script>
</body>
</html>
