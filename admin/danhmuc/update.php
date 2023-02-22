<?php

if (is_array($dm)) {
    extract($dm);
}

?>


<div class="row">
    <div class="row header frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb-10">
                Mã loại <br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb-10">
                Tên loại<br>
                <input type="text" name="tenloai" required value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
            </div>
            <div class="row mb-10">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                <!-- //lưu lại id -->
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="submit" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="danhsach"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>
        </form>
    </div>
</div>