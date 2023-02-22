<div class="row">
            <div class="row header frmtitle">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb-10">
                        Mã loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb-10">
                        Tên loại<br>
                        <input type="text" name="tenloai" required>
                    </div>
                    <div class="row mb-10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="submit" name="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="danhsach"></a>
                    </div>
                    <?php  
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    
                    ?>
                </form>
            </div>
        </div>