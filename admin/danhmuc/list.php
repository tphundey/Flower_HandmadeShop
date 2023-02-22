<div class="row">
    <div class="row header frmtitle">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">

        <div class="row mb-10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo
                    '
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td><a href="' . $suadm . '"><input type="button" value="Sửa"></a> <a href="' . $xoadm . '"> <input type="button" value="xóa"></a></td>
                    </tr>
                    ';
                }

                ?>

            </table>
        </div>

        <div class="row mb-10">
            <input type="button" value="chọn tất cả">
            <input type="button" value="bỏ chọn tất cả">
            <input type="button" value="xóa các mục đã chọn">
            <a href="http://localhost/PHP1/ky4/duan/admin/index.php?act=adddm"><input type="button" value="nhập thêm"></a>
        </div>

    </div>
</div>