<?php
    include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
    // $user = [];
    // 
    // $user = $_SESSION['nguoidung'];

    if(isset($_POST['fullname'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $pass_confirm = $_POST['password_confirmation'];

        $pass = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO nguoidung (HovaTen, Email, UPassword)
                VALUES ('$fullname', '$email', '$pass')";
        $sql_query = mysqli_query($conn, $sql);

        if($sql_query){
            header('location: login.php');
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG NHẬP</title>
    
    <!-- <link rel="stylesheet" href="./assets/css/style_index.css"> -->
    <link rel="stylesheet" href="./assets/css/style_loginform.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
</head>
<body>
    <div class="modal-signin-container js-modal-signin-container">

        <form action="" method="POST" class="form-modal-signin js-form-modal-signin" id="form-1">
            <p>Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a> | <a href="mainPage.php">Trở về</a></p>
            <h3 class="modal-signin-heading">Đăng kí tài khoản</h3>
            <p class="desc">Hãy đăng kí để trở thành thành viên của Sunny HSK Online ❤️</p>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="fullname" class="form-label">Tên đầy đủ</label>
                <input id="fullname" name="fullname" type="text" placeholder="VD: Ánh Dương" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" type="text" placeholder="VD: sunnyhsk@online.edu.vn" class="form-control">
                <span class="form-message"></span>
            </div>

            <!-- Thêm -->
            <!-- <div class="form-group">
                <label for="email" class="form-label">Email</label>
                Nam: <input name="gender" type="radio" value="Male" class="form-control">
                Nữ: <input name="gender" type="radio" value="Female" class="form-control">
                <span class="form-message"></span>
            </div> -->

            <!-- <div class="form-group">
                <label for="province" class="form-label">Tỉnh/Tp</label>
                <select id="province" name="province"class="form-control">
                    <option value="">--Chọn tỉnh/TP--</option>
                    <option value="dn">Đồng Nai</option>
                    <option value="bđ">Bình Định</option>
                    <option value="hcm">TP.Hồ Chí Minh</option>
                </select>
                <span class="form-message"></span>
            </div> -->

            <!-- <div class="form-group">
                <label for="avatar" class="form-label">Ảnh đại diện</label>
                <input id="avatar" name="avatar" type="file" class="form-control">
                <span class="form-message"></span>
            </div> -->


                <!-- End Thêm -->
            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control">
                <span class="form-message"></span>
            </div>

            <button class="form-submit">Đăng ký</button>
         
        </form>
        <!-- <a href="mainPage.php"><button class="form-return">Trở về</button></a> -->



    </div>

    <script src="./signin.js"></script>

    <script src="./logout.js"></script>

    <script src = "./validationForm.js"></script>


    <script>
    
    //Out put
    Validator({
        form:'#form-1',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
            Validator.isRequired('#fullname', 'Vui lòng nhập họ tên của bạn'),
            Validator.isRequired('#email', 'Vui lòng nhập trường này'),
            Validator.isEmail('#email'),
            Validator.minLength('#password', 6),
            Validator.isRequired('#password_confirmation'),
            // Validator.isRequired('#avatar'),
            // Validator.isRequired('#province'),
            // Validator.isRequired('input[name = "gender"]'),
            Validator.isConfirm('#password_confirmation', function () {
                return document.querySelector('#form-1 #password').value;
                
            }, 'Mật khẩu nhập lại không chính xác'),
        ],

        onsubmit: function (data) {
            //CALL API
        }
    });

    
</script>
</body>
</html>