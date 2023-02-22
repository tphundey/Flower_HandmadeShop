

<div class="row mb">
    <div class="">
        <div class="row mb">

            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table border="1" style="width:100% ; border:1px solid;">
                    
                <tr>
                          
                            <th>Hình</th>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Thao tác</th>
                        </tr>

                    <?php
                   viewcart();

                    ?>
                   
                </table>
            </div>
        </div>

        <div class="row mb bill">
           <a href="index.php?act=bill"> <input type="button" value="ĐỒNG Ý ĐẶT HÀNG"></a><a href="index.php?act=delcart"><input type="button" value="xóa giỏ hàng"></a>
        </div>
    </div>

</div>