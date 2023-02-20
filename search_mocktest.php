<?php
include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOCK TESTS</title>
    <link rel="stylesheet" href="./assets/css/style_shopping.css">
    <link rel="stylesheet" href="./assets/css/style_mocktests.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">

    <style>
        table tr td
        {
            padding: 10px;
            font-size: 16px;
            text-align: center;
            line-height: 1.6;
            letter-spacing: 0.6;
            border: 1px solid ;
            
        }
    </style>
</head>
<body>
    <div class="main-mocktests">
        <div class="header-mocktests">
            <ul class="home-button">
                <li class="header-mocktetsts-img">
                    <a href="index.html"><img src="./assets/img/mocktest.jpg" alt=""></a>
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
                                <input type="text" name = "tukhoa_mocktests" class="header-mocktest__search-input" placeholder="Nhập để tìm kiếm sản phẩm"> 
                                
                                
                                <!-- Search history -->
                                <div class="header__search-history">
                                </div>
                                
                            </div>
            
                            <input style = "font-size: 12px; color: white; cursor: pointer;" type="submit" name = "timkiem_mocktests" class="header-mocktests__search-btn" value = 'Search'>
                            </form>
                            
                        
                        </div>
                </div>  
            
            
        </div>

        <!-- SLICER -->
        <!-- <div class="slicer-mocktests">
            <img class = "slicer-mocktests-img" src="https://inchincloser.com/wp-content/uploads/2020/12/hsk-levels.png" alt="">
            <p class=" slicer-mocktests-content" >Welcome to Sunny HSK Online Mock Tests</p>
        </div> -->

        
        <div class="mocktests-container">
            <div class="grid">
                <div class="grid__row app__content">
                    <?php
                        if(isset($_GET["tukhoa_mocktests"]))
                        {
                            $tenmh = $_GET["tukhoa_mocktests"];
                            require_once "config.php";
                            $sql = "select * from mocktests where mocktestname like '%".$tenmh."%'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)){};
                    ?>
                    <!-- MOCK TEST -->
                    <div class="grid-mocktests__column-10">
                        <div class="mocktests-tests">
                            <div class="grid__row">

                                <?php
                                $sqp_cat_home = mysqli_query($conn, $sql);
                                while ($row_cate_home = mysqli_fetch_array($sqp_cat_home)){
                                    $id_category = $row_cate_home['mocktestID'];
                                        
            
                                ?>
                                <?php
                                    $sqp_sp = mysqli_query($conn, $sql);
                                    while ($row_sp = mysqli_fetch_array($sqp_sp)){
                                        if($row_sp['mocktestID'] == $id_category){
                                ?>

                                <div style = "float:left" class="grid-mocktests__column-2-4">
                                    <a class="mocktests-product-item" href="">
                                        <div class="home-product-item">
                                            <img src="img/<?php echo $row_sp['mocktestImg'] ?>" alt="" class="mocktests-item__img"/>
                                            <h4 class="mocktests-product-item__name"><?php echo $row_sp['mocktestname'] ?></h4>
                                            <div class="">
                                                <font style = "color: black; font-size: 20px">
                                                    Thời gian làm bài: 
                                                </font> 
                                                <span class="mocktests-product-item__tg">
                                                    <i class="mock-icon ti-timer"></i>
                                                    <?php echo $row_sp['mocktesttime'] ?>
                                                </span>
                                            </div>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">
                                                    <font style = "color: black; font-size: 20px">
                                                    
                                                        Tổng số câu: 
                                                    </font> 
                                                    <?php echo $row_sp['totalques'] ?>
                                                </span>
                                            </div>

                                
                                        </div>
                                    
                                    </a>
                                    
                                </div>
                                <?php
                                }
                            }
                        }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- END SẢN PHẨM -->
                </div>
            </div>

           

                            <!-- lặp để hiện ra số trang -->
            
        </div>

        <!-- MOCK TESTS HSK -->
        
    </div>

    <!-- MODAL HSK TESTS -->
    <div class="modal-hsk1">
        <div class="modal-container">
            <div class="modal-close">
                <i class="ti-close"></i>
            </div>
            <header class="modal-header">
                Cấu trúc bài thi HSK 1
            </header>

            <!-- phần body -->
            <div class="modal-body">
                <center>
                    <table>

                        <tr>
                            <td colspan="3">Phần</td>
                            <td>Số lượng câu hỏi</td>
                            <td>Thời lượng (phút)</td>
                        </tr>
                            
                        <tr>
                            <td rowspan="4">I.Phần nghe</td>
                            <td>Phần I</td>
                            <td>5</td>
                            <td rowspan="4">20</td>
                            <td rowspan="4">Khoảng 15</td>
                        </tr>
                        
                        <tr>
                            <td>Phần II</td>
                            <td>5</td>
                        </tr>

                        <tr>
                            <td>Phần III</td>
                            <td>5</td>
                        </tr>

                        <tr>
                            <td>Phần IV</td>
                            <td>5</td>
                        </tr>

                        <tr>
                            <td colspan="4">Điền câu trả lời vào phiếu trả lời (Phần nghe)</td>
                            <td>3</td>
                        </tr>

                        <tr>
                            <td rowspan="4">II.Phần đọc</td>
                            <td>Phần I</td>
                            <td>5</td>
                            <td rowspan="4">20</td>
                            <td rowspan="4">Khoảng 15</td>
                        </tr>
                        
                        <tr>
                            <td>Phần II</td>
                            <td>5</td>
                        </tr>

                        <tr>
                            <td>Phần III</td>
                            <td>5</td>
                        </tr>

                        <tr>
                            <td>Phần IV</td>
                            <td>5</td>
                        </tr>

                        

                        <tr>
                            <td>Tổng</td>
                            <td></td>
                            <td colspan="2">40</td>
                            <td>Khoảng 35</td>
                        </tr>
                    </table>
                </center>
                <p>
                    
                </p>
                    
            </div> 

            <!-- Phần bottom -->
            <footer class="modal-footer">
                <p class="modal-help">Need <a href="">help?</a></p>
            </footer>
        </div>
    </div>
    <?php
    }
} else {
    ?>
        <h2 class = "nothing">Không tìm thấy kết quả nào</h2>
    <?php
}
?>
</body>
</html>