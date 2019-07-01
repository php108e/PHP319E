<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #header, #footer{
            line-height:100px;
            border:1px solid red;
            margin-bottom:10px;
        }
        #content{
            margin-bottom:10px;
            border:1px solid green;
        }
    </style>
</head>
<body>
    <div id="header" class = "container">Header</div>
    <?php
        include("dienthoai.php");
        $dt = new Dienthoai();
        $item = $dt->getAll();
        // echo "<pre>";
        // print_r($item);
    ?>
    <div id="content" class = "container">
        <div class="row">
            <div class="col-md-9">
                <div id="item" class="row">
                    <div class="col-md-4">
                    <?php
                    //foreach ($item as $k => $v) {
                    ?>
                        <!-- <img src="#" width="100%" height="150px"> -->
                        <div class="item-name"><?php //echo $v['tensp']?></div>
                        <div class="item-price"><?php //echo $v['giasp']?></div>
                        <div class="item-brand"><?php //echo $v['hang']?></div>
                        <?php
                        //}
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

        <?php
        if(isset($_SESSION['status'])){
            if($_SESSION['status']==true){
                echo "<div class='alert alert-success'>Xóa dữ liệu thành công</div>";
                unset($_SESSION['status']);
            }else{
                echo "<div class='alert alert-success'>Xóa dữ liệu thất bại</div>";
                unset($_SESSION['status']);
            }
        }

        if(isset($_SESSION['status2'])){
            if($_SESSION['status2']==true){
                echo "<div class='alert alert-success'>Update dữ liệu thành công</div>";
                unset($_SESSION['status2']);
            }else{
                echo "<div class='alert alert-success'>Update dữ liệu thất bại</div>";
                unset($_SESSION['status2']);
            }
        }
        ?>
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>TT</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Năm sản xuất</th>
                <th>Hãng</th>
                <th colspan="2">Chức năng</th>
            </tr>
            <?php
                foreach ($item as $k => $v) {
            ?>
            <tr>
                <td><?php echo ($k+1)?></td>
                <td><?php echo $v['tensp']?></td>
                <td><?php echo $v['giasp']?></td>
                <td><?php echo $v['soluong']?></td>
                <td><?php echo $v['namsx']?></td>
                <td><?php echo $v['hang']?></td>
                <td><a href="update.php?masp=<?php echo $v['masp'];?>" class="btn btn-info">Sửa</a></td>
                <td><a href="delete.php?masp=<?php echo $v['masp'];?>" class="btn btn-danger">Xóa</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <div id="footer" class="container">Footer</div>
</body>
</html>