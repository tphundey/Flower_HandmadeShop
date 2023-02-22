<div class="row">
    <div class="row header frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent">

        <div class="row mb-10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ TK</th>
                    <th>TÊN ĐĂNH NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=".$id;
                    $xoatk = "index.php?act=xoatk&id=".$id;
                    echo
                    '
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id . '</td>
                    <td>' . $user . '</td>
                    <td>' . $pass . '</td>
                    <td>' . $email . '</td>
                    <td>' . $address . '</td>
                    <td>' . $tel . '</td>
                    <td>' . $role . '</td>
                    <td><a href="' . $xoatk . '"> <input type="button" value="xóa"></a></td>
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