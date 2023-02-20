<?php
    include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>

<!DOCTYPE html>

<?php
    if(isset($_POST["TenSach"]))
    {
        $masach = $_POST['MaSach'];
        $tensach = $_POST['TenSach'];
        $nhaxb = $_POST['NhaXB'];
        $tacgia = $_POST['TacGia'];
        $tgxb = $_POST['ThoiGianXB'];
        $mota = $_POST['MoTa'];
        $giatien = $_POST['GiaTien'];
        $ngonngu = $_POST['NgonNgu'];
        $linkhinh = $_POST['LinkHinh'];
        $sotrang = $_POST['SoTrang'];
        $linkdrive = $_POST['LinkDrive'];
        $maloai = $_POST['MaLoai'];
        $maNCC = $_POST['MaNCC'];

        $sql = "update sach set TenSach = '$tensach', NhaXB = '$nhaxb', TacGia = '$tacgia', 
        ThoiGianXB = '$tgxb', MoTa = '$mota', GiaTien = '$giatien'
        , NgonNgu = '$ngonngu', LinkHinh = '$linkhinh', SoTrang = '$sotrang', LinkDrive = '$linkdrive', MaLoai = '$maloai', MaNCC = '$maNCC'
         WHERE MaSach = '$masach' ";
        if (mysqli_query($conn, $sql) > 0) {
            echo "Cập nhật dữ liệu thành công"."<br/>";
            echo "<a href='admin.html'>Về trang chính</a>";
        }
        else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }else{
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CẬP NHẬT SHOPPING LIST</title>
    <script src="./ckeditor/ckeditor.js"></script>
    <style>
        table tr td {
            border: 1px solid #000;
            padding: 5px;

        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <?php 
        $masach = $_GET["MaSach"];
        $sql = "select * from sach where MaSach = '$masach'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        echo "Thông tin sách bán <br/>";
        ?>
    <table>
        <tr>
            <td><b>Mã sản phẩm</b></td>
            <td><b>Mã loại</b></td>
            <td><b>Mã nhà cung cấp</b></td>
            <td><b>Tên sản phẩm</b></td>
            <td><b>Xuất xứ</b></td>
            <td><b>Tác giả</b></td>
            <td><b>Thời gian xuất bản</b></td>
            <td><b>Số trang</b></td>
            <td><b>Mô tả</b></td>
            <td><b>Giá tiền</b></td>
            <td><b>Ngôn ngữ</b></td>
            <td><b>Link Hình</b></td>
            <td><b>Link Drive</b></td>
        </tr>
        <?php
            echo "<tr>"; 
            echo "<td>".$row["MaSach"]."</td>";
            echo "<td>".$row["MaLoai"]."</td>";
            echo "<td>".$row["MaNCC"]."</td>";
            echo "<td>".$row["TenSach"]."</td>";
            echo "<td>".$row["NhaXB"]."</td>";
            echo "<td>".$row["TacGia"]."</td>";
            echo "<td>".$row["ThoiGianXB"]."</td>";
            echo "<td>".$row["SoTrang"]."</td>";
            echo "<td>".$row["MoTa"]."</td>";
            echo "<td>".$row["GiaTien"]."</td>";
            echo "<td>".$row["NgonNgu"]."</td>";
            echo "<td>".$row["LinkHinh"]."</td>";
            echo "<td>".$row["LinkDrive"]."</td>";
            echo "<tr/>";
    ?>
    </table>


    <h1>CẬP NHẬT THÔNG TIN SẢN PHẨM</h1>
    <form action="alterShoppingList.php" method="post">
        Tên sách: <br /> <input type="text" name="TenSach" value=""> <br />
        Mã loại:
        <select name="MaLoai">
            <option value="">--Chọn mã loại--</option>
            <option value="MLHSK001">MLHSK001</option>
            <option value="MLHSK002">MLHSK002</option>
            <option value="MLHSK003">MLHSK003</option>
            <option value="MLHSK004">MLHSK004</option>
        </select>
        <br />
        Mã nhà cung cấp:
        <select name="MaNCC">
            <option value="">--Chọn mã nhà cung cấp--</option>
            <option value="NCCHSK001">NCCHSK001</option>
            <option value="NCCHSK002">NCCHSK002</option>
            <option value="NCCHSK003">NCCHSK003</option>
            <option value="NCCHSK004">NCCHSK004</option>
            <option value="NCCHSK005">NCCHSK005</option>
        </select>
        Nhà xuất bản: <br /> <input type="text" name="NhaXB" value=""> <br />
        Tác giả: <br /> <input type="text" name="TacGia" value=""> <br />
        Thời gian xuất bản: <br /> <input type="date" name="ThoiGianXB" value=""> <br />
        Số trang: <br /> <input type="number" name="SoTrang" value=""> <br />
        Mô tả: <br /> <textarea name="MoTa" id="" cols="30" rows="10"></textarea> <br />
        Giá tiền: <br /> <input type="number" name="GiaTien" value=""> <br />
        Ngôn ngữ: <br /> <input type="text" name="NgonNgu" value=""> <br />
        Link hình: <br /> <input type="file" name="LinkHinh" value=""> <br />
        Link drive: <br /> <input type="text" name="LinkDrive" value=""> <br />

        <input style="background-color: blue; border: 1px; border-radius: 3px; color: white; min-width: 50px;
                        height: 34px; margin-rigt: 20px;" type="submit" name="submit" value="Lưu">
        <input type="hidden" name="MaSach" value="<?php echo $masach;?>" />
        <a style="background-color: grey; border: 1px; border-radius: 3px; color: white;  margin-rigt: 20px;"
            href="inforAlterShoppingList.php">Thoát</a>
        </td>
        </tr>

        </table>

    </form>

    <?php
    //}
    ?>

</body>

</html>
<?php
    }
?>