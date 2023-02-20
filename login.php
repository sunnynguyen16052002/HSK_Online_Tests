    <?php
        session_start();
        include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');

        

        if(isset($_POST['email1'])) { 
            $email = $_POST['email1'];
            $password = $_POST['password1'];

            $sql = "SELECT * FROM nguoidung WHERE Email = '$email'";
            $sql_query = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($sql_query); //lấy dữ liệu từ database và đang ở dạng bảng
            $checkEmail = mysqli_num_rows($sql_query);

            if($checkEmail == 1) {
                $checkPass = password_verify($password, $data['UPassword']);

                if($checkPass) {
                    //lưu vào session
                    $_SESSION['nguoidung'] = $data;
                    header('location: mainPage.php');
                } else {
                    echo "Sai mật khẩu";
                    // setcookie("error2", "Mật khẩu không đúng !", time()+1, "/","", 0);
                }
            } else {
                echo "Email không tồn tại";
                // setcookie("error3", "Email không tồn tại !", time()+1, "/","", 0);
            }
        }


    ?>

<?php

    //    if(isset($_POST['submit-login'])&&($_POST['submit-login'])) {
    //         $email=$_POST['email1'];
    //         $password=$_POST['password1'];
        

    //         $sql_KH = mysqli_query($conn,"select * from nguoidung where Email = '$email'");
    //         $count1 = mysqli_num_rows($sql_KH);
            
    //         $data= mysqli_fetch_assoc($sql_KH);

    //         if(($password == "" || $email == "")){
    //             header("location:login.php");
    //             setcookie("error", "Vui lòng nhập đầy đủ thông tin !", time()+1, "/","", 0);
    //         } else {
    //             if($count1 == 1) {
    //                 $checkpass= password_verify($password, $data['password1']); //trả về true nếu khớp mật khẩu và false nếu sai

    //                 if($checkpass){
    //                     header("location:index.php"); // chuyển đến trang KH
    //                 }
    //                 else
    //                 {
    //                     header("location:login.php");
    //                 }
    //             }
                
    //         }  
    //     }
    //     else
    //     {

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG NHẬP</title>
    <link rel="stylesheet" href="./assets/css/style_index.css">
    <link rel="stylesheet" href="./assets/css/style_loginform.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
</head>

<body>
    <div class="modal-login-container js-modal-login-container">

        <form action="" method="POST" class="form-modal-login js-form-modal-login" id="form-2">
            <p class="desc">Bạn chưa có tài khoản? <a href="index.php">Đăng kí</a> | <a href="mainPage.php">Trở về</a></p>
            <h3 class="modal-login-heading">ĐĂNG NHẬP</h3>
            <p class="desc">Đăng nhập để có nhiều trải nghiệm thú vị hơn tại Sunny HSK Online ❤️</p>
        

            <div class="spacer"></div>

            <div class="form-group">
                <label for="email1" class="form-label">Email</label>
                <input id="email1" name="email1" type="text" placeholder="VD: sunnyhsk@online.edu.vn" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password1" class="form-label">Mật khẩu</label>
                <input id="password1" name="password1" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <div id = "eye">
                    <i class="ti-eye" style= "position: relative; right: -181px; bottom: 28px; cursor: pointer;"></i>
                </div>
                <span class="form-message"></span>
            </div>

            <!-- <button class="form-submit">Đăng nhập</button> -->
            <input class="form-submit" type="submit" name="submit-login" id="" value="Đăng nhập">
        </form>

    </div>

    <!-- JAVASCRIPT CODE -->

    <script src="./signin.js"></script>

    <script src="./logout.js"></script>

    <script src = "./validationForm.js"></script>

    <script src="./showHidePass.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script>
    
    //Out put
       

        Validator({
            form:'#form-2',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#email1', 'Vui lòng nhập trường này'),
                Validator.isRequired('#password1'),
                Validator.isEmail('#email1'),
            ],

        });

        // $(document).ready(function() {
        //     $('#eye').click(function() {
        //         aler('hello');
        //     });
        // });
    </script>
</body>
</html>