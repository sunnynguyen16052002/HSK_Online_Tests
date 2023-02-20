<?php
    session_start();
?>
<?php
    include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
    $user = (isset($_SESSION['nguoidung'])) ? $_SESSION['nguoidung'] : [];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SUNNY HSK ONLINE</title>
        <link rel="stylesheet" href="./assets/css/style_signup.css">
        <link rel="stylesheet" href="./assets/css/style_ex_index.css">
        <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lilita+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique+B1&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            


            <!-- ===========HEADER SECTION============= -->
            <div class="header">
                <div class="header-nav">
                    <div class="logo">
                        <a href="mainPage.php" class="logo-link">
                            <span style="color: yellow;">
                                <i class="fa-solid fa-sun"></i>
                                SUNNY
                            </span>
                            <span style="color: rgb(201, 86, 19);">HSK</span> 
                        </a>
                    </div>
                    <div class="header-ul-navigation">
                        <ul class="nav_ul">
                            <li>
                                <a href="listening_practices.php">
                                    Listening
                                </a>
                            </li>
                            <li><a href="mocktests.php">Mock Tests</a></li>
                            <li><a href="">Documents</a></li>
                            <li><a href="shopping.php">Shopping</a></li>
                            <!-- <li><a href="">Feedback</a></li> -->
                        </ul>
                    </div>

                   

                
                    <div class="login-signup-section">
                        <?php if(isset ($user['HovaTen'])) {?>
                                <li class = "login js-login header__navbar-item header__navbar-user"> 
                                    <a href = "#" class = "name-user" ><?php echo $user['HovaTen'] ?></a>

                                    <ul class="header__navbar-user-menu">
                                            <li class="header__navbar-user-item">
                                                <a href="changePassword.php">Change Password</a>
                                            </li>
                                            <li class="header__navbar-user-item">
                                                <a href="myAccount.php">My Account</a>
                                            </li>
                                            <li class="header__navbar-user-item">
                                                <a href="myAccount.php">My Test</a>
                                            </li>
                                            <li class="header__navbar-user-item">
                                                <a href="myOrders.php">My order</a>
                                            </li>
                                            <li class="header__navbar-user-item">
                                                <a href="logout.php">Log out</a>
                                            </li>
                                    </ul>
                                </li>
                            <?php } else {?>
                                <a href="login.php" class= "signin-header">Login</a>
                                <span style = "color: white;"> | </span>
                                <a href="signup.php" class= "regester-header">Regester</a>
                            <?php } ?>
                    </div>

                    <div class="menu-btn">
                        <i class="ti-menu"></i>
                        <div class="headerr-ul-navigation"> <!-- headerr -->
                            <ul class="nav_ull"> <!-- nav_ull -->
                                <li>
                                    <a href="listening_practices.php">
                                        Listening
                                    </a>
                                </li>
                                <li><a href="mocktests.php">Mock Tests</a></li>
                                <li><a href="">Documents</a></li>
                                <li><a href="shopping.php">Shopping</a></li>
                                <li><a href="">Feedback</a></li>
                            </ul>
                        </div>
                   </div>
            

                    
                </div>

                
            </div>
            
            <!-- ==================== SCROLL BAR ====================== -->
            <div class="scroll-indicator-container">
                <div class="scroll-indicator-bar">

                </div>
            </div>

            <!-- ======================= AUTOMATIC SLIDER SECTION =============================== -->

            <!-- image slider start -->
        <div class = "slider-section">
            <div class="slider">
                <div class="slider-list">
                    <!-- radio btn start -->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">
                    <!-- radio btn end -->

                    <!-- slider img start -->
                    <div class="slide-item first">
                        <img src="./img/sunnyhskonl.png" alt="">
                    </div>

                    <div class="slide-item">
                        <img src="./img/hsk-levels.png" alt="">
                    </div>

                    <div class="slide-item">
                        <img src="./img/9caps.png" alt="">
                    </div>

                    <div class="slide-item">
                        <img src="./img/hsk-la-gi.jpg" alt="">
                    </div>

                    <div class="slide-item">
                        <img src="./img/hskgt6cap.jpg" alt="">
                    </div>
                    <!-- slider img end -->

                    <!-- automatic navigation start -->
                    <div class="nav-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                        <div class="auto-btn5"></div>
                    </div>
                    <!-- automatic navigation end -->

                </div>
                <!-- manual navigation start -->
                <div class="nav-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                    <label for="radio5" class="manual-btn"></label>
                </div>
                <!-- manual navigation end -->
            </div>
            <!-- image slider end -->

            <div class="whychooseme">
                
                <p class="whychooseme-title">
                    Tại sao bạn nên chọn <b><span style = "color: #cba300; ">SUNNY HSK ONLINE</span></b>   để thi thử, luyện nghe, tải tài liệu và đặt mua những sản phẩm
                    phục vụ cho việc học tiếng Trung của bạn?
                </p>

                <p class="icon-one">
                    <i class="fa-regular fa-file-lines icon-one__icon"></i>
                    Đầy đủ lời giải cho từng đề thi và tiện lợi cho việc in ấn vì file PDF được đánh máy lại 100% nên rất rõ ràng.
                </p>

                <p class="icon-two">
                    <i class="fa-solid fa-book-open icon-two__icon"></i>
                    Kho tài liệu tham khảo đa dạng và cập nhật liên tục
                </p>

                <p class="icon-three">
                    <i class="fa-solid fa-book icon-three__icon"></i>
                    Hệ thống đề thi phong phú và chất lượng
                </p>

                <p class="icon-four">
                    <i class="fa-solid fa-comments icon-four__icon"></i>
                    Luôn luôn nhận feedback của người dùng để cải thiện trải nghiệm người dùng sử dụng dịch vụ của website
                </p>
            </div>
        </div>


        
            <!-- ======================= WHAT IS THE HSK TEST================================= -->
            <div class="whatHSK-section">
                <div class="whatHSK-content-section">
                    <h2 class="about-us-header">What is the HSK test?</h2>
                    <p class="hsk-content-section__infor">What is HSK?
                        HSK, or Hanyu Shuiping Kaoshi ( 汉语水平考试 ), is the official standard for assessing Chinese language ability in non-native speakers.  The assessment criteria were developed at Beijing Language and Culture University in 1984 and the organisation and grading of the test is now managed by Hanban ( 汉办 ).
                        
                    </p>

                    <p class="hsk-content-section__infor">
                        The exam itself is designed to test students' reading, writing and listening ability, with speaking being assessed in a separate exam known as HSKK.
                    </p>

                    <p class="hsk-content-section__infor">
                        To find our more about the exams in their current format, study tips and 2022 HSK exam dates, you can explore the information pages below.
                    </p>
                </div>
                
                <div class="whatHSK-icon-section">
                    <img src="./img/hskimg.png" alt="">
                </div>
            </div>
            <!-- ======================= ABOUT US SECTION ==================================== -->
            <div class="about-us-section">
                <div class="about-us-container">
                    <div class="about-us-img">
                        <img src="./img/giao-trinh-HSK-Standard-Course-removebg-preview.png" alt="" class="about-us-img">
                    </div>

                    <div class="about-us-infor">
                        <h2 class="about-us-header">
                            About us
                        </h2>
                        <p class="about-us-content">
                            <span style = "color: #ea9a0f;" >SUNNY HSK ONLINE</span> is a website that provides Chinese learners with a platform to take the HSK mock test for 6 levels. 
                            When taking the test on this website, learners will be provided with the answer key for each test and can know the score immediately.
                        </p>

                        <p class="about-us-content" style = "margin-top: 8px;">
                            The mock test provided by SN HSK are all PDF versions, 100% retyped. Therefore, the exam questions are always guaranteed to be complete, 
                            clear and convenient for looking up new vocabulary and printing it out for review after taking the test. For more information, just click the button below.
                        </p>
                        <a href="" class="about-us-more">Read more</a>
                    </div>
                </div>
            </div>

            <!-- =======================CONTACT SECTION==================================== -->
            <!-- alert message success start -->
<!-- Mốt js bắt sự kiện -->
            <!-- <div class="alert-success">
                <span>Message sent! Thank your for your contacting us</span>
            </div> -->
             <!-- alert message end -->
<!-- Mốt js bắt sự kiện -->
             <!-- alert error mesage start -->
             <!-- <div class="alert-error">
                <span>Something went wrong! Please try again</span>
             </div> -->
             <!-- alert error mesage end -->


            <div class="bg_contact">
                <div class="contact-section">
                    <div class="contact-infor">
                        <div><i class = "fas fa-map-marker-alt contact-infor-icon"></i> 56 Hoang Dieu 2 street, Linh Chieu, Thu Duc</div>
                        <div><i class = "fas fa-envelope contact-infor-icon"></i> sunnyhskonline@liuxue.edu.vn</div>
                        <div><i class = "fas fa-phone contact-infor-icon"></i> +84 0967 429 000</div>
                        <div><i class = "fas fa-clock contact-infor-icon"></i> Mon - Sat 7:30 AM to 18 paPM</div>
                    </div>

                    <div class="contact-form">
                        <h2>Contact Us</h2>
                        <form action="" method="post">
                            <input type="text" name="name" id="" class = "text-box" placeholder = "Your name" required>
                            <input type="email" name="email" id="" class = "text-box" placeholder = "Your address" required>
                            <textarea name="massage" id=""  rows="5" placeholder = "Message" required></textarea>
                            <input type="submit" name = "submit" class = "send-btn" value="Send">
                        </form>
                    </div>
                </div>
            </div>

            <!-- ================ Footer Section =================== -->
            <div class="footer">
                <div class="grid-5-col">
                    <div class="grid-1-col footer-listening">
                        <a href="listening_practices.php">
                            <h2>LISTENING</h2>
                            
                        </a> 
                        <ul>
                            <li><a href="">Practice Listening HSK 1</a></li>
                            <li><a href="">Practice Listening HSK 2</a></li>
                            <li><a href="">Practice Listening HSK 3</a></li>
                            <li><a href="">Practice Listening HSK 4</a></li>
                            <li><a href="">Practice Listening HSK 5</a></li>
                            <li><a href="">Practice Listening HSK 6</a></li>
                        </ul>
                    </div>

                    <div class="grid-1-col footer-mocktest">
                        <a href="mocktests.php"><h2>MOCK TESTS</h2></a> 
                        <ul>
                            <li><a href="">Mock Tests HSK 1</a></li>
                            <li><a href="">Mock Tests HSK 2</a></li>
                            <li><a href="">Mock Tests HSK 3</a></li>
                            <li><a href="">Mock Tests HSK 4</a></li>
                            <li><a href="">Mock Tests HSK 5</a></li>
                            <li><a href="">Mock Tests HSK 6</a></li>
                        </ul>
                    </div>

                    <div class="grid-1-col footer-documents">
                        <a href=""><h2>DOCUMENTS</h2></a>
                    </div>

                    <div class="grid-1-col footer-shopping">
                        <a href="shopping.php"><h2>SHOPPING</h2></a>
                        <ul>
                            <li><a href="">Giáo trình chuẩn HSK</a></li>
                            <li><a href="">Giáo trình Boya</a></li>
                            <li><a href="">Giáo trình Hán ngữ 6 cuốn</a></li>
                            <li><a href="">Giáo trình HSK mới 9 cấp</a></li>
                            <li><a href="">Dụng cụ học tập, luyện viết</a></li>
                            <li><a href="">Sách ngữ pháp </a></li>
                        </ul>
                    </div>

                    <div class="grid-1-col footer-downloads">
                        <a href=""><h2>DOWNLOAD THE APP</h2></a>
                    </div>
                </div>

                <div class="footer-media-icon">
                    <a href=""><i class="ti-facebook footer-media-icon-items"></i></a> 
                    <a href=""><i class="ti-instagram footer-media-icon-items"></i></a>
                    <a href=""><i class="ti-youtube footer-media-icon-items"></i></a>
                    <a href=""><i class="ti-twitter-alt footer-media-icon-items"></i></a>
                    <a href=""><i class="ti-pinterest-alt footer-media-icon-items"></i></a>
                </div>

                <p style = "margin-bottom: 14px;"  class = "copyright">
                    © Copyright by <a href = "mainPage.php" 
                    style = "color: #f76e6e; text-decoration: none; font-style: italic;"> 
                    Sunny HSK ONLINE </a>
                </p>
            </div>

            <!-- ======================== SIGN OUT - LOGIN FIXED SECTION ======================================= -->
            <div class="fixed-signout-login">
                <p class="fixed-signout-login__infor">
                    <a href="signup.php" class="fixed-signout-login__infor--link"> Register</a>
                    or <a href="login.php" class="fixed-signout-login__infor--link">log in</a> 
                    to be able to experience all the services of 
                    <span style = "color: #e7b00a; font-weight: 600; ">SUNNY</span> 
                    <span style = "color: #d66509; font-weight: 600; ">HSK</span> 
                    
                </p>
            </div>
        </div>

        <script src="./slider_auto.js"></script>
        <script src="./landingPage.js"></script>
    </body>
</html>