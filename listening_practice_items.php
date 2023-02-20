<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listening Practice Tests</title>
    <link rel="stylesheet" href="./assets/css/style_listening_practices.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
</head>
<body>
    <div class="main">
        <div class="header">
            <div><i class="fa-solid fa-compact-disc header-icon" 
                style = "font-size: 60px; display: inline-block; "></i>
            </div>
            
            <div class="header-logo">
                <a href="mainPage.php"><img src="./img/Capture20230211195741-removebg-preview.png" alt=""></a>
            </div>

            <div class="header-search">
                <form action="" method="get" class = "header-search-form">
                    <input class="header-search-input" type="text" placeholder = "Search listening practice tests">
                </form>
                <input type="submit" value=" Search" class="header-search-submit fa-light fa-magnifying-glass">
            </div>

            <div class="home-icon">
                <a href="mainPage.php" class = "home-icon"><i class="fa-solid fa-house "></i></a>
            </div>
        </div>

        <!-- ==================== SCROLL BAR ====================== -->
        <div class="scroll-indicator-container">
                <div class="scroll-indicator-bar">

                </div>
        </div>

        <div class="content">

            <div class="hsk-listening-tests-items">
                <a href="listening_practice_items.php" class="listening-test-container-items">
                        <div class="lst-container-img">
                            <img src="./img/HSK1_BiaGiaoTrinh.jpg" alt="" class="lst-img-items">
                        </div>

                        <div class="lts-information-items">
                            <h2 class="lts-header-items">
                                HSK 1 Listening Practices
                            </h2>

                            <p class="lts-content">
                                Bài 1: Xin chào cô chú, xin chào các bạn, xin chào
                            </p>

                            <p class="lts-unit">
                                01-1 Mình cùng đi chơi nhé
                            </p>
                            <p class="time">
                                <i class="fa-solid fa-stopwatch"></i>  12:05
                            </p>
                        </div>
                </a>
            </div>
        </div>

        <div class="test-playing">
            <div class="test-playing__left">
                <div class="test-playing__left--img">
                    <img src="./img/HSK1_BiaGiaoTrinh.jpg" alt="" class="left-img-items">
                </div>

                <div class="test-playing__left--info">
                    <marquee class="test-item--tittle">Bài 1: Xin chào cô chú, xin chào các bạn, xin chào | 
                        <span> 01-1 Mình cùng đi chơi nhé </span>
                    </marquee>
                </div>
            </div>

            <div class="test-playing__center">
                <div class="test-playing__control">
                </div>

                <div class="test-playing__progress">
                    <span class="test-playing__progress--start">00:00</span>
                    <span class="test-playing__progress--going">
                        <input type="range" name="progress" id="progress" class = "">
                    </span>
                    <span class="test-playing__progress--start">12:05</span>
                </div>
            </div>

            <div class="test-playing__right">
                
            </div>
        </div>

    </div>
</body>
</html>