<?php
    include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin Shopping List</title>
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
    <button style = "background-color: #9b0281; margin-top: 30px;" class = "btn">
                <a href = "admin.html" style = "text-decoration: none; 
                font-size: 16px; background-color: #9b0281; color: white;" 
                href="admin.php" class = "btn">
                <i style= "margin-right: 5px;" class="fa-solid fa-house-chimney"></i>
                Về trang ADMIN
                </a>
                </button>

                <button style = "background-color: rgb(35, 211, 0); margin-top: 30px; min-width: 170px; border-color: rgb(35, 211, 0)" class = "btn">
                <a href = "addShoppingList.php" style = "text-decoration: none; 
                font-size: 16px; background-color: rgb(35, 211, 0); color: white;" 
                href="admin.php" class = "btn">
                <i style= "margin-right: 5px;" class="fa-solid fa-house-chimney"></i>
                Thêm sách bán
                </a>
                </button>
        <!-- Tab items -->
        <div class="tabs">
            <div class="tab-item active">
                <i class="tab-icon ti-book"></i>
                Thông tin Shopping List
            </div>
            <!-- <div class="tab-item">
                <i class="tab-icon fa-solid fa-file-contract"></i>
                Chỉnh sửa đề thi
            </div>
            <div class="tab-item">
                <i class="tab-icon ti-headphone"></i>
                Chỉnh sửa audio
            </div> -->
            <div class="line"></div>
        </div>

        <!-- Tab content -->
        <div class="tab-content">
            <div class="tab-pane active">
                <?php
                    $sql = "select * from sach";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
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
                        <td><b>Link Hình Bìa</b></td>
                        <td><b>Link Hình Phụ 1</b></td>
                        <td><b>Link Hình Phụ 2</b></td>
                        <td><b>Link Hình Phụ 3</b></td>
                        <td><b>Link Drive</b></td>
                        <td><b>Chỉnh sửa sách trong shopping list</b></td>
                        <td><b>Xóa sách vào Shopping List</b></td>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>"; 
                    ?>
                        <td align='center'>
                            <b><?php echo $row["MaSach"];?></b>
                        </td>
                        <td><b><?php echo $row["MaLoai"];?></b></td>
                        <td><b><?php echo $row["MaNCC"];?></b></td>
                        <td><?php echo $row["TenSach"];?></td>
                        <td><?php echo $row["NhaXB"];?></td>
                        <td><?php echo $row["TacGia"];?></td>
                        <td><?php echo $row["ThoiGianXB"];?></td>
                        <td><?php echo $row["SoTrang"];?></td>
                        <td><?php echo $row["MoTa"];?></td>
                        <td><font style = "color: orange; font-weight: 600;" ><?php echo $row["GiaTien"];?></font></td>
                        <td><?php echo $row["NgonNgu"];?></td>
                        <td><?php echo $row["LinkHinh"];?></td>
                        <td><?php echo $row["LinkHinh1"];?></td>
                        <td><?php echo $row["LinkHinh2"];?></td>
                        <td><?php echo $row["LinkHinh3"];?></td>
                        <td><?php echo $row["LinkDrive"];?></td>
                        
                        <!-- <td><a href="updatesp.php?mamh = <?php echo $row["mamh"];?>">Cập nhật</a></td>
                        <a href="capnhat.php?id=<?php echo $row['id']?>">Cập nhật</a> -->
                        <?php
                        echo"<td>
                            <a  href='alterShoppingList.php?MaSach=".$row["MaSach"]."'><span class='pencil-icon-alter fa fa-pencil'></span> </a>";
                            
                        ?></td>

                        <?php
                        // echo"<td>
                        //     <a  href='addShoppingList.php?MaSach=".$row["MaSach"]."'><span class='pencil-icon-add fa-solid fa-circle-plus'></span> </a>";
                            
                        // ?></td>

                        <?php
                        echo"<td>
                            <a  href='alterShoppingList.php?MaSach=".$row["MaSach"]."'><span class='pencil-icon-delete fa-solid fa-trash-can'></span> </a>";
                            
                        ?></td>

                        
                        <!-- <a href='updatesp.php?id=".$row['mamh']."'><sp an class='fa fa-pencil'></span></a>";?></td> -->
                    
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