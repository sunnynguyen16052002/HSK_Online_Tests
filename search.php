<?php
include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOPPING</title>
    <link rel="stylesheet" href="./assets/css/style_shopping.css">
    <link rel="stylesheet" href="./assets/css/style_index.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
</head>
<body>
    <div class="main">
        <div class="header-shopping">
            <div class="header-nav">
                <ul class="nav">
                    <li>
                        <a href="听力.html">
                            听力 - Listening
                            <i class="subnav-icon fa-solid fa-caret-down"></i>
                        </a>
                    
                        <ul class="subnav-Listening">
                            <li><a class = "subnav__HSK1" href="">
                                <i class=" sub-lis-icon fa-solid fa-headphones"></i>
                                Audio - 标砖教程 HSK 1 
                               
                            </a></li>
                            <li><a class = "subnav__HSK2" href="">
                                <i class="sub-lis-icon fa-solid fa-headphones"></i>
                                Audio - 标砖教程 HSK 2
                            </a></li>
                            <li><a class = "subnav__HSK3" href="">
                                <i class="sub-lis-icon fa-solid fa-headphones"></i>
                                Audio - 标砖教程 HSK 3
                            </a></li>
                            <li><a class = "subnav__HSK4" href="">
                                <i class="sub-lis-icon fa-solid fa-headphones"></i>
                                Audio - 标砖教程 HSK 4 上
                            </a></li>
                            <li><a class = "subnav__HSK4" href="">
                                <i class="sub-lis-icon fa-solid fa-headphones"></i>
                                Audio - 标砖教程 HSK 4 下
                            </a></li>
                            <li><a class = "subnav__HSK5" href="">
                                <i class="sub-lis-icon fa-solid fa-headphones"></i>
                                Audio - 标砖教程 HSK 5 上
                            </a></li>
                            <li><a class = "subnav__HSK5" href="">
                                <i class="sub-lis-icon fa-solid fa-headphones"></i>
                                Audio - 标砖教程 HSK 5 下
                            </a></li>
                            <li><a class = "subnav__HSK6" href="">
                                <i class="sub-lis-icon fa-solid fa-headphones"></i>
                                Audio - 标砖教程 HSK 6 上
                            </a></li>
                            <li><a class = "subnav__HSK6" href="">
                                <i class="sub-lis-icon fa-solid fa-headphones"></i>
                                Audio - 标砖教程 HSK 6 下
                            </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="考题.html">
                            考题 - Tests
                            <i class="subnav-icon fa-solid fa-caret-down"></i>
                        </a>

                        <ul class="subnav-Tests">
                            <li>
                                <a class = "subnav__MT"  href="mocktests.php">
                                    <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
                                    Mock Tests
                                </a>
                            </li>
                            <li><a class = "subnav__HSK1" href="">
                                <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
                                HSK 1
                            </a></li>
                            <li><a class = "subnav__HSK2" href="">
                                <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
                                HSK 2
                            </a></li>
                            <li><a class = "subnav__HSK3" href="">
                                <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
                                HSK 3
                            </a></li>
                            <li><a class = "subnav__HSK4" href="">
                                <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
                                HSK 4
                            </a></li>
                            <li><a class = "subnav__HSK5" href="">
                                <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
                                HSK 5
                            </a></li>
                            <li><a class = "subnav__HSK6" href="">
                                <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
                                HSK 6
                            </a></li>
                        </ul>

                       
                    </li>

                    <li>
                        <a href="">
                            参考材料 - References
                            <!-- <i class="subnav-icon fa-solid fa-caret-down"></i> -->
                        </a>
                    </li>

                    <li><a href="">
                        购物 - Shopping
                    </a></li>
                    
                    <li><a href="">反馈 - Feed back</a></li>
                </ul>
    
                <ul class="singup_login">
                    <li><a href="">登记 - Sign up</a></li>
                    <li> | </a></li>
                    <li><a href="">登录 - Log in</a></li>
                </ul>

                
            </div>

            

            <div class="grid-header">
                <div class="header-shopping-with-search">
                    <div class="shopping-header-logo">
                        <a href="index.html"><i class="fa-solid fa-house"></i></a>
                    </div>

                    <div class="header-shopping__search">
                        <div class="header-shopping__search-input-wrap">
                            <form action="search.php" method = "get" class="header-shopping__search-input">
                            <input type="text" name = "tukhoa" class="header-shopping__search-input" placeholder="Nhập để tìm kiếm sản phẩm"> 
                            
                            
                            <!-- Search history -->
                            <div class="header__search-history">
                            </div>
                            
                        </div>
        
                        <input style = "font-size: 14px; color: white; cursor: pointer;" type="submit" name = "timkiem" class="header-shopping__search-btn" value = 'Search'>
                        </form>
                        
                    
                    </div>
                    <!-- ICON CART -->
                    <div class="header-shopping__cart">
                        <div class="header-shopping__card-wrap">
                            <a href=""><i class="header-shopping__cart-icon fa-sharp fa-solid fa-cart-shopping" ></i></a>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>


        <!-- End Header -->

        <!-- Start Container -->
<!-- DANH MỤC -->
        <?php
            $sql_danhmuc = mysqli_query($conn,'select * from loaisach order by MaLoai')


        ?>

        <div class="app-container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="rid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">
                                <i class="category__heading-icon fa-solid fa-list"></i>
                                Danh mục
                            </h3>
                            <?php
                                    while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
                            ?>
                                    <ul class="category-list">
                                    <li class="category-item ">
                                        <a href="category.php?MaLoai=<?php echo $row_danhmuc['MaLoai'];?>&TenLoai=<?php echo $row_danhmuc['TenLoai'];?>" class="category-item__link">
                                            <?php echo $row_danhmuc['TenLoai']?>
                                                    
                                        </a>
                                    </li>
                                    </ul>
                                <?php
                                    }
                                ?>


                        </nav>
                    </div>
                    <?php
    if(isset($_GET["tukhoa"]))
    {
        $tenmh = $_GET["tukhoa"];
        require_once "config.php";
        $sql = "select * from sach where TenSach like '%".$tenmh."%'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){};
        

?>
                    <!-- END DANH MỤC -->

                     <!-- SỐ TRANG -->
                    <?php
                        //1. cần biết số dòng trong một trang
                        //2. lấy tổng số dòng/ số dòng muốn hiện trên một trang là ok
                        // $page = 1;
                        // $sotin1trang = 9;
                            
                        // if(isset($_GET["page"]))
                        // {
                        //     $page = $_GET["page"];
                        // }
                        // $from = ($page - 1)* $sotin1trang;
                        // $sql = "select * from sach limit $from, $sotin1trang";
                        // $dsmathang = mysqli_query($conn,$sql);
                        // $mh = mysqli_query($conn, "select * from sach");

                        // $tongsomh = mysqli_num_rows($mh);

                        // $sotrang = ceil($tongsomh/$sotin1trang);

                        // while($mathang = mysqli_fetch_array($dsmathang)){
                    ?>
                   
                    
                    <!-- SẢN PHẨM -->
                    <div class="grid__column-10">
                        <div class="home-product">
                            <div class="grid__row">
                                <?php
                                    $sqp_cat_home = mysqli_query($conn, $sql);
                                    while ($row_cate_home = mysqli_fetch_array($sqp_cat_home)){
                                        $id_category = $row_cate_home['MaSach'];
                                ?>

                                <?php
                                    $sqp_sp = mysqli_query($conn, $sql);
                                    while ($row_sp = mysqli_fetch_array($sqp_sp)){
                                        if($row_sp['MaSach'] == $id_category){
                                ?>

                                <div style = "float:left" class="grid__column-2-4">
                                    <a class="home-product-item" href="book_details.php?MaSach=<?php echo $row_sp['MaSach'];?>&TenSach=<?php echo $row_sp['TenSach'];?>">
                                        <div class="home-product-item">
                                            <img src="img/<?php echo $row_sp['LinkHinh'] ?>" alt="" class="home-product-item__img"/>
                                            <h4 class="home-product-item__name"><?php echo $row_sp['TenSach'] ?></h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old"><?php echo $row_sp['GiaTien'] ?> VNĐ</span>
                                            </div>

                                            <div class="home-product-item__action">
                                                
                                            </div>

                                  
                                        </div>
                                    
                                    </a>
                                    
                                </div>

                                <?php
                                            }
                                        }
                                    }
                                    // break;
                                ?>


                            </div>
                        </div>
                    </div>
                    <!-- END SẢN PHẨM -->
                </div>
            </div>

            <?php
                // }
            ?>

                            <!-- lặp để hiện ra số trang -->
            
        </div>
            <!-- <div class = "page-button-container">
                <?php 
                    for ($i = 1; $i<=$sotrang;$i++)
                    {
                ?>
            
                <button class = "page-button" >
                    <a href='shopping.php?page=<?php echo $i;?>' class = "page-button-a" ><?php echo $i;?></a> 
                </button>
            

                <?php        
                    }
                ?>
            </div> -->

        

        <!-- End Container -->
    </div>
    <?php
    }
}
?>
</body>
</html>