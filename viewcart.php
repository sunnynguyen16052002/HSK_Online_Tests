<?php
    session_start();
    if(isset($_SESSION['cart'])) {
        // echo var_dump($_SESSION['cart']);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIỎ HÀNG</title>
    <link rel="stylesheet" href="./assets/css/style_viewcart.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
    <style>
            /* table tr td
            {
                border: 1px solid #000;
                padding: 10px;
                text-align: justify;
                font-size: 16px;
            }
            table
            {
                border-collapse:collapse;
            } */
    </style>
</head>
<body>
    <div class = "main">
        <div class = "cart-top-wrap">
            <div class="buy-book-process">
                <div class="buy-book-process--item">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>

                <div class="buy-book-process--item">
                    <i class="fa-solid fa-cubes"></i>
                </div>

                <div class="buy-book-process--item">
                    <i class="fa-regular fa-credit-card"></i>
                </div>

                <div class="buy-book-process--item">
                    <i class="fa-solid fa-truck"></i>
                </div>
            </div>
        </div>

        <div class="buy-book-content">
            <div class="buy-book-content__left">
                <p>Thông tin giỏ hàng</p>
                <table>
                    <tr>
                        <th>
                            <input type="checkbox" name="checklist" id="">
                        </th>
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Tên sách</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>

                    <?php 
                        $tongtiensach = 0;
                        $i = 0;
                        foreach ($_SESSION['cart'] as $sach) {
                        $tongtiensach += $sach[5];
                        
                        // $thanhTien = ($sach[3])*($sach[4]);
                        echo '
                            <tr>
                            <td>
                                <input type="checkbox" name="checklist" id="">
                            </td>
                            <td>'.($i+1).'</td>
                            <td><img style = "width: 100px;" src=" '.$sach[2].'" /></td>
                            <td>'.$sach[1].'</td>
                            <td>'.$sach[3].'vnđ</td>
                            <td>
                                <div style = "border: 1px solid #000; padding: 4px; display: flex;">
                                    <div style = "border-right: 1px solid #000; line-height: 23px; padding-right: 6px;">
                                        <i class="ti-minus" style = "cursor: pointer;"></i>
                                    </div>
                                    <div style = "padding: 4px;">'.$sach[4].' </div>
                                    <div style = "border-left: 1px solid #000; line-height: 23px; padding-left: 6px;">
                                        <i class="ti-plus" style = "cursor: pointer;"></i>
                                    </div>
                                </div>
                            </td>
                            <td>
                                '.$sach[5] .'vnđ
                            </td>
                            <td><a href = "deletecart.php?id='.($i).'">Xóa</a></td>
                        </tr>';
                        $i++;
                        }
                    ?>
                    <tr>
                        <td colspan = "6">Tổng tiền</td>
                        <td colspan = "2"> <?php echo $tongtiensach ?> vnđ</td>
                    </tr>

                    
                </table>
            </div>

            <div class="buy-book-content__right">
                <p class="buy-book-content__right--header">
                    Tổng tiền giỏ hàng
                </p>

                <div class="buy-book-content__right--content">
                    <p class="buy-book-content__right--item">Tổng sản phẩm</p>
                    <p class="buy-book-content__right--item">Tổng tiền hàng</p>
                    <p class="buy-book-content__right--item">Thành tiền</p>
                    <p class="buy-book-content__right--item">Tạm tính</p>
                </div>

                <div class="buy-book-content__right--freeship">
                    <p>Bạn sẽ được miễn phí giao hàng khi đơn hàng có tổng tiền trên 100k</p>
                </div>

                <div class="buy-book-content__right--dathang">
                    <a href="payment.php"><button class="buy-book-content__right--btn">Đặt hàng</button></a>
                </div>
            </div>
        </div>
        <a href="deletecart.php">xóa tất cả</a>

        <div class="return-product-page">
            <a href="shopping.php"><button class="return-product-page--btn">Tiếp tục mua hàng</button></a>
        </div>
    </div>
</body>
</html>

<?php
    } else {
        echo '<br>Giỏ hàng rỗng! Bạn có muốn thêm sản pẩm <a href = "shopping.php"> đặt hàng </a>';

    }
?>