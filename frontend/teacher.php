<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/leftbar.css">
   <link rel="stylesheet" href="css/teacher.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Teacher</title>
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
                <li>Giáo viên trong trường</li>
            </ul>

            <h2>Giáo viên trong trường</h2>
            <div class="displayTeacher">
                
                <!-- <?php
                    // require_once '../../database/config.php';
                    // $sql = "SELECT * FROM studentdetail";
                    // if ($result = mysqli_query($link, $sql)) {
                    //     if (mysqli_num_rows($result) > 0) {
                    //         echo "<table class='info' width='700px'>";
                    //             echo "<thead>";
                    //                 echo "<tr>";
                    //                     echo "<th>Ho Va ten</th>";
                    //                     echo "<th>Gioi Tinh</th>";
                    //                     echo "<th>Ngay sinh</th>";
                    //                     echo "<th>Quoc Tich</th>";
                    //                     echo "<th>Khoi</th>";
                    //                 echo "</tr>";
                    //             echo "</thead>";
                    //             echo "<tbody>";
                    //                 while ($row = mysqli_fetch_array($result)) {
                    //                     echo "<tr>";
                    //                         echo "<td>" .$row['HoDem'] ."</td>";
                    //                         echo "<td>" .$row['GioiTinh'] ."</td>";
                    //                         echo "<td>" .$row['NgaySinh'] ."</td>";
                    //                         echo "<td>" .$row['QuocTich'] ."</td>";
                    //                         echo "<td>" .$row['Khoi'] ."</td>";
                    //                     echo "</tr>";
                    //                 }

                    //             echo "</tbody>";
                    //         echo "</table>";
                    //     }
                    // }

                ?> -->
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