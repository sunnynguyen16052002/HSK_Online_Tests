    <?php
        session_start();
        ob_start();
        include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');

        if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
        if(isset($_POST['addcart']) && ($_POST['addcart'])){
            $id_sach = $_POST['bookid'];
            $tensach = $_POST['bookname'];
            $imgsach = $_POST['img'];
            $giasach = $_POST['bookprice'];
            $soluong = 1;
            // $sl = $_POST['sl] --> chọn số lượng cho sp trước khi click thêm vào giỏ hàng
            $i = 0;
            $flag = 0; //biến này để theo dỏi sự thay đổi về sl trong giỏ
            $thanhtien = $soluong * $giasach;


            //tìm và so sánh sản phẩm trong giỏ hàng
            if(isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0)) {
                foreach ($_SESSION['cart'] as $sach) {
                    if($sach[0] == $id_sach) {
                        // cập nhật số lượng giỏ hàng
                        $soluong+=$sach[4];
                        $flag = 1;
                        // Cập nhật số lượng mới vào giỏ
                        $_SESSION['cart'][$i][4] = $soluong;
                        break;
                    }

                    $i++;
                }
            }

            // Khi số lượng ban đầu không thay đổi thì thêm mới vào giỏ hàng
            if($flag == 0) {
                $sach = array($id_sach, $tensach, $imgsach, $giasach, $soluong, $thanhtien);
                array_push($_SESSION['cart'], $sach);
            }
            header('location: viewcart.php');

        }


    ?>
<?php
/**Tăng số lượng sản phẩm - CÁCH 2 */

//kiểm tra sp có trong giỏ hàng hay không --> lấy mamh để đi tìm mặt hàng đó
           /* $duochaykhong = 0; //để kiểm tra sản phẩm có trùng hay không; khi nó không tìm được sản phẩm đó trong giỏ hành
        
        for ($i=0; $i < sizeof($_SESSION['cart']) ; $i++) { 
            if($_SESSION['cart'][$i][1] == $tensach){ //lấy tên sp ở từng vị trí thứ i theo tên mh và kiểm tra xem nó có = với tên sp hay không
                //nếu bằng thì cập nhật vào và thoát khỏi vòng lặp
                //cập nhật sl sp
                $duochaykhong = 1; //khi đã tìm được sản phẩm trong giỏ hàng
                $soluongcapnhat = $soluong + $_SESSION['cart'][$i][4]; //lấy số lượng hiện hành + sl đã có trong giỏ
                $_SESSION['cart'][$i][4] = $soluongcapnhat; //gán sl tại vị trí được cập nhật vào số lượng hiện hành
                break;
            }
        }

        if($duochaykhong == 0){// nếu không trùng sp trong giỏ hàng thì thêm mới
            //thêm mới sp vào giỏ hàng
            $sach = array($id_sach, $tensach, $imgsach, $giasach, $soluong, $thanhtien);
            $_SESSION['cart'][] = $sach;
            //var_dump ($_SESSION['cart']);
        } */
?> 

