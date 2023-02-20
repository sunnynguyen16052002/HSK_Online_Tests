<?php
include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK'S DETAILS</title>
    <link rel="stylesheet" href="./assets/css/style_bookdetails.css">
    <link rel="stylesheet" href="./assets/css/style_shopping.css">
    <link rel="stylesheet" href="./assets/css/style_index.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
</head>
<body>
    <div class="main-details">
        <div class="header-shopping-details">
            <div class="header-nav">
                    <ul class="nav-details">
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
                                    <a class = "subnav__MT"  href="">
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
                            <a href="references.php">
                                参考材料 - References
                                <!-- <i class="subnav-icon fa-solid fa-caret-down"></i> -->
                            </a>
                        </li>

                        <li><a href="shopping.php">
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
                            <a href="mainPage.php"><i class="fa-solid fa-house"></i></a>
                        </div>

                        <div class="header-shopping__search">
                            <div class="header-shopping__search-input-wrap">
                                <form action="search.php" method = "get" class="header-shopping__search-input">
                                <input type="text" name = "tukhoa" class="header-shopping__search-input" placeholder="Nhập để tìm sách"> 
                                
                                
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
                                <a href="cart.php"><i class="header-shopping__cart-icon fa-sharp fa-solid fa-cart-shopping" ></i></a>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php
            $sql_danhmuc = mysqli_query($conn,'select * from loaisach order by MaLoai')


        ?>
        <div class="category-list__details">
            <h3 class = "details-category__heading" >
             <i class="details-category__heading-icon fa-solid fa-list"></i>
                <a href="shopping.php" style = "text-decoration: none; color: #555454;">
                    Danh Mục
                </a>
            </h3>
            
            <ul class="category-container">
                <?php
                    while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
                ?>
                <li class= "category-list">
                    <a class="ti-book" href="category.php?MaLoai=<?php echo $row_danhmuc['MaLoai'];?>&TenLoai=<?php echo $row_danhmuc['TenLoai'];?>" >
                        <?php echo $row_danhmuc['TenLoai']?>
                    </a>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>

        <?php
            
            $mathang = $_GET['MaSach'];
            $sql_mathang = "select * from sach where MaSach = '$mathang'";
            $qr_mathang = mysqli_query($conn,$sql_mathang)  ;        
        
        ?> 

        <div class="grid-row__detailts details-container">
            <?php
                while($row_mathang = mysqli_fetch_array($qr_mathang)) {
            ?>
            <div class="grid-column2__detailts details-container-img js-details-container-img ">
                <div class="book-details-img js-book-details-img">
                    <img src="img/<?php echo $row_mathang['LinkHinh'] ?>" alt="" class="details-img js-details-img"/> 
                </div>

                <div class="book-details-subimg js-book-details-subimg">
                    <img src="img/<?php echo $row_mathang['LinkHinh'] ?>" alt="" class="book-details-subimg__item "/> 
                    <img class="book-details-subimg__item" src="img/<?php echo $row_mathang['LinkHinh1'] ?>" alt="">
                    <img class="book-details-subimg__item" src="img/<?php echo $row_mathang['LinkHinh2'] ?>" alt="">
                    <img class="book-details-subimg__item" src="img/<?php echo $row_mathang['LinkHinh3'] ?>" alt="">
                </div>
            </div>
                
            <div class="grid-column10__detailts detailts-container-content">
                <div class="details-infor">
                    <div class = "details-infor-items details-infor-tittle js-details-infor-tittle"><?php echo $row_mathang['TenSach'] ?></div>
                    <div class = "details-infor-items"><p class = "details-infor-lable">Tác giả: </p><?php echo $row_mathang['TacGia'] ?></div>
                    <div class = "details-infor-items"><p class = "details-infor-lable">Nhà xuất bản: </p><?php echo $row_mathang['NhaXB'] ?></div>
                    <div class = "details-infor-items"><p class = "details-infor-lable">Ngôn ngữ: </p><?php echo $row_mathang['NgonNgu'] ?></div>
                    <div class = "details-infor-items"><p class = "details-infor-lable">Thời gian xuất bản: </p><?php echo $row_mathang['ThoiGianXB'] ?></div>
                    <div class = "details-infor-items"><p class = "details-infor-lable">Số trang: </p><?php echo $row_mathang['SoTrang'] ?></div>
                    <div class = "details-infor-items"><p class = "details-infor-lable">Mô tả sản phẩm: </p>
                        <p style = "text-align: justify; line-height: 1.3;">
                            <?php echo $row_mathang['MoTa'] ?>
                        </p>
                    </div>
                    <div class = "details-infor-items details-infor-price js-details-infor-price"><?php echo $row_mathang['GiaTien'] ?> Vnđ</div>
                    <div>
                        
                    </div>
                    <form action="cart.php" method="POST">
                        Số lượng: <input type="number" name="soluong" id="">
                        <div style = "display: flex;">
                            <input type="hidden" name="bookid" value = "<?php echo $row_mathang['ID_SACH'] ?>">
                            <input type="hidden" name = "img" value = "img/<?php echo $row_mathang['LinkHinh'] ?>">
                            <input type="hidden" name = "img1" value = "img/<?php echo $row_mathang['LinkHinh1'] ?>">
                            <input type="hidden" name = "img2" value = "img/<?php echo $row_mathang['LinkHinh2'] ?>">
                            <input type="hidden" name = "img3" value = "img/<?php echo $row_mathang['LinkHinh3'] ?>">
                            <input type="hidden" name = "bookname" value = "<?php echo $row_mathang['TenSach'] ?>">
                            <input type="hidden" name = "bookprice" value = "<?php echo $row_mathang['GiaTien'] ?> ">
                            <input type="hidden" name = "soluong" value = "">
                            <input class = "btn" type="submit" name = "buynow" value = "Mua ngay">
                            <input class = "btn-add js-btn-add " type="submit" name = "addcart" value = 'Thêm vào giỏ hàng'>
                        </div> 
                    </form>
                </div>  
            </div>

            <!-- <form action="cart.php" method="get"> -->
                <!-- <input class = "btn-add js-btn-add " type="submit" name = "themgiohang" value = 'Thêm vào giỏ hàng'> -->
            <!-- </form> -->
            <?php
                }
            ?>
        </div>
        <!-- <a href="" class="addcart-button">
            <button class = "addcart-button__name">Thêm vào giỏ hàng</button> 
        </a> -->


        <!--====================== RELATED PRODUCT SECTION ========================== -->
        <div class="related-products">
            <div class="related-product-title">
                <p class="text">SẢN PHẨM LIÊN QUAN</p>
            </div>

            <div class="related-product-content">
                <a href = "" class="related-product-item">
                    <img src="img/related-book.png" alt="">
                    <h2 class="img-header">Sách tập viết chữ Hán</h2>
                    <p class="related-book-price">100000 vnđ</p>
                </a>
                <a href = "" class="related-product-item">
                    <img src="img/related-book1.png" alt="">
                    <h2 class="img-header">Sách tập viết chữ Hán</h2>
                    <p class="related-book-price">100000 vnđ</p>
                </a>
                <a href = "" class="related-product-item">
                    <img src="img/related-book2.png" alt="">
                    <h2 class="img-header">Sách tập viết chữ Hán</h2>
                    <p class="related-book-price">100000 vnđ</p>
                </a>
                <a href = "" class="related-product-item">
                    <img src="img/related-book3.png" alt="">
                    <h2 class="img-header">Sách tập viết chữ Hán</h2>
                    <p class="related-book-price">100000 vnđ</p>
                </a>

                <a href = "" class="related-product-item">
                    <img src="img/related-book4.png" alt="">
                    <h2 class="img-header">Sách tập viết chữ Hán</h2>
                    <p class="related-book-price">100000 vnđ</p>
                </a>
            </div>
        </div>
         
    </div>

    <!-- <script src="addCart.js"></script> -->
     
   <script>
        const bigImg = document.querySelector(".js-book-details-img img");
        const smallImg = document.querySelectorAll(".js-book-details-subimg img");

        smallImg.forEach(function (imgItem, X) {
            imgItem.addEventListener("click", function () {
                bigImg.src = imgItem.src
            })
        })
   </script>
        
        


                        
</body>
</html>