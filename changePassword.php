    <?php
        if (session_id() == '') session_start();
        ob_start();

        include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
        $user = (isset($_SESSION['nguoidung'])) ? $_SESSION['nguoidung'] : [];
        if(isset($user['Email']) == false) {
            header('location: login.php');
            exit();
        }

        $error = "";
        if(isset($_POST['changepassword']) == true) {
            $email = $_POST['email1'];
            $password_old = $_POST['password_old'];
            $password_new = $_POST['password_new'];
            $password_confirm = $_POST['password_confirm'];

            $sql = "SELECT * FROM nguoidung WHERE Email = ? AND UPassword = '$password_old' ";
            // $sql_query = mysqli_query($conn, $sql);

            $sql_query = $conn -> prepare($sql);
            $sql_query -> execute([$user['Email'], $password_old]);

            // if($sql_query -> rowCount() == 0) {
            //     $error = "Mật khẩu cũ không tồn tại!";
            // }

            if($password_old != $user['UPassword']) {
                echo "Mật khẩu cũ không tồn tại!";
                // echo $error;
            }

            // $sql = "SELECT * FROM nguoidung WHERE Email = '$email'";
            // $sql_query = mysqli_query($conn, $sql);
            // $data = mysqli_fetch_assoc($sql_query); //lấy dữ liệu từ database và đang ở dạng bảng
            // $checkEmail = mysqli_num_rows($sql_query);

            //     $checkPass = password_verify($password_old, $data['UPassword']);

            //     if(!$checkPass) {
            //         echo "Sai mật khẩu";
            //         // setcookie("error2", "Mật khẩu không đúng !", time()+1, "/","", 0);
            //     }
        }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐỔI MẬT KHẨU</title>
    <link rel="stylesheet" href="./assets/css/style_index.css">
    <link rel="stylesheet" href="./assets/css/style_loginform.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
</head>
<body>
    <div class="modal-login-container js-modal-login-container">

        <form action="" method="POST" class="form-modal-login js-form-modal-login" id="form-3">
            
            <h3 class="modal-login-heading">Đổi Mật Khẩu</h3>
            <div class="spacer"></div>
            <?php if($error != "") {?>
                <div class="alert"><?php echo $error; ?></div>
            <?php }?>
            <div class="form-group">
                <label for="email1" class="form-label">Email đăng nhập</label>
                <input id="email1" name="email1" type="text" value = "<?php echo $user['Email'] ?>" disabled placeholder="VD: sunnyhsk@online.edu.vn" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password_old" class="form-label">Mật khẩu cũ</label>
                <input id="password_old" name="password_old" value = "<?php if(isset($password_old) == true) echo $password_old; ?>" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <div id = "eye">
                    <i class="ti-eye" style= "position: relative; right: -181px; bottom: 28px; cursor: pointer;"></i>
                </div>
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password_new" class="form-label">Mật khẩu mới</label>
                <input id="password_new" name="password_new" value = "<?php if(isset($password_new)== true)  echo $password_new; ?>" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <div id = "eye">
                    <i class="ti-eye" style= "position: relative; right: -181px; bottom: 28px; cursor: pointer;"></i>
                </div>
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password_confirm" class="form-label">Nhập lại mật khẩu mới</label>
                <input id="password_confirm" name="password_confirm" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <div id = "eye">
                    <i class="ti-eye" style= "position: relative; right: -181px; bottom: 28px; cursor: pointer;"></i>
                </div>
                <span class="form-message"></span>
            </div>

            <!-- <button class="form-submit">Đăng nhập</button> -->
            <input class="form-submit" type="submit" name="changepassword" id="" value="Đổi mật khẩu">
        </form>

    </div>

    <script src="./signin.js"></script>

    <script src="./logout.js"></script>

    <script src = "./validationForm.js"></script>

    <script src="./showHidePass.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script>
    
    //Out put
       

        Validator({
            form:'#form-3',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#password_old'),
                Validator.isRequired('#password_new'),
                Validator.isRequired('#password_confirm'),
                Validator.minLength('#password_new', 6),
                Validator.isConfirm('#password_confirm', function () {
                return document.querySelector('#form-3 #password_new').value;
                
            }, 'Mật khẩu nhập lại không chính xác'),
        ],

            onsubmit: function (data) {
                //CALL API
            }

        });

        // $(document).ready(function() {
        //     $('#eye').click(function() {
        //         aler('hello');
        //     });
        // });
    </script>
</body>
</html>