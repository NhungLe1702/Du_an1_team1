<?php
   require_once('models/view_order_admin.php');

   function don_xem_admin(){
    if (isset($_POST['update_don_xem'])) {
        $viewOrderId = $_POST['view_order_id'];
        $status = $_POST['status'];
        cap_nhat_view_order($viewOrderId, $status);
    }
      $don_xem = view_donxem_admin();
     include('views/view_order/view_order_admin.php');
   }

   function update_view_order(){
        $view_order_id = $_GET['id'];
        $don_xem = getDonXem($view_order_id);
        include('views/view_order/update_view_order.php');
   }

   function getStatus($status) {
    $listStatus = [
      '0' => 'Chưa xem',
      '1' => 'Đã xem',
      '2' => 'Đã đặt cọc',
    ];

    return $listStatus[$status];
   }

?>