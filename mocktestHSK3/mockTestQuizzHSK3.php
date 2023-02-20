<?php
    include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOCK TEST QUIZZ HSK 3</title>
    <link rel="stylesheet" href="../assets/css/style_mockTestQuizz.css">
    <link rel="stylesheet" href="../assets/css/style_shopping.css">
    <link rel="stylesheet" href="../assets/css/style_mocktests.css">
    <link rel="stylesheet" href="../assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <style>
            table tr td
            {
                /* border: 1px solid #4d4949; */
                padding: 5px;
                width: 250px;
                font-family: 'Noto Serif TC', serif; 
                padding-bottom: 20px;
                            
            }

            table
            {
                border-collapse:collapse;

            }

            h2, h1{
                font-family: 'Noto Serif TC', serif;
            }
    </style>
</head>
<body>
    <!-- <script src = "https://sh20raj.github.io/AudiPlay/audiplay.js"></script> -->
    <div class="main">
        <!-- ================== HEADER ================================= -->
        <div class="header-mocktests">
            <ul class="home-button">
                <li class="header-mocktetsts-img">
                    <a href="index.php"><img src="../assets/img/mocktest.jpg" alt=""></a>
                </li>
                <li>
                    <button class = "header-mocktetsts-home">
                        <a class = "header-mocktetsts-text" href="mocktests.php">Home</a>
                    </button>
                </li>

                <li>
                    <button class = "header-mocktetsts-hsk">
                        <a class = "header-mocktetsts-text" href="">
                            Cấu trúc bài thi HSK 
                            <i class="fa-solid fa-caret-down"></i>
                        </a>
                    </button>

                    <ul class="header-mocktestes-hsk-subnav">
                        <li>
                            <a class="hsk1-subnav" href="">HSK 1 </a>
                        </li>
                        <li>
                            <a class="hsk2-subnav" href="">HSK 2 </a>
                        </li>
                        <li>
                            <a class="hsk3-subnav" href="">HSK 3 </a>
                        </li>
                        <li>
                            <a class="hsk4-subnav" href="">HSK 4 </a>
                        </li>
                        <li>
                            <a class="hsk5-subnav" href="">HSK 5 </a>
                        </li>
                        <li>
                            <a class="hsk6-subnav" href="">HSK 6 </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <button class = "header-mocktetsts-example">
                        <a class = "header-mocktetsts-text" href="">
                             Mock tests HSK
                            <i class="fa-solid fa-caret-down"></i> 
                        </a>
                    </button>

                    <ul class="header-mocktestes-hsk-subnav">
                        <li>
                            <a class="hsk1-subnav-test" href="">HSK 1 </a>
                        </li>
                        <li>
                            <a class="hsk2-subnav-test" href="">HSK 2 </a>
                        </li>
                        <li>
                            <a class="hsk3-subnav-test" href="">HSK 3 </a>
                        </li>
                        <li>
                            <a class="hsk4-subnav-test" href="">HSK 4 </a>
                        </li>
                        <li>
                            <a class="hsk5-subnav-test" href="">HSK 5 </a>
                        </li>
                        <li>
                            <a class="hsk6-subnav-test" href="">HSK 6 </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <button class = "header-mocktetsts-vocab">
                        <a class = "header-mocktetsts-text" href="">Vocabulary HSK</a>
                    </button>
                </li>

            </ul>

            <div class="search-mocktestes-hsk-subnav">
                        <div class="mocktestes-hsk-subnav__search">
                                <div class="header-shopping__search-input-wrap">
                                    <form action="search_mocktest.php" method = "get" class="header-mocktest__search-input">
                                    <input type="text" name = "tukhoa_mocktests" class="header-mocktest__search-input" placeholder="Nhập để tìm kiếm câu hỏi"> 
                                    
                                    
                                    <!-- Search history -->
                                    <div class="header__search-history">
                                    </div>
                                    
                                </div>
                
                                    <input style = "font-size: 12px; color: white; cursor: pointer;" type="submit" name = "timkiem_mocktests" class="header-mocktests__search-btn" value = 'Search'>
                                </form>
                                
                            
                        </div>
            </div> 
                
                
        </div>

            
        
        <div class="test-content">
            
            
                <div class = "test-content__container" style  = "padding-left: 30px;" >
                    <h1 class = "header-moctest" >新汉语水平考试 <br>HSK (三级)</h1>

                    <!-- ==================== AUDIO =============================== -->
                    <?php
                        $audio = $_GET['mocktestID'];
                        $sql_audio = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$audio' and type = 'HSK3D1P1'";
                        $qr_audio = mysqli_query($conn,$sql_audio)  ;
                        $row_audio = mysqli_fetch_array($qr_audio); 
                    ?>
                        <h2 style = "margin-bottom: 20px;">File Audio - 听力 【20题 （Question 1 - Question 20）- 约 15 分钟】</h2>
                        <audio controls class = "audiplay" style = "width: 100%;">
                            <source src="../audio_mocktestHSK3/<?php echo $row_audio['fileaudio'];?>" type="audio/mpeg">
                        </audio>

                    <!-- ================== LISTENING SECTION 1 - QUESTION 1 - QUESTION 5======================= -->
                    <h1>一，听力</h1>
                    <h2>第一部分</h2>
                        <!-- =================== IMG SECTION ======================-->
                    <?php
                        
                        $listening_1_img = $_GET['mocktestID'];
                        $sql_listening_1_img = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$listening_1_img' and type = 'HSK3D1P1IMG'";
                        $qr_listening_1_img = mysqli_query($conn,$sql_listening_1_img)  ; 
                        $row_listening_1_img = mysqli_fetch_array($qr_listening_1_img)
                    ?>

                    <div class="test-image-section">
                    <table class="test-image-section__tbl-container">
                            <tr>
                                <td rowspan = "2" class = "first-col">
                                    <?php echo $row_listening_1_img['quesnum']; ?>
                                </td>

                                <td>
                                    <img src="../img/<?php echo $row_listening_1_img['fileimage1']; ?>" alt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="../img/<?php echo $row_listening_1_img['fileimage2']; ?>" aslt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="../img/<?php echo $row_listening_1_img['fileimage3']; ?>" alt="" class = "question-img">
                                </td>

                                
                            </tr>

                            <tr>
                                <td>
                                    <img src="../img/<?php echo $row_listening_1_img['fileimage4']; ?>" alt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="../img/<?php echo $row_listening_1_img['fileimage5']; ?>" alt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="../img/<?php echo $row_listening_1_img['fileimage6']; ?>" alt="" class = "question-img">
                                </td>
                            </tr>
                        </table>
                    </div>

                        <!-- =========== QUESTION SECTION ======================== -->
                    <?php
                        
                        $mathang = $_GET['mocktestID'];
                        $sql_mathang = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$mathang' and type = 'HSK3D1P1'";
                        $qr_mathang = mysqli_query($conn,$sql_mathang)  ; 
                    ?>
                                
                    <?php
                        while($row_mathang = mysqli_fetch_array($qr_mathang)) {
                    ?>

                    <div class="test-image-section">
                        <table class="test-image-section__tbl-container">
                            
                            <tr>
                                <td class = "first-col"><?php echo $row_mathang['quesnum'] ?></td>
                                <td style = "width: 500px;" >
                                    <form action="" method="get">
                                        <input type="radio" name="picture" id="radioA">
                                        <label style = "margin-right: 30px;" for="radioA"><?php echo $row_mathang['answerA'] ?></label>

                                        <input type="radio" name="picture" id="radioB">
                                        <label style = "margin-right: 30px;" for="radioB"><?php echo $row_mathang['answerB'] ?></label>

                                        <input type="radio" name="picture" id="radioC">
                                        <label style = "margin-right: 30px;" for="radioC"><?php echo $row_mathang['answerC'] ?></label>

                                        <input type="radio" name="picture" id="radioD">
                                        <label style = "margin-right: 30px;" for="radioD"><?php echo $row_mathang['answerD'] ?></label>

                                        <input type="radio" name="picture" id="radioE">
                                        <label style = "margin-right: 30px;" for="radioE"><?php echo $row_mathang['answerE'] ?></label>

                                        <input type="radio" name="picture" id="radioF">
                                        <label style = "margin-right: 30px;" for="radioF"><?php echo $row_mathang['answerF'] ?></label>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>


                    <!-- ================== LISTENING SECTION 1 - QUESTION 6 - QUESTION 10 ======================= -->

                        <!-- =================== IMG SECTION ======================-->
                    <?php
                        
                        $listening_2_img = $_GET['mocktestID'];
                        $sql_listening_2_img = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$listening_2_img' and type = 'HSK3D1P1_2IMG'";
                        $qr_listening_2_img = mysqli_query($conn,$sql_listening_2_img)  ; 
                        $row_listening_2_img = mysqli_fetch_array($qr_listening_2_img)
                    ?>

                    <div class="test-image-section">
                    <table class="test-image-section__tbl-container">
                            <tr>
                                <td rowspan = "2" class = "first-col">
                                    <?php echo $row_listening_2_img['quesnum']; ?>
                                </td>

                                <td>
                                    <img src="../img/<?php echo $row_listening_2_img['fileimage1']; ?>" alt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="../img/<?php echo $row_listening_2_img['fileimage2']; ?>" aslt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="../img/<?php echo $row_listening_2_img['fileimage3']; ?>" alt="" class = "question-img">
                                </td>

                                
                            </tr>

                            <tr>
                                <td>
                                    <img src="../img/<?php echo $row_listening_2_img['fileimage4']; ?>" alt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="../img/<?php echo $row_listening_2_img['fileimage5']; ?>" alt="" class = "question-img">
                                </td>
                            </tr>
                        </table>
                    </div>

                        <!-- =========== QUESTION SECTION ======================== -->
                    <?php
                        
                        $listeing_1_2 = $_GET['mocktestID'];
                        $sql_listeing_1_2 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$listeing_1_2' and type = 'HSK3D1P1_2'";
                        $qr_listeing_1_2 = mysqli_query($conn,$sql_listeing_1_2)  ; 
                    ?>
                                
                    <?php
                        while($row_listeing_1_2 = mysqli_fetch_array($qr_listeing_1_2)) {
                    ?>

                    <div class="test-image-section">
                        <table class="test-image-section__tbl-container">
                            
                            <tr>
                                <td class = "first-col"><?php echo $row_listeing_1_2['quesnum'] ?></td>
                                <td style = "width: 500px;" >
                                    <form action="" method="get">
                                        <input type="radio" name="picture" id="radioA">
                                        <label style = "margin-right: 30px;" for="radioA"><?php echo $row_listeing_1_2['answerA'] ?></label>

                                        <input type="radio" name="picture" id="radioB">
                                        <label style = "margin-right: 30px;" for="radioB"><?php echo $row_listeing_1_2['answerB'] ?></label>

                                        <input type="radio" name="picture" id="radioC">
                                        <label style = "margin-right: 30px;" for="radioC"><?php echo $row_listeing_1_2['answerC'] ?></label>

                                        <input type="radio" name="picture" id="radioD">
                                        <label style = "margin-right: 30px;" for="radioD"><?php echo $row_listeing_1_2['answerD'] ?></label>

                                        <input type="radio" name="picture" id="radioE">
                                        <label style = "margin-right: 30px;" for="radioE"><?php echo $row_listeing_1_2['answerE'] ?></label>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- ================= END LISTENING SECTION 1 (1 - 10) =========================================== -->

                    <!-- ================== LISTENING SECTION 2 QUESTION 11 - QUESTION 20 ============================= -->
                    <?php
                        
                        $listening_2 = $_GET['mocktestID'];
                        $sql_listening_2 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$listening_2' and type = 'HSK3D1P2'";
                        $qr_listening_2 = mysqli_query($conn,$sql_listening_2);       
                    
                    ?>
                    <h2>第二部分</h2>
                    <?php
                        while($row_listening_2 = mysqli_fetch_array($qr_listening_2)) {
                    ?>
                    
                    <div class="test-image-section">
                    
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td class = "first-col"><?php echo $row_listening_2['quesnum'] ?></td>
                                <td style = "width: 300px;"><?php echo $row_listening_2['questions'] ?></td>

                                <form action="" method="get">
                                    <td style = "padding-left: 50px;">
                                        <input type="radio" name="picture" id="radioA">
                                        <label class = "label_true_false" for="radioA"><?php echo $row_listening_2['answerA'] ?></label>
                                        <input type="radio" name="picture" id="radioB">
                                        <label for="radioB"><?php echo $row_listening_2['answerB'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- =================================== END LISTENING SECTION 2 ============================= -->

                    <!-- ======================== LISTENING - SECTION 3 Question 21 - Question 30 =================================== -->
                    <?php
                        
                        $listening_3 = $_GET['mocktestID'];
                        $sql_listening_3 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$listening_3' and type = 'HSK3D1P3'";
                        $qr_listening_3 = mysqli_query($conn,$sql_listening_3)  ;  
                    
                    ?>
                    <h2>第三部分</h2>
                    <?php
                            while($row_listening_3 = mysqli_fetch_array($qr_listening_3)) {
                    ?>

                    <div class="test-image-section">
                        <table class="test-image-section__tbl-container">
                            <tr>
                                
                                <td class = "first-col"><?php echo $row_listening_3['quesnum'] ?></td>

                                <form action="" method="get">
                                    <td>
                                        <input type="radio" name="picture" id="radioA">
                                        <label for="radioA"><?php echo $row_listening_3['answerA'] ?></label>
                                    </td>

                                    <td>
                                        <input type="radio" name="picture" id="radioB">
                                        <label for="radioB"><?php echo $row_listening_3['answerB'] ?></label>
                                    </td>

                                    <td>
                                        <input type="radio" name="picture" id="radioC">
                                        <label for="radioC"><?php echo $row_listening_3['answerC'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- =================================== END LISTENING SECTION 3 ============================= -->



                    <!-- ======================== LISTENING - SECTION 4 Question 31 - Question 40 =================================== -->
                    <?php
                        
                        $listening_4 = $_GET['mocktestID'];
                        $sql_listening_4 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$listening_4' and type = 'HSK3D1P4'";
                        $qr_listening_4 = mysqli_query($conn,$sql_listening_4)  ;  
                    
                    ?>
                    <h2>第四部分</h2>
                    <?php
                            while($row_listening_4 = mysqli_fetch_array($qr_listening_4)) {
                    ?>

                    <div class="test-image-section">
                        <table class="test-image-section__tbl-container">
                            <tr>
                                
                                <td class = "first-col"><?php echo $row_listening_4['quesnum'] ?></td>

                                <form action="" method="get">
                                    <td>
                                        <input type="radio" name="picture" id="radioA">
                                        <label for="radioA"><?php echo $row_listening_4['answerA'] ?></label>
                                    </td>

                                    <td>
                                        <input type="radio" name="picture" id="radioB">
                                        <label for="radioB"><?php echo $row_listening_4['answerB'] ?></label>
                                    </td>

                                    <td>
                                        <input type="radio" name="picture" id="radioC">
                                        <label for="radioC"><?php echo $row_listening_4['answerC'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- =================================== END LISTENING SECTION 4 ============================= -->


                    <!-- ================ READING - SECTION 1 - Question 41 - Question 45 ========================= -->

                    <?php
                        
                        $reading_1_ques = $_GET['mocktestID'];
                        $sql_reading_1_ques = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_1_ques' and type = 'HSK3D1DP1QUES_1'";
                        $qr_reading_1_ques = mysqli_query($conn,$sql_reading_1_ques)  ;  
                        $row_reading_1_ques = mysqli_fetch_array($qr_reading_1_ques);      
                    
                    ?>

                    <h1>二，阅读</h1>
                    <h2>第一部分</h2>
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td rowspan = "2" class = "first-col">
                                    <?php echo $row_reading_1_ques['quesnum']; ?>
                                </td>

                                <td style = "width: 500px; padding-left: 100px;">
                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_1_ques['answerA'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_1_ques['answerB'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_1_ques['answerC'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_1_ques['answerD'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_1_ques['answerE'];
                                    ?></p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_1_ques['answerF'];
                                    ?> </p>
                                
                                </td>

                                
                            </tr>
                        </table>

                    <?php
                        
                        $reading_1 = $_GET['mocktestID'];
                        $sql_reading_1 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_1' and type = 'HSK3D1DP1_1'";
                        $qr_reading_1 = mysqli_query($conn,$sql_reading_1);       
                    
                    ?>
                    
                    <?php
                        while($row_reading_1 = mysqli_fetch_array($qr_reading_1)) {
                    ?>
                    
                    <div class="test-image-section">
                    
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td class = "first-col"><?php echo $row_reading_1['quesnum'] ?></td>
                                <td><?php echo $row_reading_1['questions'] ?></td>

                                <form action="" method="get">
                                    <td style  = "width: 450px; padding-left: 50px;">
                                        
                                        <input type="radio" name="picture" id="radioA">
                                        <label style  = "margin-right: 30px;" for="radioA"><?php echo $row_reading_1['answerA'] ?></label>

                                        <input type="radio" name="picture" id="radioB">
                                        <label style  = "margin-right: 30px;" for="radioB"><?php echo $row_reading_1['answerB'] ?></label>

                                        <input type="radio" name="picture" id="radioC">
                                        <label style  = "margin-right: 30px;" for="radioC"><?php echo $row_reading_1['answerC'] ?></label>

                                        <input type="radio" name="picture" id="radioD">
                                        <label style  = "margin-right: 30px;" for="radioD"><?php echo $row_reading_1['answerD'] ?></label>

                                        <input type="radio" name="picture" id="radioE">
                                        <label style  = "margin-right: 30px;" for="radioE"><?php echo $row_reading_1['answerE'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- ================ END READING - SECTION 1 - Question 41 - Question 45 ========================= -->


                    <!-- ================ READING - SECTION 2 - Question 46 - Question 50 ========================= -->

                    <?php
                        
                        $reading_2_ques = $_GET['mocktestID'];
                        $sql_reading_2_ques = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_2_ques' and type = 'HSK3D1DP1QUES_2'";
                        $qr_reading_2_ques = mysqli_query($conn,$sql_reading_2_ques)  ;  
                        $row_reading_2_ques = mysqli_fetch_array($qr_reading_2_ques);      
                    
                    ?>
                    
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td rowspan = "2" class = "first-col">
                                    <?php echo $row_reading_2_ques['quesnum']; ?>
                                </td>

                                <td style = "width: 500px; padding-left: 100px;">
                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_2_ques['answerA'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_2_ques['answerB'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_2_ques['answerC'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_2_ques['answerD'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_2_ques['answerE'];
                                    ?></p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_2_ques['answerF'];
                                    ?> </p>
                                
                                </td>

                                
                            </tr>
                        </table>

                    <?php
                        
                        $reading_2 = $_GET['mocktestID'];
                        $sql_reading_2 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_2' and type = 'HSK3D1DP1_2'";
                        $qr_reading_2 = mysqli_query($conn,$sql_reading_2);       
                    
                    ?>
                    
                    <?php
                        while($row_reading_2 = mysqli_fetch_array($qr_reading_2)) {
                    ?>
                    
                    <div class="test-image-section">
                    
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td class = "first-col"><?php echo $row_reading_2['quesnum'] ?></td>
                                <td><?php echo $row_reading_2['questions'] ?></td>

                                <form action="" method="get">
                                    <td style  = "width: 450px; padding-left: 50px;">
                                        
                                        <input type="radio" name="picture" id="radioA">
                                        <label style  = "margin-right: 30px;" for="radioA"><?php echo $row_reading_2['answerA'] ?></label>

                                        <input type="radio" name="picture" id="radioB">
                                        <label style  = "margin-right: 30px;" for="radioB"><?php echo $row_reading_2['answerB'] ?></label>

                                        <input type="radio" name="picture" id="radioC">
                                        <label style  = "margin-right: 30px;" for="radioC"><?php echo $row_reading_2['answerC'] ?></label>

                                        <input type="radio" name="picture" id="radioD">
                                        <label style  = "margin-right: 30px;" for="radioD"><?php echo $row_reading_2['answerD'] ?></label>

                                        <input type="radio" name="picture" id="radioE">
                                        <label style  = "margin-right: 30px;" for="radioE"><?php echo $row_reading_2['answerE'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- ================ END READING - SECTION 2 - Question 46 - Question 50 ========================= -->


                    <!-- ================ READING - SECTION 3 - Question 51 - Question 55 ========================= -->

                    <?php
                        
                        $reading_3_ques = $_GET['mocktestID'];
                        $sql_reading_3_ques = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_3_ques' and type = 'HSK3D1DP2QUES_1'";
                        $qr_reading_3_ques = mysqli_query($conn,$sql_reading_3_ques)  ;  
                        $row_reading_3_ques = mysqli_fetch_array($qr_reading_3_ques);      
                    
                    ?>
                    
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td rowspan = "2" class = "first-col">
                                    <?php echo $row_reading_3_ques['quesnum']; ?>
                                </td>

                                <td style = "width: 500px; padding-left: 100px;">
                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_3_ques['answerA'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_3_ques['answerB'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_3_ques['answerC'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_3_ques['answerD'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_3_ques['answerE'];
                                    ?></p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_3_ques['answerF'];
                                    ?> </p>
                                
                                </td>

                                
                            </tr>
                        </table>

                    <?php
                        
                        $reading_3 = $_GET['mocktestID'];
                        $sql_reading_3 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_3' and type = 'HSK3D1DP2_1'";
                        $qr_reading_3 = mysqli_query($conn,$sql_reading_3);       
                    
                    ?>
                    
                    <?php
                        while($row_reading_3 = mysqli_fetch_array($qr_reading_3)) {
                    ?>
                    
                    <div class="test-image-section">
                    
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td class = "first-col"><?php echo $row_reading_3['quesnum'] ?></td>
                                <td><?php echo $row_reading_3['questions'] ?></td>

                                <form action="" method="get">
                                    <td style  = "width: 450px; padding-left: 50px;">
                                        
                                        <input type="radio" name="picture" id="radioA">
                                        <label style  = "margin-right: 30px;" for="radioA"><?php echo $row_reading_3['answerA'] ?></label>

                                        <input type="radio" name="picture" id="radioB">
                                        <label style  = "margin-right: 30px;" for="radioB"><?php echo $row_reading_3['answerB'] ?></label>

                                        <input type="radio" name="picture" id="radioC">
                                        <label style  = "margin-right: 30px;" for="radioC"><?php echo $row_reading_3['answerC'] ?></label>

                                        <input type="radio" name="picture" id="radioD">
                                        <label style  = "margin-right: 30px;" for="radioD"><?php echo $row_reading_3['answerD'] ?></label>

                                        <input type="radio" name="picture" id="radioE">
                                        <label style  = "margin-right: 30px;" for="radioE"><?php echo $row_reading_3['answerE'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- ================ END READING - SECTION 3 - Question 51 - Question 55 ========================= -->


                    <!-- ================ READING - SECTION 3 - Question 56 - Question 60 ========================= -->

                    <?php
                        
                        $reading_3_2_ques = $_GET['mocktestID'];
                        $sql_reading_3_2_ques = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_3_2_ques' and type = 'HSK3D1DQUESP2_2'";
                        $qr_reading_3_2_ques = mysqli_query($conn,$sql_reading_3_2_ques)  ;  
                        $row_reading_3_2_ques = mysqli_fetch_array($qr_reading_3_2_ques);      
                    
                    ?>
                    
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td rowspan = "2" class = "first-col">
                                    <?php echo $row_reading_3_2_ques['quesnum']; ?>
                                </td>

                                <td style = "width: 500px; padding-left: 100px;">
                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_3_2_ques['answerA'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_3_2_ques['answerB'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_3_2_ques['answerC'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_3_2_ques['answerD'];
                                    ?> </p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_3_2_ques['answerE'];
                                    ?></p>

                                    <p style  = "margin-bottom: 30px;">
                                    <?php 
                                        echo $row_reading_3_2_ques['answerF'];
                                    ?> </p>
                                
                                </td>

                                
                            </tr>
                        </table>

                    <?php
                        
                        $reading_3_2 = $_GET['mocktestID'];
                        $sql_reading_3_2 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_3_2' and type = 'HSK3D1DP2_2'";
                        $qr_reading_3_2 = mysqli_query($conn,$sql_reading_3_2);       
                    
                    ?>
                    
                    <?php
                        while($row_reading_3_2 = mysqli_fetch_array($qr_reading_3_2)) {
                    ?>
                    
                    <div class="test-image-section">
                    
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td class = "first-col"><?php echo $row_reading_3_2['quesnum'] ?></td>
                                <td><?php echo $row_reading_3_2['questions'] ?></td>

                                <form action="" method="get">
                                    <td style  = "width: 450px; padding-left: 50px;">
                                        
                                        <input type="radio" name="picture" id="radioA">
                                        <label style  = "margin-right: 30px;" for="radioA"><?php echo $row_reading_3_2['answerA'] ?></label>

                                        <input type="radio" name="picture" id="radioB">
                                        <label style  = "margin-right: 30px;" for="radioB"><?php echo $row_reading_3_2['answerB'] ?></label>

                                        <input type="radio" name="picture" id="radioC">
                                        <label style  = "margin-right: 30px;" for="radioC"><?php echo $row_reading_3_2['answerC'] ?></label>

                                        <input type="radio" name="picture" id="radioD">
                                        <label style  = "margin-right: 30px;" for="radioD"><?php echo $row_reading_3_2['answerD'] ?></label>

                                        <input type="radio" name="picture" id="radioE">
                                        <label style  = "margin-right: 30px;" for="radioE"><?php echo $row_reading_3_2['answerE'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- ================ END READING - SECTION 2 - Question 56 - Question 60 ========================= -->


                    <!-- ====================== READING - SECTION 3 (Question 61 - Question 70) =============================== -->


                    <?php
                        
                        $reading_3_3 = $_GET['mocktestID'];
                        $sql_reading_3_3 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_3_3' and type = 'HSK3D1DP3'";
                        $qr_reading_3_3 = mysqli_query($conn,$sql_reading_3_3);       
                    
                    ?>
                    <h2>第三部分</h2>
                    <?php
                        while($row_reading_3_3 = mysqli_fetch_array($qr_reading_3_3)) {
                    ?>
                    
                    <div class="test-image-section">
                    
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td class = "first-col"><?php echo $row_reading_3_3['quesnum'] ?></td>
                                <td style = "width: 450px;"><?php echo $row_reading_3_3['questions'] ?></td>

                                <form action="" method="get">
                                    <td style = "padding-left: 50px; width: 450px;">
                                        <input style = "margin-right: 6px;"  type="radio" name="picture" id="radioA">
                                        <label style = "margin-right: 30px;" for="radioA"><?php echo $row_reading_3_3['answerA'] ?></label>

                                        <input style = "margin-right: 6px;" type="radio" name="picture" id="radioB">
                                        <label style = "margin-right: 30px;" for="radioB"><?php echo $row_reading_3_3['answerB'] ?></label>

                                        <input style = "margin-right: 6px;" type="radio" name="picture" id="radioC">
                                        <label for="radioC"><?php echo $row_reading_3_3['answerC'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- ====================== END READING - SECTION 3 (Question 61 - Question 70) =============================== -->

                    <!-- ======================== WRITING SECTION 1 - QUESTION 71 - QUESTION 75 ==================================== -->
                    <h1>三，书写</h1>
                    <?php
                        
                        $reading_4 = $_GET['mocktestID'];
                        $sql_reading_4 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_4' and type = 'HSK3D1VP1'";
                        $qr_reading_4 = mysqli_query($conn,$sql_reading_4);       
                    
                    ?>
                    <h2>第一部分</h2>
                    <?php
                        while($row_reading_4 = mysqli_fetch_array($qr_reading_4)) {
                    ?>

                    <div class="test-image-section">
                        <table>
                            <form action="" method="get">
                                    <tr>
                                        <td><?php echo $row_reading_4['quesnum'] ?></td>
                                        <td style = "width: 500px;">
                                            <label ><?php echo $row_reading_4['questions'] ?></label>
                                        </td>
                                        
                                        <td>
                                            <textarea name="" id="" cols="70" rows="2"></textarea>
                                        </td>
                                    </tr>
                            </form>
                        </table>
                    </div>

                    <?php
                        }
                    ?>
                    <!-- ======================== END WRITING SECTION 1 - QUESTION 71 - QUESTION 75 ==================================== -->

                    <!-- ======================== WRITING SECTION 1 - QUESTION 75 - QUESTION 80 ==================================== -->
                    
                    <?php
                        
                        $reading_4_2 = $_GET['mocktestID'];
                        $sql_reading_4_2 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_4_2' and type = 'HSK3D1VP2'";
                        $qr_reading_4_2 = mysqli_query($conn,$sql_reading_4_2);       
                    
                    ?>
                    <h2>第二部分</h2>
                    <?php
                        while($row_reading_4_2 = mysqli_fetch_array($qr_reading_4_2)) {
                    ?>

                    <div class="test-image-section">
                        <table>
                            <form action="" method="get">
                                    <tr>
                                        <td><?php echo $row_reading_4_2['quesnum'] ?></td>
                                        <td style = "width: 500px;">
                                            <label ><?php echo $row_reading_4_2['questions'] ?></label>
                                        </td>
                                        
                                        <td>
                                            <input type="text" name="" id="">
                                        </td>
                                    </tr>
                            </form>
                        </table>
                    </div>

                    <?php
                        }
                    ?>
                    <!-- ======================== END WRITING SECTION 1 - QUESTION 75 - QUESTION 80 ==================================== -->




                    

                
                    <h2 style = "color: orange; text-align:center;">HSK 三级 考试 现在结束。</h2>
                </div>

            <div class="quizz-select">
                <div class="quizz-select__tittle">Quizz Navigation</div>

                <div class="quizz-select__index">
                    <div class="quizz-select__index--num">1</div>
                    <div class="quizz-select__index--num">1</div>
                    <div class="quizz-select__index--num">1</div>
                    <div class="quizz-select__index--num">1</div>
                    <div class="quizz-select__index--num">1</div>
                    <div class="quizz-select__index--num">1</div>
                    <div class="quizz-select__index--num">1</div>
                    <div class="quizz-select__index--num">1</div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>