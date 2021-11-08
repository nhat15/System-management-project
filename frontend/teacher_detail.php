<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/leftbar.css">
    <link rel="stylesheet" href="css/teacher_detail.css">
    <title>TeacherDetail</title>
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
                <li>Thông tin giáo viên</li>
            </ul>
        </div>

        <!-- <div class="teacherDetail">
            <img src="../../image/teacher1.jpg" alt="">
            <div class="teacherInfo">About me -->
                <!-- <div class="description">
                    abcdefjhijklmnopqrs
                </div>
                <div class="Info fullName">
                    <label class="teacher">Họ và tên:</label> 
                    <span class="hovaten">Nguyễn Quốc Nhật</span>
                </div>
                <div class="Info gender">
                    <label class="teacher">Giới tính:</label> 
                    <span class="gioitinh">Nam</span>
                </div>
                <div class="Info dateOfBirth">
                    <label class="teacher">Ngày sinh:</label> 
                    <span class="ngaysinh">15/03/2001</span>
                </div>
                <div class="Info nationality">
                    <label class="teacher">Quốc tịch:</label> 
                    <span class="quoctich">Việt Nam</span>
                </div>
                <div class="Info email">
                    <label class="teacher">Email:</label> 
                    <span class="emailadd">quocnhat1503@gmail.com</span>
                </div>
                <div class="Info subject">
                    <label class="teacher">Môn học:</label> 
                    <span class="monhoc">Tiếng Anh</span>
                </div>

                <div class="Info contactNumber">    
                    <label class="teacher">Số điện thoại:</label> 
                    <span class="sdt">0983419519</span>
                </div> -->
            </div>

            <!-- <div class="edit">
                <a href="teacherForm.php"><i class="far fa-edit"></i></a> 
            </div>         -->
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