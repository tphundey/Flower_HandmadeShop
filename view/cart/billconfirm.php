<div class="row">
    <div class="row mb">
        <div class="boxtrai mr">

            <div class="" style="text-align: center;">
                <h2>Cảm ơn quý khách đã đặt hàng</h2>
            </div>
            <?php
            if (isset($bill) && (is_array($bill))) {
                extract($bill);
            }
            ?>

            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
                <div class="row boxcontent billform" style="text-align: center;">
                    <li>Mã đơn hàng: <?= $bill['id']; ?> </li>
                    <li> Ngày đặt hàng: <?= $bill['ngaydathang']; ?></li>
                    <li> Tổng đơn hàng: <?= $bill['total']; ?></li>
                    <li> Phương thức thanh toán <?= $bill['bill_pttt']; ?></li>
                </div>
            </div>

            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent billform">
                    <table>
                        <tr>
                            <td></td>
                            <td>Người đặt hàng: <?= $bill['bill_name']; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Địa chỉ: <?= $bill['bill_address']; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Email: <?= $bill['bill_email']; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Số điện thoại: <?= $bill['bill_tel']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>


            <div class="row mb">
                <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
                <div class="row boxcontent cart">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php
                        bill_chi_tiet($billct);

                        ?>
                    </table>
                </div>
            </div>



        </div>
        <div class="boxphai">
    <?php include "view/boxright.php"; ?>
</div>
    </div>
</div>
