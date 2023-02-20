<?php
    include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOCK TEST QUIZZ HSK 4</title>
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
                    <h1 class = "header-moctest" >新汉语水平考试 <br>HSK (四级)</h1>

                    <!-- ==================== AUDIO =============================== -->
                    <?php
                        $audio = $_GET['mocktestID'];
                        $sql_audio = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$audio' and type = 'HSK4D1P1'";
                        $qr_audio = mysqli_query($conn,$sql_audio)  ;
                        $row_audio = mysqli_fetch_array($qr_audio); 
                    ?>
                        <h2 style = "margin-bottom: 20px;">File Audio - 听力 【20题 （Question 1 - Question 20）- 约 15 分钟】</h2>
                        <audio controls class = "audiplay" style = "width: 100%;">
                            <source src="../audio_mocktestHSK4/<?php echo $row_audio['fileaudio'];?>" type="audio/mpeg">
                        </audio>

                    <!-- ================== LISTENING SECTION 1 - QUESTION 1 - QUESTION 10======================= -->
                    <h1>一，听力</h1>
                    <h2>第一部分</h2>
                    <!-- ================== LISTENING SECTION 1 QUESTION 1 - QUESTION 10 ============================= -->
                    <?php
                        
                        $listening_1 = $_GET['mocktestID'];
                        $sql_listening_1 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$listening_1' and type = 'HSK4D1P1'";
                        $qr_listening_1 = mysqli_query($conn,$sql_listening_1);       
                    
                    ?>

                    <?php
                        while($row_listening_1 = mysqli_fetch_array($qr_listening_1)) {
                    ?>
                    
                    <div class="test-image-section">
                    
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td class = "first-col"><?php echo $row_listening_1['quesnum'] ?></td>
                                <td style = "width: 300px;"><?php echo $row_listening_1['questions'] ?></td>

                                <form action="" method="get">
                                    <td style = "padding-left: 50px;">
                                        <input type="radio" name="picture" id="radioA">
                                        <label class = "label_true_false" for="radioA"><?php echo $row_listening_1['answerA'] ?></label>
                                        <input type="radio" name="picture" id="radioB">
                                        <label for="radioB"><?php echo $row_listening_1['answerB'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- =================================== END LISTENING SECTION 1 ============================= -->
                    
                    <!-- ======================== LISTENING - SECTION 2 Question 11 - Question 25 =================================== -->
                    <?php
                        
                        $listening_2 = $_GET['mocktestID'];
                        $sql_listening_2 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$listening_2' and type = 'HSK4D1P2'";
                        $qr_listening_2 = mysqli_query($conn,$sql_listening_2)  ;  
                    
                    ?>
                    <h2>第二部分</h2>
                    <?php
                            while($row_listening_2 = mysqli_fetch_array($qr_listening_2)) {
                    ?>

                    <div class="test-image-section">
                        <table class="test-image-section__tbl-container">
                            <tr>
                                
                                <td class = "first-col"><?php echo $row_listening_2['quesnum'] ?></td>

                                <form action="" method="get">
                                    <td>
                                        <input type="radio" name="picture" id="radioA">
                                        <label for="radioA"><?php echo $row_listening_2['answerA'] ?></label>
                                    </td>

                                    <td>
                                        <input type="radio" name="picture" id="radioB">
                                        <label for="radioB"><?php echo $row_listening_2['answerB'] ?></label>
                                    </td>

                                    <td>
                                        <input type="radio" name="picture" id="radioC">
                                        <label for="radioC"><?php echo $row_listening_2['answerC'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- =================================== END LISTENING SECTION 2 ============================= -->


                    <!-- ======================== LISTENING - SECTION 3 Question 26 - Question 45 =================================== -->
                    <?php
                        
                        $listening_3 = $_GET['mocktestID'];
                        $sql_listening_3 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$listening_3' and type = 'HSK4D1P3'";
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

                    <h1>二，阅读</h1>
                    <h2>第一部分</h2>
                    <!-- ================ READING - SECTION 1 - Question 46 - Question 50 ========================= -->

                    <?php
                        
                        $reading_1_ques = $_GET['mocktestID'];
                        $sql_reading_1_ques = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_1_ques' and type = 'HSK4D1DQUESP1_1'";
                        $qr_reading_1_ques = mysqli_query($conn,$sql_reading_1_ques)  ;  
                        $row_reading_1_ques = mysqli_fetch_array($qr_reading_1_ques);      
                    
                    ?>

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
                            where mocktestsID = '$reading_1' and type = 'HSK4D1DP1_1'";
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

                                        <input type="radio" name="picture" id="radioF">
                                        <label style  = "margin-right: 30px;" for="radioF"><?php echo $row_reading_1['answerF'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- ================ END READING - SECTION 1 - Question 46 - Question 50 ========================= -->

                    <!-- ================ READING - SECTION 1 - Question 51 - Question 55 ========================= -->

                    <?php
                        
                        $reading_2_ques = $_GET['mocktestID'];
                        $sql_reading_2_ques = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_2_ques' and type = 'HSK4D1DQUESP1_2'";
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
                            where mocktestsID = '$reading_2' and type = 'HSK4D1DP1_2'";
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

                                        <input type="radio" name="picture" id="radioF">
                                        <label style  = "margin-right: 30px;" for="radioF"><?php echo $row_reading_2['answerF'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- ================ END READING - SECTION 1 - Question 51 - Question 55 ========================= -->

                    <!-- ======================== READING SECTION 2 - QUESTION 56 - QUESTION 65 ==================================== -->
                    
                    <?php
                        
                        $reading_3 = $_GET['mocktestID'];
                        $sql_reading_3 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$reading_3' and type = 'HSK4D1DP2'";
                        $qr_reading_3 = mysqli_query($conn,$sql_reading_3);       
                    
                    ?>
                    <h2>第二部分</h2>
                    <?php
                        while($row_reading_3 = mysqli_fetch_array($qr_reading_3)) {
                    ?>

                    <div class="test-image-section">
                        <table>
                            <form action="" method="get">
                                    <tr>
                                        <td style = "width: 140px;">
                                            <?php echo $row_reading_3['quesnum'] ?>
                                        </td>
                                        <td style = "width: 400px;">
                                            <p><?php echo $row_reading_3['answerA'] ?></p>
                                            <p><?php echo $row_reading_3['answerB'] ?></p>
                                            <p><?php echo $row_reading_3['answerC'] ?></p>
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
                    <!-- ======================== END WRITING SECTION 2 - QUESTION 56 - QUESTION 65 ==================================== -->

                    <!-- ======================== READING SECTION 3 - QUESTION 66 - QUESTION 85 ==================================== -->
                    
                    <?php
                        
                        $writing_1 = $_GET['mocktestID'];
                        $sql_writing_1 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$writing_1' and type = 'HSK4D1DP3'";
                        $qr_writing_1 = mysqli_query($conn,$sql_writing_1);       
                    
                    ?>
                    <h2>第二部分</h2>
                    <?php
                        while($row_writing_1 = mysqli_fetch_array($qr_writing_1)) {
                    ?>

                    <div class="test-image-section">
                        <table>
                            <form action="" method="get">
                                    <tr>
                                        <td style = "width: 140px;"  rowspan = "2">
                                            <p><?php echo $row_writing_1['quesnum'] ?></p>
                                        </td>
                                        <td ><?php echo $row_writing_1['questions'] ?></td>
                                    </tr>

                                    <tr>
                                        
                                        <td  style = "width: 700px;">
                                            <input style = "margin-right: 6px;" type="radio" name="picture" id="radioA">
                                            <label style = "margin-right: 50px;" for="radioA"><?php echo $row_writing_1['answerA'] ?></label>

                                            <input style = "margin-right: 6px;" type="radio" name="picture" id="radioB">
                                            <label style = "margin-right: 50px;" for="radioB"><?php echo $row_writing_1['answerB'] ?></label>

                                            <input style = "margin-right: 6px;" type="radio" name="picture" id="radioC">
                                            <label style = "margin-right: 50px;" for="radioC"><?php echo $row_writing_1['answerC'] ?></label>

                                            <input style = "margin-right: 6px;" type="radio" name="picture" id="radioD">
                                            <label style = "margin-right: 50px;" for="radioD"><?php echo $row_writing_1['answerD'] ?></label>
                                        </td>
                                        
                                        
                                    </tr>
                            </form>
                        </table>
                    </div>

                    <?php
                        }
                    ?>
                    <!-- ======================== END WRITING SECTION 1 - QUESTION 86 - QUESTION 95 ==================================== -->

                    <h1>三，写书</h1>

                    <?php
                        
                        $writing_1 = $_GET['mocktestID'];
                        $sql_writing_1 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$writing_1' and type = 'HSK4D1VP1'";
                        $qr_writing_1 = mysqli_query($conn,$sql_writing_1);       
                    
                    ?>
                    <h2>第一部分</h2>
                    <?php
                        while($row_writing_1 = mysqli_fetch_array($qr_writing_1)) {
                    ?>

                    <div class="test-image-section">
                        <table>
                            <form action="" method="get">
                                    <tr>
                                        <td style = "width: 140px;"><?php echo $row_writing_1['quesnum'] ?></td>
                                        <td style = "width: 500px;">
                                            <label ><?php echo $row_writing_1['questions'] ?></label>
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
                    <!-- ======================== END WRITING SECTION 1 - QUESTION 86 - QUESTION 95 ==================================== -->

                    <!-- ======================== END WRITING SECTION 1 - QUESTION 86 - QUESTION 95 ==================================== -->

                    <h1>三，写书</h1>

                    <?php
                        
                        $writing_2 = $_GET['mocktestID'];
                        $sql_writing_2 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$writing_2' and type = 'HSK4D1VP2'";
                        $qr_writing_2 = mysqli_query($conn,$sql_writing_2);       
                    
                    ?>
                    <h2>第一部分</h2>
                    <?php
                        while($row_writing_2 = mysqli_fetch_array($qr_writing_2)) {
                    ?>

                    <div class="test-image-section">
                        <table>
                            <form action="" method="get">
                                    <tr>
                                        <td style = "width: 140px;"><?php echo $row_writing_2['quesnum'] ?></td>
                                        <td>
                                            <label ><?php echo $row_writing_2['questions'] ?></label>
                                        </td>

                                        <td style = "width: 500px;">
                                            <img src = "../img/<?php echo $row_writing_2['fileimage1'] ?>"/>
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
                    <!-- ======================== END WRITING SECTION 1 - QUESTION 86 - QUESTION 95 ==================================== -->

                
                    <h2 style = "color: orange; text-align:center;">HSK 四级 考试 现在结束。</h2>
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