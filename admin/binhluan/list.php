<div class="row">
    <div class="row header frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row frmcontent">

        <div class="row mb-10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NỘI DUNG BÌNH LUẬN</th>
                    <th>ID USER</th>
                    <th>ID PRO</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $suabl = "index.php?act=suabl&id=" . $id;
                    $xoabl = "index.php?act=xoabl&id=" . $id;
                    echo
                    '
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>' . $noidung . '</td>
                    <td>' . $iduser . '</td>
                    <td>' . $idpro . '</td>
                    <td>' . $ngaybinhluan. '</td>
                
                    <td> <a href="' . $xoabl . '"> <input type="button" value="xóa"></a></td>
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
           
        </div>

    </div>
</div>