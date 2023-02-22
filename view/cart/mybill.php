<div class="row mb">
    <div class="boxtrai mr">

        <div class="row mb">

            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
            <div class="row boxcontent cart">
                <table border="1" style="border: solid;">
                    <tr style="font-size: 0.9rem;">
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>SỐ LƯỢNG MẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    </tr>

                    <?php
                    if (is_array(($listbill))) {
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $countsp = loadall_cart_count($bill['id']);
                            echo '  <tr>
                                      <td>' . $bill['id'] . '</td>
                                      <td>' . $bill['ngaydathang'] . '</td>
                                      <td>' . $countsp . '</td>
                                      <td>' . $bill['total'] . '</td>
                                      <td>' . $ttdh . '</td>                   
                                    </tr>';
                        }
                    }
                    ?>


                </table>
            </div>
        </div>
    </div>

    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>