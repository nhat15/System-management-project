<?php
    require_once '../database/config.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/leftbar.css">
    <link rel="stylesheet" href="css/student_result.css">
    <title>Kết quả học tập</title>
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
                <li>Kết quả học tập</li>
            </ul>
            
            <h2>Kết quả học tập</h2>
            <div class="result">
                <table width='100%'>
                    <thead>
                        <tr>
                            <th>Môn học</th>
                            <th>Điểm kiểm tra miệng</th>
                            <th>Điểm kiểm tra 15 phút</th>
                            <th>Điểm kiểm tra 1 tiết<br>(lần 1)</th>
                            <th>Điểm kiểm tra 1 tiết<br>(lần 2)</th>
                            <th>Điểm kiểm tra cuối kỳ</th>
                            <th>Điểm tổng kết môn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // $sql = "SELECT * FROM score_sheet WHERE";
                            // $result = mysqli_query($link, $sql);
                            // while ($rows = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                            // }
                        ?>
                    </tbody>
                </table>
                <div class="final">
                    <p> Điểm tổng kết học kỳ:</p>
                    <p>Thứ hạng trung bình toàn lớp: </p>
                </div>
            </div>
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
