<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THANH TOÁN</title>
    <link rel="stylesheet" href="./assets/css/style_payment.css">
    <link rel="stylesheet" href="./assets/css/style_viewcart.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
</head>
<body>
    <div class = "main">
        <!-- ========= Cart top section ============= -->
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
        <!-- ============ Payment content section ================= -->
        <div class="buy-book-content">
            <div class="buy-book-content__left">
                <p>Thông tin đơn hàng của bạn</p>

                <!-- ========== Địa chỉ giao hàng ================= -->
                <div class="delivery-address">
                    <p class="delivery-address-header"> Địa chỉ giao hàng</p>
                    <div class="contact-ifor-item-list">
                        <div class="row">
                            <div class="col6 form-group">
                                <input type="text" name="" id="" class="form-control" placeholder = "Họ và tên" required>
                            </div>

                            <div class="col6 form-group">
                                <input type="text" name="" id="" class="form-control" placeholder = "Số điện thoại" required>
                            </div>

                            <div class="col6 form-group">
                                <select name="contact-ifor-item-list-TP" id="" class="form-control" required="">
                                    <option value="-1">Tỉnh/Thành phố</option>
                                    <option value="1">Hà Nội</option>
                                    <option value="2">Thành phố Hồ Chí Minh</option>
                                    <option value="3">Hải Phòng</option>
                                    <option value="4">Đà Nẵng</option>
                                    <option value="5">An Giang</option>
                                    <option value="6">Bình Dương</option>
                                    <option value="7">Bắc Giang</option>
                                    <option value="8">Bình Định</option>
                                    <option value="9">Bắc Cạn</option>
                                </select>
                            </div>

                            <div class="col6 form-group">
                                <input type="text" name="" id="" class="form-control" placeholder = "Quận/Huyện" required>
                            </div>

                            <div class="col12 form-group">
                                <input type="text" name="" id="" class="form-control" placeholder = "Phường xã" required>
                            </div>

                            <div class="col12 form-group">
                                <input type="text" name="" id="" class="form-control" placeholder = "Địa chỉ" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Phương thức giao hàng ================= -->
                <div class="delivery-methods">
                    <p class="delivery-methods-header">Phương thức giao hàng</p>
                    <div class="delivery-methods-content">
                        <form action="" method="get">
                            <div class="delivery-methods-choose__group">
                                <input type="radio" name="payment-methods" id="delivery-methods" checked>
                                <label for="delivery-methods">Chuyển phát nhanh</label>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- ========== Phương thức thanh toán ================= -->
                <div class="payment-methods">
                    <p class="payment-methods-header">Phương thức thanh toán</p>
                    <div class="payment-methods-content">
                        <p class="payment-methods-content__header">
                            Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.
                        </p>

                        <form action="" method="get">
                            <div class="payment-methods-choose__group">
                                <input type="radio" name="payment-methods" id="payment-methods1">
                                <label for="payment-methods1">Thanh toán bằng thẻ tín dụng</label>
                            </div>

                            <div class="payment-methods-choose__group">
                                <input type="radio" name="payment-methods" id="payment-methods2">
                                <label for="payment-methods2">Thanh toán bằng thẻ ATM</label>
                                
                            </div>

                            <div class="payment-methods-choose__group">
                                <input type="radio" name="payment-methods" id="payment-methods3">
                                <label for="payment-methods3">Thanh toán bằng Momo</label>
                                
                            </div>

                            <div class="payment-methods-choose__group">
                                <input type="radio" name="payment-methods" id="payment-methods4">
                                <label for="payment-methods4">Thanh toán khi giao hàng</label>
                                
                            </div>
                        </form>
                    </div>
                </div>
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
                    <a href=""><button class="buy-book-content__right--btn">Hoàn thành đơn hàng</button></a>
                </div>
            </div>
        </div>

        <div class="return-product-page">
            <a href=""><button class="return-product-page--btn">Hiển thị sản phẩm</button></a>
        </div>
    </div>
    </div>
</body>
</html>