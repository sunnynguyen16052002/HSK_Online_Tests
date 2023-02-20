<?php
    include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOCK TEST QUIZZ</title>
    <link rel="stylesheet" href="./assets/css/style_mockTestQuizz.css">
    <link rel="stylesheet" href="./assets/css/style_shopping.css">
    <link rel="stylesheet" href="./assets/css/style_mocktests.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
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
    <script src = "https://sh20raj.github.io/AudiPlay/audiplay.js"></script>
    <div class="main">
        <div class="header-mocktests">
            <ul class="home-button">
                <li class="header-mocktetsts-img">
                    <a href="index.php"><img src="./assets/img/mocktest.jpg" alt=""></a>
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
            
            
                <div class = "test-content__container">
                    <h1 class = "header-moctest" >新汉语水平考试 <br>HSK (一级)</h1>
                    <?php
                        $audio = $_GET['mocktestID'];
                        $sql_audio = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$audio' and type = 'HSK1D1P1'";
                        $qr_audio = mysqli_query($conn,$sql_audio)  ;
                        $row_audio = mysqli_fetch_array($qr_audio); 
                    ?>
                        <h2 style = "margin-bottom: 20px;">File Audio - 听力 【20题 （Question 1 - Question 20）- 约 15 分钟】</h2>
                        <audio controls class = "audiplay" style = "width: 100%;">
                            <source src="audio_mocktestHSK1/<?php echo $row_audio['fileaudio'];?>" type="audio/mpeg">
                        </audio>
        
                    <?php
                        
                        $mathang = $_GET['mocktestID'];
                        $sql_mathang = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$mathang' and type = 'HSK1D1P1'";
                        $qr_mathang = mysqli_query($conn,$sql_mathang)  ; 
                    ?>
                    <h1>一，听力</h1>
                    <h2>第一部分</h2>
                    <!-- ======================== LISTENING - SECTION 1 =================================== -->
                    <!-- =================== PHP CODE ======================== -->
                    
                    
                                
                                    
                                
                    <?php
                        while($row_mathang = mysqli_fetch_array($qr_mathang)) {
                    ?>

                    <div class="test-image-section">
                        <table class="test-image-section__tbl-container">
                            
                            <tr>
                                <td class = "first-col"><?php echo $row_mathang['quesnum'] ?></td>
                                <td>
                                    <img src="img/<?php echo $row_mathang['fileimage1'] ?>" alt="">
                                </td>
                                <td>
                                    <form action="" method="get">
                                        <label for="radioA"><?php echo $row_mathang['answerA'] ?></label>
                                        <input type="radio" name="picture" id="radioA">
                                        <label for="radioB"><?php echo $row_mathang['answerB'] ?></label>
                                        <input type="radio" name="picture" id="radioB">
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>

                    <!-- ======================== LISTENING - SECTION 2 =================================== -->

                    <?php
                        
                        $phan2 = $_GET['mocktestID'];
                        $sql_phan2 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$phan2' and type = 'HSK1D1P2'";
                        $qr_phan2 = mysqli_query($conn,$sql_phan2)  ;        
                    
                    ?>
                    <h2>第二部分</h2>
                    <?php

                        while($row_phan2 = mysqli_fetch_array($qr_phan2)) {
                    ?>
                    <div class="test-image-section">
                    
                    
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td class = "first-col"><?php echo $row_phan2['quesnum'] ?></td>
                                <form action="" method="get">
                                    <td>
                                        <img src="img/<?php echo $row_phan2['fileimage1'] ?>" alt="" class = "col-3img">
                                        <label for="radioA"><?php echo $row_phan2['answerA'] ?></label>
                                        <input type="radio" name="picture" id="radioA">
                                    </td>

                                    <td>
                                        <img src="img/<?php echo $row_phan2['fileimage2'] ?>" alt="" class = "col-3img">
                                        <label for="radioB"><?php echo $row_phan2['answerB'] ?></label>
                                        <input type="radio" name="picture" id="radioB">
                                    </td>

                                    <td>
                                        <img src="img/<?php echo $row_phan2['fileimage3'] ?>" alt="" class = "col-3img">
                                        <label for="radioC"><?php echo $row_phan2['answerC'] ?></label>
                                        <input type="radio" name="picture" id="radioC">
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>

                    <?php
                        }
                    ?>

                    <!-- ======================== LISTENING - SECTION 3 - IMAGE =================================== -->
                    <?php
                        
                        $phan3_1 = $_GET['mocktestID'];
                        $sql_phan3_1 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$phan3_1' and type = 'HSK1D1P3IMG'";
                        $qr_phan3_1 = mysqli_query($conn,$sql_phan3_1)  ;  
                        $row_phan3_1 = mysqli_fetch_array($qr_phan3_1);      
                    
                    ?>

                    
                        <h2>第三部分</h2>
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td rowspan = "2" class = "first-col">
                                    <?php echo $row_phan3_1['quesnum']; ?>
                                </td>

                                <td>
                                    <img src="img/<?php echo $row_phan3_1['fileimage1']; ?>" alt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="img/<?php echo $row_phan3_1['fileimage2']; ?>" aslt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="img/<?php echo $row_phan3_1['fileimage3']; ?>" alt="" class = "question-img">
                                </td>

                                
                            </tr>

                            <tr>
                                <td>
                                    <img src="img/<?php echo $row_phan3_1['fileimage4']; ?>" alt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="img/<?php echo $row_phan3_1['fileimage5']; ?>" alt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="img/<?php echo $row_phan3_1['fileimage6']; ?>" alt="" class = "question-img">
                                </td>
                            </tr>
                        </table>
                    
                        <!-- ======================== LISTENING - SECTION 3 - QUESTIONS =================================== -->
                    

                    <?php
                        
                        $phan3 = $_GET['mocktestID'];
                        $sql_phan3 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$phan3' and type = 'HSK1D1P3'";
                        $qr_phan3 = mysqli_query($conn,$sql_phan3)  ;  
                        $row_phan3 = mysqli_fetch_array($qr_phan3);      
                    
                    ?>
                        <?php
                            while($row_phan3 = mysqli_fetch_array($qr_phan3)) {
                        ?>
                    <div class="test-image-section">
                    
                        
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td>
                                    <?php echo $row_phan3['quesnum']; ?>
                                </td>

                                <form action="" method="get">
                                    <td>
                                        <input type="radio" name="picture" id="radioA">
                                        <label for="radioA"> <?php echo $row_phan3['answerA']; ?></label>
                                    </td>

                                    <td>
                                        <input type="radio" name="picture" id="radioB">
                                        <label for="radioB"> <?php echo $row_phan3['answerB']; ?></label>
                                    </td>

                                    <td>
                                        <input type="radio" name="picture" id="radioC">
                                        <label for="radioC"> <?php echo $row_phan3['answerC']; ?></label>
                                    </td>

                                    <td>
                                        <input type="radio" name="picture" id="radioD">
                                        <label for="radioD"> <?php echo $row_phan3['answerD']; ?></label>
                                    </td>

                                    <td>
                                        <input type="radio" name="picture" id="radioE">
                                        <label for="radioE"> <?php echo $row_phan3['answerE']; ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                        
                    </div>

                    <?php
                        }
                    ?>

                        <!-- ======================== LISTENING - SECTION 4 - QUESTIONS =================================== -->
                    <?php
                        
                        $phan4 = $_GET['mocktestID'];
                        $sql_phan4 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$phan4' and type = 'HSK1D1P4'";
                        $qr_phan4 = mysqli_query($conn,$sql_phan4)  ;  
                    
                    ?>
                    <h2>第四部分</h2>
                    <?php
                            while($row_phan4 = mysqli_fetch_array($qr_phan4)) {
                    ?>

                    <div class="test-image-section">
                        <table class="test-image-section__tbl-container">
                            <tr>
                                
                                <td class = "first-col"><?php echo $row_phan4['quesnum'] ?></td>

                                <form action="" method="get">
                                    <td>
                                        <input type="radio" name="picture" id="radioA">
                                        <label for="radioA"><?php echo $row_phan4['answerA'] ?></label>
                                    </td>

                                    <td>
                                        <input type="radio" name="picture" id="radioB">
                                        <label for="radioB"><?php echo $row_phan4['answerB'] ?></label>
                                    </td>

                                    <td>
                                        <input type="radio" name="picture" id="radioC">
                                        <label for="radioC"><?php echo $row_phan4['answerC'] ?></label>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>

                    <!-- ================ READING - SECTION 1 ========================= -->

                    <?php
                        
                        $readphan1 = $_GET['mocktestID'];
                        $sql_readphan1 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$readphan1' and type = 'HSK1D1DP1'";
                        $qr_readphan1 = mysqli_query($conn,$sql_readphan1);       
                    
                    ?>
                    <h1>二，阅读</h1>
                    <h2>第一部分</h2>
                    <?php
                        while($row_readphan1 = mysqli_fetch_array($qr_readphan1)) {
                    ?>
                    
                    <div class="test-image-section">
                    
                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td class = "first-col"><?php echo $row_readphan1['quesnum'] ?></td>
                                <td>
                                    <img src="img/<?php echo $row_readphan1['fileimage1'] ?>" alt="">
                                </td>
                                <td><?php echo $row_readphan1['questions'] ?></td>

                                <form action="" method="get">
                                    <td>
                                        <label for="radioA"><?php echo $row_readphan1['answerA'] ?></label>
                                        <input type="radio" name="picture" id="radioA">
                                        <label for="radioB"><?php echo $row_readphan1['answerB'] ?></label>
                                        <input type="radio" name="picture" id="radioB">
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    ?>

                    <!-- ================ READING - SECTION 2 ========================= -->
                    <?php
                        
                        $readphan2_1 = $_GET['mocktestID'];
                        $sql_readphan2_1 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$readphan2_1' and type = 'HSK1D1DP2IMG'";
                        $qr_readphan2_1 = mysqli_query($conn,$sql_readphan2_1);      
                        $row_readphan2_1 = mysqli_fetch_array($qr_readphan2_1) 
                    ?>
                    <h2>第二部分</h2>

                        <table class="test-image-section__tbl-container">
                            <tr>
                                <td rowspan = "2" class = "first-col">
                                    <?php echo $row_readphan2_1['quesnum']; ?>
                                </td>

                                <td>
                                    <img src="img/<?php echo $row_readphan2_1['fileimage1']; ?>" alt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="img/<?php echo $row_readphan2_1['fileimage2']; ?>" aslt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="img/<?php echo $row_readphan2_1['fileimage3']; ?>" alt="" class = "question-img">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src="img/<?php echo $row_readphan2_1['fileimage4']; ?>" alt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="img/<?php echo $row_readphan2_1['fileimage5']; ?>" alt="" class = "question-img">
                                </td>

                                <td>
                                    <img src="img/<?php echo $row_readphan2_1['fileimage6']; ?>" alt="" class = "question-img">
                                </td>
                            </tr>
                        </table>


                        <?php
                        
                        $readphan2 = $_GET['mocktestID'];
                        $sql_readphan2 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$readphan2' and type = 'HSK1D1DP2'";
                        $qr_readphan2 = mysqli_query($conn,$sql_readphan2);       
                    
                        ?>

                        <?php
                            while($row_readphan2 = mysqli_fetch_array($qr_readphan2)) {
                        ?>

                        <div class="test-image-section">
                            
                            <table class="test-image-section__tbl-container">
                                <tr>
                                    <td class = "first-col"><?php echo $row_readphan2['quesnum'] ?></td>
                                    
                                    <td class = "table-2col">
                                        <?php echo $row_readphan2['questions'] ?> <br>
                                        <form action="" method="get">
                                            <input type="radio" name="picture" id="radioA">
                                            <label class = "label-padding" for="radioA"><?php echo $row_readphan2['answerA'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan2['answerB'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan2['answerC'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan2['answerD'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan2['answerE'] ?></label>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <?php
                            }
                        ?>

                    <!-- ================ READING - SECTION 3 ========================= -->
                    
                        <?php
                        
                        $readphan3 = $_GET['mocktestID'];
                        $sql_readphan3 = 
                            "select * 
                            from mocktestdetails 
                            where mocktestsID = '$readphan3' and type = 'HSK1D1DP3'";
                        $qr_readphan3 = mysqli_query($conn,$sql_readphan3);       
                    
                        ?>
                        <h2>第三部分</h2>
                        <?php
                            while($row_readphan3 = mysqli_fetch_array($qr_readphan3)) {
                        ?>

                        <div class="test-image-section">
                            
                            <table class="test-image-section__tbl-container">
                                <tr>
                                    <td class = "first-col"><?php echo $row_readphan3['quesnum'] ?></td>
                                    <form action="" method="get">
                                        <td class = "table-2col">
                                            <?php echo $row_readphan3['questions'] ?> <br>
                                            <input type="radio" name="picture" id="radioA">
                                            <label class = "label-padding" for="radioA"><?php echo $row_readphan3['answerA'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan3['answerB'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan3['answerC'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan3['answerD'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan3['answerE'] ?></label>
                                        </td>
                                    </form>
                                </tr>
                            </table>
                        </div>

                        <?php
                            }
                        ?>


                        <?php
                        
                            $readphan4 = $_GET['mocktestID'];
                            $sql_readphan4 = 
                                "select * 
                                from mocktestdetails 
                                where mocktestsID = '$readphan4' and type = 'HSK1D1DP4'";
                            $qr_readphan4 = mysqli_query($conn,$sql_readphan4);       
                    
                        ?>
                        <h2>第四部分</h2>
                        <?php
                            while($row_readphan4 = mysqli_fetch_array($qr_readphan4)) {
                        ?>

                        <div class="test-image-section">
                            
                            <table class="test-image-section__tbl-container">
                                <tr>
                                    <td class = "first-col"><?php echo $row_readphan4['quesnum'] ?></td>
                                    
                                    <form action="" method="get">
                                        <td class = "table-2col">
                                            <?php echo $row_readphan4['questions'] ?> <br>
                                            <input type="radio" name="picture" id="radioA">
                                            <label class = "label-padding" for="radioA"><?php echo $row_readphan4['answerA'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan4['answerB'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan4['answerC'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan4['answerD'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan4['answerE'] ?></label>

                                            <input type="radio" name="picture" id="radioB">
                                            <label class = "label-padding" for="radioB"><?php echo $row_readphan4['answerF'] ?></label>
                                        </td>
                                    </form>
                                </tr>
                            </table>
                        </div>

                        <?php
                            }
                        ?>

                    

                
                    <h2 style = "color: orange; text-align:center;">HSK 一级 考试 现在结束。</h2>
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