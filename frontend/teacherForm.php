<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/leftbar.css">
    <link rel="stylesheet" href="css/teacher_form.css">
    <title>Sửa đổi thông tin giáo viên</title>
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
                <li><a href="teacher_detail.php">Thông tin giáo viên</a></li>
                <li>Sửa đổi thông tin</li>
            </ul>

            <h2>Sửa đổi thông tin</h2>
            <form action="" method="POST" class="container">
            
            <div>
                <label class="teacher name">Họ và tên:</label>
                <input type="text" name="name" id="name">
            </div>

            <div class = "fix">
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
                <label class="teacher phonenumber">Số điện thoại:</label>
                <input type="text" name="phonenumber" id="phonenumber">
            </div>

            <div>
                <label class="teacher subject">Môn học:</label>
                <select name="subject" id="subject">
                    <option value="Toán">Toán</option>
                    <option value="Ngữ văn">Ngữ văn</option>
                    <option value="Vật lý">Vật lý</option>
                    <option value="Hóa học">Hóa học</option>
                    <option value="Sinh học">Sinh học</option>
                    <option value="Lịch sử">Lịch sử</option>
                    <option value="Địa lý">Địa lý</option>
                    <option value="Tiếng Anh">Tiếng Anh</option>
                    <option value="Giáo dục công dân">Giáo dục công dân</option>
                    <option value="Công nghệ">Công nghệ</option>
                    <option value="Tin học">Tin học</option>
                    <option value="Giáo dục quốc phòng">Giáo dục quốc phòng</option>
                    <option value="Thể dục">Thể dục</option>
                </select>
            </div>

                <div></div>

            <div class = "submission">
                <input type="submit" value="Chấp nhận">
                <input type="button" value="Bỏ qua">
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