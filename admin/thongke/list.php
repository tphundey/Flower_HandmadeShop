<div class="row mb">
    <div class="mr">

        <div class="row mb">

            <div class="boxtitle">THỐNG KÊ</div>

            <!-- <form action="index.php?act=listbill" method="post">
                <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
                <input type="submit" value="GO" name="listok">
            </form> -->

            <div class="row boxcontent cart">
                <table border="1">
                    <tr>

                        <th>MÃ DANH MỤC</th>                    
                        <th>TÊN DANH MỤC</th>
                        <th>SỐ LƯỌNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>

                    <?php

                   foreach ($listthongke as $thongke){
                    extract($thongke);
                    echo '
                    <tr>
                     <td>'.$madm.'</td>
                     <td>'.$tendm.'</td>
                     <td>'.$countsp.'</td>
                     <td>'.$maxprice.'</td>
                     <td>'.$minprice.'</td>
                     <td>'.$avgprice.'</td>
                    </tr>
                    ';
                   }

                    ?>


                </table>
            </div>
            <div class="row mb10">
<a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
            </div>
        </div>
    </div>

</div>