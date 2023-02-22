<div class="row mb">
    <div class="mr">

        <div class="row mb">

            <div class="boxtitle">DANH SÁCH ĐƠN HÀNG</div>

            <form action="index.php?act=listbill" method="post">
                <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
                <input type="submit" value="GO" name="listok">
            </form>

            <div class="row boxcontent cart">
                <table border="1">
                    <tr>

                        <th>MÃ ĐƠN HÀNG</th>
                      
                        <th>NGƯỜI ĐẶT</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ TRỊ</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                    </tr>

                    <?php

                    foreach ($listbill as $bill) {
                        extract($bill);
                        $kh = $bill["bill_name"] . '
                           <br> ' . $bill["bill_email"] . '
                           <br>' . $bill["bill_address"] . '
                           <br>' . $bill["bill_tel"];
                        $ttdh = get_ttdh($bill["bill_status"]);
                        $countsp = loadall_cart_count($bill["id"]);
                        echo '  <tr>
                          
                                      <td>' . $bill['id'] . '</td>
                                      <td>' . $kh . '</td>
                                      <td>' . $countsp . '</td>
                                      <td>' . $bill["total"] . '</td>
                                      <td>' . $ttdh . '</td>     
                                      <td>' . $bill["ngaydathang"] . '</td>                      
                                    </tr>';
                    }

                    ?>


                </table>
            </div>
        </div>
    </div>

</div>