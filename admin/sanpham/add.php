<div class="row">
            <div class="row header frmtitle">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb-10">
                        Danh mục <br>
                        <select name="iddm">
                            <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>
                            
                        </select>
                    </div>
                    <div class="row mb-10">
                        Tên sản phẩm<br>
                        <input type="text" name="tensp" required>
                    </div>
                    <div class="row mb-10">
                        Gía<br>
                        <input type="text" name="giasp" required>
                    </div>
                    <div class="row mb-10">
                        Hình<br>
                        <input type="file" name="hinh" required>
                    </div>
                    <div class="row mb-10">
                        Mô tả<br>
                        <textarea name="mota" cols="30" rows="10" required></textarea>
                    </div>
                    
                    <div class="row mb-10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="submit" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="danhsach"></a>
                    </div>
                    <?php  
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    
                    ?>
                </form>
            </div>
        </div>