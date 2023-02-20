<?php
    include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>

<!DOCTYPE html>

<?php
    if(isset($_POST["TenDeThi"]))
    {
        $madethi = $_POST['MaDT'];
        $tendethi = $_POST['TenDeThi'];
        $filedethi = $_POST['FileDeThi'];
        $filenghe = $_POST['FileNghe'];
        $fileloigiai = $_POST['FileLoiGiai'];
        $tglambai = $_POST['TGianLamBai'];
        $tongsocau = $_POST['TongSoCau'];
        $anhdethi = $_POST['AnhDeThi'];

        $sql = "update dethi set TenDeThi = '$tendethi', FileDeThi = '$filedethi', FileNghe = '$filenghe', 
        FileLoiGiai = '$fileloigiai', TGianLamBai = '$tglambai', TongSoCau = '$tongsocau'
         WHERE MaDT = '$madethi' ";
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
    <style>
            table tr td
            {
                border: 1px solid #000;
                padding: 5px;
                
            }
            table
            {
                border-collapse:collapse;
            }
        </style>
</head>
<body>

<?php 
        $madethi = $_GET["MaDT"];
        $sql = "select * from dethi where MaDT = '$madethi'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        echo "Thông tin Mock Test <br/>";
        ?>
        <table>
        <tr>
            <td><b>Mã đề thi</b></td>
            <td><b>Tên đề thi</b></td>
            <td><b>File đề thi</b></td>
            <td><b>File nghe</b></td>
            <td><b>File lời giải</b></td>
            <td><b>Thời gian làm bài</b></td>
            <td><b>Tổng số câu</b></td>
            <td><b>Ảnh đề thi</b></td>
        </tr>
        <?php
            echo "<tr>"; 
            echo "<td>".$row["MaDT"]."</td>";
            echo "<td>".$row["TenDeThi"]."</td>";
            echo "<td>".$row["FileDeThi"]."</td>";
            echo "<td>".$row["FileNghe"]."</td>";
            echo "<td>".$row["FileLoiGiai"]."</td>";
            echo "<td>".$row["TGianLamBai"]."</td>";
            echo "<td>".$row["TongSoCau"]."</td>";
            echo "<td>".$row["AnhDeThi"]."</td>";
            echo "<tr/>";
    ?>
    </table>


    <h1>CẬP NHẬT THÔNG TIN SẢN PHẨM</h1>
    <form action="alterMockTestList.php" method = "post">
        Tên đề thi: <br/> <input type="text" name = "TenDeThi" value=""> <br/>
        File đề thi: <br/> <input type="text" name = "FileDeThi" value=""> <br/>
        File nghe: <br/> <input type="text" name = "FileNghe" value=""> <br/>
        File lời giải<i></i>: <br/> <input type="file" name = "FileLoiGiai" value=""> <br/>
        Thời gian làm bài: <br/> <input type="text" name = "TGianLamBai" value=""> <br/>
        Tổng số câu: <br/> <input type="number" name = "TongSoCau" value=""> <br/>
        Ảnh đề thi: <br/> <input type="file" name = "AnhDeThi" value=""> <br/>

        <input style= "background-color: blue; border: 1px; border-radius: 3px; color: white; min-width: 50px;
                        height: 34px; margin-rigt: 20px;" type="submit" name = "submit" value="Lưu"> 
        <input type = "hidden" name="MaDT" value="<?php echo $madethi;?>"/>
        <a style= "background-color: grey; border: 1px; border-radius: 3px; color: white;  margin-rigt: 20px;" 
            href="inforAlterMockTests.php">Thoát</a>
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
