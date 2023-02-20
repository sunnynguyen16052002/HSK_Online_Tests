<?php
include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style_listenpractice.css">
    <link rel="stylesheet" href="./assets/css/style_bookdetails.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
    <title>Listen HSK Practices</title>
</head>
<body>
    <div class="main">
        
        <div class="grid-row__detailts practice-container">
            <div class="grid-column2__practice details-container-img">
            <img src="./assets/img/hsk9cap.jpg" alt="" class="listenpractice-img"/> 
            </div>
           
                
            <div class="grid-column10__detailts practice-container-content practicelist-wrap">
            <?php
                        //1. cần biết số dòng trong một trang
                        //2. lấy tổng số dòng/ số dòng muốn hiện trên một trang là ok
                        // $page = 1;
                        // $sotin1trang = 9;
                            
                        // if(isset($_GET["page"]))
                        // {
                        //     $page = $_GET["page"];
                        // }
                        // $from = ($page - 1)* $sotin1trang;
                        // $sql = "select * from sach limit $from, $sotin1trang";
                        // $dsmathang = mysqli_query($conn,$sql);
                        // $mh = mysqli_query($conn, "select * from sach");

                        // $tongsomh = mysqli_num_rows($mh);

                        // $sotrang = ceil($tongsomh/$sotin1trang);

                        // while($mathang = mysqli_fetch_array($dsmathang)){
                    ?>
                <?php
                                $sqp_cat_home = mysqli_query($conn, "select * from audio");
                                while ($row_cate_home = mysqli_fetch_array($sqp_cat_home)){
                                    $id_category = $row_cate_home['MaFile'];
                                        
            
                                ?>
                                <?php
                                    $sqp_sp = mysqli_query($conn, 'select * from audio');
                                    while ($row_sp = mysqli_fetch_array($sqp_sp)){
                                        if($row_sp['MaFile'] == $id_category){
                                ?>
                <div class="">
                    <div class="grid-4-col">
                        <div class="grid-4-1 play-icon">
                            <i class="playing-icon fa-solid fa-play"></i>

                        </div>
    
                        <div class="grid-4-2">
                            <?php echo $row_sp['TenAudio'] ?>
                        </div>
    
                        <div class="grid-4-3">
                            <i class="speaker-icon fa-sharp fa-solid fa-volume"></i>
                        </div>
    
                        <div class="grid-4-4">
                            <?php echo $row_sp['ThoiGian'] ?>
                        </div>

                        
                    </div>
                </div>
                <?php
                                }
                            }
                        }
                                ?>

                
                
                    
            </div>
            <?php
                // }
            ?>

<!-- <div class = "page-button-container">
                <?php 
                    for ($i = 1; $i<=$sotrang;$i++)
                    {
                ?>
                
                    <button class = "page-button" >
                        <a href='shopping.php?page=<?php echo $i;?>' class = "page-button-a" ><?php echo $i;?></a> 
                    </button>
                

                <?php        
                    }
                ?>
</div> -->
            

 
        </div>
    </div>
</body>
</html>