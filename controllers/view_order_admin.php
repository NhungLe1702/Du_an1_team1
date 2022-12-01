<?php
require_once('models/view_order_admin.php');

function don_xem_admin()
{
  if (isset($_POST['update_don_xem'])) {
    $viewOrderId = $_POST['view_order_id'];
    $status = $_POST['status'];
    // $customer = 
    // select * from customer where id in (select customer_id from view_order where id = $viewOrderId)
    // select * from product where id in (select product_id from view_order where id = $viewOrderId)
    // if ($status == 2) {
    //   $product_name = $product['name'];
    //   $email = $customer['email'];
    //   $name = $customer['name'];
    //   $title = 'Cập nhật trạng thái đơn hàng thành công';
    //   $content = "Xin chào $name, trạng thái đơn hàng $viewOrderId của bạn đã được cập nhật thành đã đặt cọc.";
    //   $content .= "
    //     Thông tin đơn hàng: Tên sản phẩm, Tên khách hàng, Giá
    //   ";
    //   $content .= "Vui lòng kiểm tra kỹ lại thông tin đơn hàng, nếu có sai sót vui lòng liên hệ bộ phận hỗ trợ";
    //   sendMail($email, $name, $title, $content);
    // }
    cap_nhat_view_order($viewOrderId, $status);
    if ($status == 4) {
      $hoa_don = hoaDon($viewOrderId);
      // echo '<pre>';
      // print_r($hoa_don);
      // die();
      $bill = '
          <div id="DivIdToPrint">    
            <table cellpadding="0" cellspacing="0">
            <table style="border:0;width:100%;">
            <tr><td colspan="2" align="center"><b>DOTBIKE</b></td></tr>	
            <tr><td colspan="2" align="center">Phường Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</td></tr>
            <tr><td colspan="2" align="center"><b>Liên hệ:</b> +91 90994 95757</td></tr>
            <tr><td><b>Tên Khách hàng:</b> ' . $hoa_don['customer_name'] . ' </td></tr>
            <tr><td><b>Số điện thoại:</b> ' . $hoa_don['customer_phone'] . ' </td></tr>
            <tr><td colspan="2" align="center"><b>Hoá đơn</b></td></tr>
            <tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
                <td>
                   Sản phẩm
                </td>
                <td align="right">
                    Giá
                </td>
            </tr>
            <tr class="itemrows">
                <td>
                    <b>' . $hoa_don['product_name'] . '</b>
                </td>
                <td align="right">
                    ' . number_format($hoa_don['price']) . '
                </td>
            </tr>
            <tr class="total">
                <td></td>
                <td align="right">
                <b>Tổng thanh toán :&nbsp;' . number_format($hoa_don['price']) . '</b>
                </td>
            </tr>
            <tr><td colspan="2" align="center">Thank You ! Visit Again</td></tr>
            </table>
        </table>  
    </div>
          ';
          $title = 'Mua xe thành công!';
          sendMail($hoa_don['customer_email'], $hoa_don['customer_name'], $title, $bill);
          echo '
          <script>
            alert("Gửi hóa đơn thành công!");
          </script>';
    }
  }
  $don_xem = view_donxem_admin();
  // echo "<pre>";
  // echo print_r($don_xem);
  // die();
  include('views/view_order/view_order_admin.php');
}

function update_view_order()
{
  $view_order_id = $_GET['id'];
  $don_xem = getDonXem($view_order_id);
  include('views/view_order/update_view_order.php');
}

//  function getStatuss($status) {
//   $listStatus = [
//     '0' => 'Chưa xem',
//     '1' => 'Đã xem',
//     '2' => 'Đã đặt cọc',
//   ];
//   return $listStatus[$status];
//  }

function getStatus($status)
{
  if ($status == 0) {
    // Chưa xem là màu xanh
    return ['Chưa xem', '#accf2db8'];
  }

  if ($status == 1) {
    // Đã xem là màu vàng
    return ['Đã xem', '#fefe34b0'];
  }

  if ($status == 2) {
    // Đã đặt cọc là màu đỏ
    return ['Đã đặt cọc', '#f26a649e'];
  }

  if ($status == 3) {
    // Đã đặt cọc là màu đỏ
    return ['Đã Hủy', '#FF0000'];
  }
  if ($status == 4) {
    // Đã đặt cọc là màu đỏ
    return ['Đã Mua', '#00BFFF'];
  }
}

function locDonXemTheoStatus()
{
  if (isset($_POST['listOk'])) {
    $id = $_POST['id_status'];
  }
  $don_xem = locDonXem($id);
  include('views/view_order/view_order_admin.php');
}

function inHoaDon()
{
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hoa_don = hoaDon($id);
  }
  include('views/view_order/bill.php');
}

function thongKeDonXem() {
  $tk = hamthongKeDonXem();
  $tong_don_xem =  demthongKeDonXem();
  include('views/statistic/don_xem.php');
}

function thongKeDoanhThu() {
  $tk = hamthongKeDoanhThu();
  $tong_doanh_thu =  tongDoanhThu();
  include('views/statistic/doanh_thu.php');
}

