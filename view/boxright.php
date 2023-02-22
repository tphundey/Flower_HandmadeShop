<div class="row mb">
    <div class="boxtitle"><strong>TÀI KHOẢN</strong></div>
    <div class="boxcontent formtaikhoan">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="row mb-10">
                <strong style="color:black ;">xin chào: </strong>
               <span style="font-size:13px; color: gray;"> <?= $user ?></span>
            </div>
            <div class="row mb-10">
            <li>
                    <a href="index.php?act=mybill"> Đơn hàng của tôi</a>
                </li>
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                </li>
                <?php if ($role==1){ ?> 
<li>
                    <a href="admin/index.php">Đăng nhập Admin</a>
                </li>
<?php } ?>
                
              

                <li>
                    <a href="index.php?act=thoat"><i class="fa-solid fa-share-from-square"></i></a>
                </li>
            </div>

        <?php



        } else {

        ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb-10">
                    Tên đăng nhập <br>
                    <input type="text" name="user">
                </div>
                <div class="row mb-10">
                    Mật khẩu <br>
                    <input type="password" name="pass" id="">
                </div>
                <div class="row mb-10">
                    <input type="checkbox" name="" id=""><span style="font-size:0.8rem ;">Ghi nhớ tài khoản ?</span>
                </div>
                <div class="row mb-10">
                    <input type="submit" value="Đăng nhập" name="dangnhap">
                </div>

            </form>
            <li>
                <a href="">Quên mật khẩu</a>
            </li>

            <li>
                <a href="index.php?act=dangky">Đăng ký thành viên</a>
            </li>
        <?php
        }
        ?>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle"><strong>DANH MỤC</strong></div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '
         <li>
        <a href="' . $linkdm . '">' . $name . '</a>
        </li>';
            }
            ?>
            <!-- <li>
                        <a href="">Đồng Hồ</a>
                    </li>
                    <li>
                        <a href="">LapTop</a>
                    </li>
                    <li>
                        <a href="">Điện thoại</a>
                    </li>
                    <li>
                        <a href="">Balo</a>
                    </li> -->
        </ul>
    </div>
   
</div>
<div class="row">
    <div class="boxtitle"><strong>TOP 10 YÊU THÍCH</strong></div>
    <div class="row boxcontent">
        <?php

        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo '
    <div class="row mb-10 top10">
    <a href="' . $linksp . '"><img src="' . $img . '" alt=""></a>
                    <a href="' . $linksp . '">' . $name . '</a>
                </div>
    ';
        }

        ?>
        

    </div>