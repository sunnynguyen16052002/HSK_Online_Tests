<?php
include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>

<?php
if (isset($_POST['Add'])){

    $madethi = $_POST['MaDT'];
    $tendethi = $_POST['TenDeThi'];
    $filedethi = $_POST['FileDeThi'];
    $filenghe = $_POST['FileNghe'];
    $tglambai = $_POST['TGianLamBai'];
    $fileloigiai = $_POST['FileLoiGiai'];
    $anhdethi = $_POST['AnhDeThi'];
    $tongsocau = $_POST['TongSoCau'];


$sql ="INSERT INTO dethi (MaDT,TenDeThi,FileDeThi,FileNghe, TGianLamBai,FileLoiGiai,AnhDeThi,TongSoCau) 
VALUES ('$madethi', '$tensach','$tendethi' ,'$filedethi', '$filenghe', '$tglambai', '$fileloigiai', '$anhdethi','$tongsocau' )";
 if (mysqli_query($conn,$sql)>0) {
    echo "Thêm đề thi thành công<br/>";
    echo "<a href='addMockTestList.php'>Trở về</a>";
}
else {
    echo "Lỗi: " .$sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else {
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>THÊM ĐỀ THI</title>
    <style>
        h1{
            color: #0e0aca;
            text-align: center;
        }

        body{
            
            background-image: linear-gradient(0, rgb(192, 238, 250), rgb(132, 220, 241));
        }

        table{
            font-size: 20px;
        }

    </style>
</head>
<center>
<body>
    <!-- ---------------------------------------------------------------- -->
        <font style = "font-size: 20px; color: red;" >Các mã sách hiện có:</font>
        <?php
            $sql_danhmuc = mysqli_query($conn,'select MaDT from dethi order by MaDT')
        ?>

        <?php
            while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
        ?>

                <?php echo $row_danhmuc['MaDT'];?> |                   
        <?php
            }
        ?>
</br>
    <font style = "font-size: 20px; color: red;" >Note:</font>
    <p>Mã: <b>DTHSK00__</b> --> là mã của các đề thi HSK 5</p>
    <p>Mã: <b>DTHSK100__</b> --> là mã của các đề thi HSK 1</p>
    <p>Mã: <b>DTHSK200__</b> --> là mã của các đề thi HSK 2</p>
    <p>Mã: <b>DTHSK300__</b> --> là mã của các đề thi HSK 3</p>
    <p>Mã: <b>DTHSK400__</b> --> là mã của các đề thi HSK 4</p>
    <p>Mã: <b>DTHSK600__</b> --> là mã của các đề thi HSK 6</p>



    <!-- ---------------------------------------------------------------- -->
    <div class="header">
        <h2>THÊM SẢN PHẨM</h2>
    </div>
    <!-- <form method="POST" action="<?php ($_SERVER['PHP_SELF'])?>"> -->
    <form method="POST" action="addShoppingList.php">
    <table>

                    <tr>
                        <td>Mã sách</td>
                        <td><input type="text" name="MaSach" value="" required/></td>
                    </tr>

                    <tr>
                        <td>Tên sách</td>
                        <td><input type="text" name="TenSach" value="" required/></td>
                    </tr>

                    <tr>
                        <td>Mã loại</td>
                        <td>
                            <select name="MaLoai">
                                        <option value="">--Chọn mã loại--</option>
                                        <option value="MLHSK001">MLHSK001</option>
                                        <option value="MLHSK002">MLHSK002</option>
                                        <option value="MLHSK003">MLHSK003</option>
                                        <option value="MLHSK004">MLHSK004</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Mã nhà cung cấp</td>
                        <td>
                            <select name="MaNCC">
                                        <option value="">--Chọn mã nhà cung cấp--</option>
                                        <option value="NCCHSK001">NCCHSK001</option>
                                        <option value="NCCHSK002">NCCHSK002</option>
                                        <option value="NCCHSK003">NCCHSK003</option>
                                        <option value="NCCHSK004">NCCHSK004</option>
                                        <option value="NCCHSK005">NCCHSK005</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Nhà xuất bản</td>
                        <td><input type="text" name="NhaXB" value="" required/></td>
                    </tr>

                    <tr>
                        <td>Tác giả</td>
                        <td><input type="text" name="TacGia" value="" required/></td>
                    </tr>

                    <tr>
                        <td>Thời gian xuất bản</td>
                        <td><input type="date" name="ThoiGianXB" value="" required/></td>
                    </tr>

                    <tr>
                        <td>Giá tiền</td>
                        <td><input type="number" name="GiaTien" value="" required/></td>
                    </tr>

                    <tr>
                        <td>Ngôn ngữ</td>
                        <td><input type="text" name="NgonNgu" value="" required/></td>
                    </tr>

                    <tr>
                        <td>Link ảnh bìa</td>
                        <td><input type="file" name="LinkHinh" value="" required/></td>
                    </tr>

                    <tr>
                        <td>Số trang</td>
                        <td><input type="number" name="SoTrang" value="" required/></td>
                    </tr>

                    <tr>
                        <td>Link drive</td>
                        <td><input type="text" name="LinkDrive" value="" required/></td>
                    </tr>

                    <tr>
                        <td>Mô tả</td>
                        <td>
                            <textarea name="MoTa" id="" cols="50" rows="10"></textarea>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                        </td>
                        <td>
                        <button type="submit" class="btn" name="Add">Thêm sản phẩm</button>
                        <button><a href="inforAlterMockTests.php">Thông tin mock test list</a></button> 
                        </td>
                    </tr>
                    
                </table>

    </form>
  
</body>
</center>
</html>
<?php
}
?>