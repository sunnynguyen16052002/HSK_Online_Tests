<?php
    include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin Mock Test List</title>
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="./assets/css/style_alterElement.css">

    <style>
            table tr td
            {
                border: 1px solid #000;
                padding: 10px;
                text-align: justify;
                font-size: 12px;
            }
            table
            {
                border-collapse:collapse;
            }
    </style>
</head>
<body>

                


    
    <div>
    <button style = "background-color: #9b0281; margin-top: 30px; min-width: 170px;" class = "btn">
                <a href = "admin.html" style = "text-decoration: none; 
                font-size: 16px; background-color: #9b0281; color: white;" 
                href="admin.php" class = "btn">
                <i style= "margin-right: 5px;" class="fa-solid fa-house-chimney"></i>
                Về trang ADMIN
                </a>
                </button>

                <button style = "background-color: rgb(35, 211, 0); margin-top: 30px; min-width: 170px; border-color: rgb(35, 211, 0)" class = "btn">
                <a href = "addMockTestList.php" style = "text-decoration: none; 
                font-size: 16px; background-color: rgb(35, 211, 0); color: white;" 
                href="admin.php" class = "btn">
                <i style= "margin-right: 5px;" class="fa-solid fa-house-chimney"></i>
                Thêm đề thi
                </a>
                </button>
        <!-- Tab items -->
        <div class="tabs">
            <div class="tab-item active">
                <i class="tab-icon ti-book"></i>
                Chỉnh sửa đề thi
            </div>
            <div class="line"></div>
        </div>

        <!-- Tab content -->
        <div class="tab-content">
            <div class="tab-pane active">
                <?php
                    $sql = "select * from dethi";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
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
                        <td><b>Cập nhật thông tin đề thi</b></td>
                        <td><b>Xóa đề thi</b></td>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>"; 
                    ?>
                        <td align='center'>
                            <b><?php echo $row["MaDT"];?></b>
                        </td>
                        <td><b><?php echo $row["TenDeThi"];?></b></td>
                        <td><?php echo $row["FileDeThi"];?></td>
                        <td><?php echo $row["FileNghe"];?></td>
                        <td><?php echo $row["FileLoiGiai"];?></td>
                        <td><?php echo $row["TGianLamBai"];?></td>
                        <td><?php echo $row["TongSoCau"];?></td>
                        <td><?php echo $row["AnhDeThi"];?></td>
                        
                        <!-- <td><a href="updatesp.php?mamh = <?php echo $row["mamh"];?>">Cập nhật</a></td>
                        <a href="capnhat.php?id=<?php echo $row['id']?>">Cập nhật</a> -->
                        <?php
                        echo"<td>
                            <a  href='alterMockTestList.php?MaDT=".$row["MaDT"]."'><span class='pencil-icon fa fa-pencil'></span> </a>";
                            
                        ?></td>

                        <?php
                        // echo"<td>
                        //     <a  href='addMockTestList.php?MaDT=".$row["MaDT"]."'><span class='pencil-icon-add fa-solid fa-circle-plus'></span> </a>";
                            
                        // ?></td>

                        <?php
                        echo"<td>
                            <a  href='alterShoppingList.php?MaDT=".$row["MaDT"]."'><span class='pencil-icon-delete fa-solid fa-trash-can'></span> </a>";
                            
                        ?></td>
                    
                        <?php
                                
                            {   
                                echo "</tr>";
                            }
                        }
                        ?>
                    
                    
                </table>
            </div>

            <?php
                        }
                        else {
                            echo "0 results";
                        }
                        mysqli_close($conn);
                    ?>

            
        </div>
    </div>

    <script src="./tabUI.js"></script>
</body>
</html>