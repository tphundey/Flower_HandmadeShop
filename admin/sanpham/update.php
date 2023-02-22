<?php

if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no photo";
}
?>


<div class="row">
    <div class="row header frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb-10">
                <select name="iddm">
                    <option value="0" selected>TẤT CẢ</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($iddm == $id) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                    }
                    ?>

                </select>
            </div>

            <!-- do để đoạn code này ở kia nó ko chịu nhận name của sản phẩm nên phải vứt xuống đây -->
            <?php

            if (is_array($sanpham)) {
                extract($sanpham);
            }
            $hinhpath = "../upload/" . $img;
            if (is_file($hinhpath)) {
                $hinh = "<img src='" . $hinhpath . "' height='80'>";
            } else {
                $hinh = "no photo";
            }
            ?>
            <div class="row mb-10">
                Tên sản phẩm<br>
                <input type="text" name="tensp" value="<?= $name ?>" required>
                <?php
                
                ?>
            </div>
            <div class="row mb-10">
                Gía<br>
                <input type="text" name="giasp" value="<?= $price ?>" required>
            </div>
            <div class="row mb-10">
                Hình<br>
                <input type="file" name="hinh" required>
                <?= $hinh ?>
            </div>
            <div class="row mb-10">
                Mô tả<br>
                <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
            </div>

            <div class="row mb-10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="submit" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="danhsach"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>
        </form>
    </div>
</div>