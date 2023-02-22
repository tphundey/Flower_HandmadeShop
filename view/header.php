<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/style.css">
    <script src="https://kit.fontawesome.com/d829d3809c.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="boxcenter">

        <div class="row mb menu">
            <ul>
                <li><img src="upload/banner.png" width="70px" alt=""></li>
                <li><a href="index.php"><strong><i class="fa-solid fa-house"></i> </strong></a></li>
                <li><a href="index.php?act=gioithieu"><strong>GIỚI THIỆU</strong></a></li>
                <li><a href="index.php?act=gioithieu"><strong>LIÊN HỆ</strong> </a></li>
                <li><a href="index.php?act=gioithieu"><strong>GÓP Ý</strong></a></li>
                <li><a href="index.php?act=gioithieu"><strong>HỎI ĐÁP</strong></a></li>
                <div class="form-timkiem">
                    <form action="index.php?act=sanpham" method="post">
                        <input type="text" name="kyw" placeholder="Tìm kiếm sản phẩm...">
                        <input type="hidden" name="timkiem" value="Tìm kiếm">
                    </form>
                </div>
            </ul>
        </div>