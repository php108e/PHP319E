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
    <title>Trang chủ</title>
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
        #page{
            text-align:center;
        }
        span{
            color:red;
        }
        th{
            text-align:center;
        }
        a:hover{
            color:blue;
        }
        a{
            color:black;
        }
        input[type='text']{
            height:35px;
            width:320px;
            border: 1px solid blue;
            padding:5px;
        }
        .chucnang{
            text-align:center;
        }
        .form-search{
            text-align:right;
            padding-bottom:10px;
        }

    </style>
</head>
<body>
    <div id="header" class = "container">Header</div>
    <div id="search" class="container">
        <div class="form-search">
            <form action="index.php" method="post">
                <div>
                    <input type="text" name="txtSearch" id="search" placeholder="Mời bạn nhập....">
                    <input type="submit" name="btnSearch" value="Search" class="btn btn-info">
                    <a href="index.php?page=1" class="btn btn-danger">Trang chủ</a>
                    <a href="add.php" class="btn btn-info">Thêm sản phẩm</a>
                </div>
            </form>
        </div>
    </div>
    <?php
        include("dienthoai.php");
        $dt = new Dienthoai();
        $data = $dt->getAll();
        $total_record = count($data); //tổng số record
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1; //Trang hiện tại
        $total_page = ceil($total_record / 10);//tổng số trang
        
        //Giới hạn khoảng current_page trong một khoảng đến total_page
        if($current_page>$total_page){
            $current_page = $total_page;
        }if($current_page>$total_page){
            $current_page = 1;
        }
        if(isset($_POST['btnSearch'])){
            //Lấy dữ liệu trong form search
            $searchVal = $_POST['txtSearch'];
            if($searchVal!=""){
                $item = $dt->getAllByName($searchVal);
            }else{
                $item = $dt->getPage($current_page);    
            }
        }else{
            $item = $dt->getPage($current_page);
        }
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

        if(isset($_SESSION['status3'])){
            if($_SESSION['status3']==true){
                echo "<div class='alert alert-success'>Thêm thành công</div>";
                unset($_SESSION['status3']);
            }else{
                echo "<div class='alert alert-success'>Thêm thất bại</div>";
                unset($_SESSION['status3']);
            }
        }
        ?>
        <?php
            if(isset($_GET['page'])){
                echo "<h2>Tất cả sẩn phẩm: </h2><hr>";
            }if(isset($_POST['btnSearch'])){
                echo "<h2>Kết quả tìm kiếm: </h2>";
            }
        ?>
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>Mã SP</th>
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
                <td><?php echo $v['masp']?></td>
                <td><?php echo $v['tensp']?></td>
                <td><?php echo $v['giasp']?></td>
                <td><?php echo $v['soluong']?></td>
                <td><?php echo $v['namsx']?></td>
                <td><?php echo $v['hang']?></td>
                <td class="chucnang"><a href="update.php?masp=<?php echo $v['masp'];?>" class="btn btn-info">Sửa</a></td>
                <td class="chucnang"><a href="delete.php?masp=<?php echo $v['masp'];?>" class="btn btn-danger">Xóa</a></td>
            </tr>
            <?php
            }
            ?>

            <?php
            ?>
            <tr>
                <td colspan=8 id="page">
                    <?php 
                    if(isset($_GET['page'])){
                        if($current_page>1 && $total_page>1){
                            echo '<a href="index.php?page='.($current_page-1).'">Trước</a> | ';
                        }else{
                            echo "Trước |";
                        }

                        for ($i=1; $i <= $total_page ; $i++) { 
                            //Nếu là trang hiện tại thì dùng span
                            //Ngược lại dùng a
                            if($i==$current_page){
                                echo "<span class='curren-page'> ".$i." </span>| ";
                            }else{
                                echo '<a href="index.php?page='.$i.'">'.$i.'</a> |&nbsp';
                            }
                        }

                        if($current_page<$total_page && $total_page>1){
                            echo '<a href="index.php?page='. ($current_page+1) .'">Sau</a>';
                        }else{
                            echo "Sau";
                        }
                    }
                    ?>
                </td>
            </tr>
            <?php
            ?>
        </table>
    </div>
    <div id="footer" class="container">Footer</div>
</body>
</html>