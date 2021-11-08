<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }
            
        body {
            background-color: #e5eaf5;
        }
        .loginForm {
            width: 500px;
            height: 300px;
            margin: 50px auto;
            padding: 40px;
            background-color: white;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .loginField {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            width: 300px;
            height: 50px;
            background-color: #f2f7ff;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        i {
            font-size: 18px;
            padding-right: 30px;
            color: #344667;
        }

        .loginField .input {
            border: 0;
            outline: none;
            background-color: transparent;
            height: 30px;
            font-size: 18px;
            color: #344667;
        }

        select {
            border: 0;
            outline: none;
            background-color: transparent;
            height: 30px;
            font-size: 18px;
            color: #344667;
            padding-right: 82px;
            cursor: pointer;
        }

        .select_menu {
            position: relative;
        }

        .custom_arrow {
            position: absolute;
            top: 0;
            right: 0;
            display: block;
            /* background-color: #344667; */
            height: 100%;
            width: 50px;
            pointer-events: none;
            border-radius: 10px;
        }

        .custom_arrow::before, .custom_arrow::after {
            content: "";
            position: absolute;
            width: 0;
            height: 0;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .custom_arrow::before {
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 8px solid rgba(255, 255, 255, 0.5);

            top: 40%;
        }       
        
        .custom_arrow::after {
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid rgba(255, 255, 255, 0.5);

            top: 67%;
        }

        #role option {
            background-color: transparent;
            outline: none;
            border: 0;
            cursor: pointer;
            
        }

        .forgotPassword {
            width: 300px;
        }

        a {
            display: block;
            text-align: right;
            text-decoration: none;
            color: #3b4c6b;
            font-weight: 550;
        }

        .submit {
            margin-top: 20px;
            width: 60%;
            height: 50px;
            border-radius: 30px;
            border: 0;
            background-color: #435ebe;
            font-size: 20px;
            color: white;
            cursor: pointer;
        }

        

        button:hover {
            background-color: #6a86ee;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <form method="POST" class="loginForm">
        <div class="loginField">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Số điện thoại hoặc mã học sinh" class="input" id="username">
        </div>

        <div class="loginField">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Mật khẩu" class="input" id="password">
        </div>

        <div class="loginField select_menu">
            <select name="role" id="role">
                <option disabled selected>Đăng nhập với tư cách</option>
                <option value="Student">Student</option>
                <option value="Admin">Admin</option>
                <option value="Teacher">Teacher</option>
            </select>
            <span class="custom_arrow"></span>
        </div>
            

        </div>

        <div class="forgotPassword">
            <a href="">Quên mật khẩu</a>
        </div>

        <button class="submit">Đăng nhập</button>
    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var username = $("#username");
        var password = $("#password");
        var selected_option = $('#role');
        


        $(".submit").click(function () { 
            if (username.val() === "" || password.val() === "") {
                alert("Hãy điền đầy đủ thông tin");
            } 
            if (selected_option.val() === null) {
                alert("Hãy chọn vai trò của bạn");
            }
        });
    </script>
</body>
</html>

