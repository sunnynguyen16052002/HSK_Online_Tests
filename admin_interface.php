<?php
    session_start();
    ob_start();
    include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');

    if((isset($_POST['submit-login'])) && ($_POST['submit-login'])) {
        $email = $_POST['email1'];
        $pass = $_POST['password1'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="./assets/css/style_adlogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="loginAD-container ">
        <div class="loginAD-form js-modal-login-container">
            <form action="" method="post" class="js-form-modal-login" id="form-3">
                <h2 class="loginAD-header">Admin Login</h2>
                <div class="form-group">
                    <label for="email1" class="form-label">Email</label>
                    <input id="email1" name="email1" type="text" placeholder="VD: sunnyhsk@online.edu.vn"
                        class="form-control">
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password1" class="form-label">Password</label>
                    <input id="password1" name="password1" type="password" placeholder="Nhập mật khẩu"
                        class="form-control">
                    <div id="eye">
                        <i class="ti-eye" style="position: relative; right: -181px; bottom: 28px; cursor: pointer;"></i>
                    </div>
                    <span class="form-message"></span>
                </div>

                <input class="form-submit" type="submit" name="submit-login" id="" value="Đăng nhập">
            </form>
        </div>

        <div class="loginAD-img">
            <img src="./img/dai-hoc-nam-kinh-2.png" alt="">
        </div>
    </div>

    <script src="./validationForm.js"></script>

    <script>

        //Out put


        Validator({
            form: '#form-3',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#email1', 'Please fill this field!'),
                Validator.isRequired('#password1', 'Please fill this field!'),
                Validator.isEmail('#email1', 'This fieid must be email!'),
            ],

        });
    </script>
</body>

</html>