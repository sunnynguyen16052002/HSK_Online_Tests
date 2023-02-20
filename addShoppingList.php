<?php
include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>

<?php
if (isset($_POST['Add'])){

    $masach = $_POST['MaSach'];
    $tensach = $_POST['TenSach'];
    $nhaxb = $_POST['NhaXB'];
    $tacgia = $_POST['TacGia'];
    $tgxb = $_POST['ThoiGianXB'];
    $mota = $_POST['MoTa'];
    $giatien = $_POST['GiaTien'];
    $ngonngu = $_POST['NgonNgu'];
    $linkhinh = $_POST['LinkHinh'];
    $linkhinh1 = $_POST['LinkHinh1'];
    $linkhinh2 = $_POST['LinkHinh2'];
    $linkhinh3 = $_POST['LinkHinh3'];
    $sotrang = $_POST['SoTrang'];
    $linkdrive = $_POST['LinkDrive'];
    $maloai = $_POST['MaLoai'];
    $maNCC = $_POST['MaNCC'];
    $linkimgtarget = basename($_POST['LinkHinh']);
    


$sql ="INSERT INTO sach (MaSach,TenSach,MaLoai,MaNCC, NhaXB,TacGia,ThoiGianXB,GiaTien,NgonNgu
, LinkHinh,LinkHinh1, LinkHinh2, LinkHinh3, SoTrang, LinkDrive ,MoTa) 
VALUES ('$masach', '$tensach','$maloai' ,'$maNCC', '$nhaxb', '$tacgia', '$tgxb', '$giatien','$ngonngu' ,'$linkhinh','$linkhinh1','$linkhinh2','$linkhinh3' ,'$sotrang' ,'$linkdrive' , '$mota')";
 if (mysqli_query($conn,$sql)>0) {
    echo "Thêm sản phẩm thành công<br/>";
    echo "<a href='addShoppingList.php'>Trở về</a>";
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
    
    <title>THÊM SẢN PHẨM</title>
    <script src="./ckeditor/ckeditor.js"></script>
    <script src="./ckeditor/ckfinder.js"></script>
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
            $sql_danhmuc = mysqli_query($conn,'select MaSach from sach order by MaSach')
        ?>

        <?php
            while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
        ?>

                <?php echo $row_danhmuc['MaSach'];?> |                   
        <?php
            }
        ?>



    <!-- ---------------------------------------------------------------- -->
    <div class="header">
        <h2>THÊM SÁCH BÁN</h2>
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
                        <td>Link ảnh phụ 3</td>
                        <td><input type="file" name="LinkHinh3" value="" required/></td>
                    </tr>

                    <tr>
                        <td>Link ảnh phụ 1</td>
                        <td><input type="file" name="LinkHinh1" value="" required/></td>
                    </tr>

                    <tr>
                        <td>Link ảnh phụ 2</td>
                        <td><input type="file" name="LinkHinh2" value="" required/></td>
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
                            <textarea name="MoTa" id="editor1" cols="50" rows="10"></textarea>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                        </td>
                        <td>
                        <button type="submit" class="btn" name="Add">Thêm sản phẩm</button>
                        <button><a href="inforAlterShoppingList.php">Thông tin shopping list</a></button> 
                        </td>
                    </tr>
                    
                </table>

    </form>

    <script>
        CKEDITOR.replace('editor1', {
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/conector.php?command=QuickUpload&type=Files'
        });

    </script>
  
</body>
</center>
</html>
<?php
}
?>