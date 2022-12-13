<?php
// require('models/product.php');

require_once('models/client.php');
require_once('models/customer.php');

function hienThiTrangChu()
{
    require('views/template/home.php');
}

function sanPhamClient()
{
    $ds_sp = layDSSanPham();
    require('views/client/shop-right-sidebar.php');
}

function chiTietSanPham()
{
    if (isset($_POST['dat_lich'])) {
        $hasError = false;
        $errors = [];
        $date = $_POST['date'];
        $time = $_POST['time'];

        $thoiGianDatLichTs = strtotime($date . ' ' . $time);
        $thoiGianHienTaiTs = time();
        if ($thoiGianDatLichTs < $thoiGianHienTaiTs) {
            $hasError = true;
            $errors['date_time'][] = 'Thời gian xem không được bé hơn thời gian hiện tại';
          
        }
        if ($_POST['name'] == "" || is_numeric($_POST['name'])) {
            $hasError = true;
            echo "
                <script> alert('Thông tin chưa đúng định dạng') </script>
                ";
        }
        if (!$hasError) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $product_id = $_POST['product_id'];
            $time = $_POST['time'];
            $date = $_POST['date'];
            $customer = find_user_by_email($email);
            if (empty($customer)) {
                $data = [
                    'name' => $name,
                    'address' => $address,
                    'phone' => $phone,
                    'email' => $email,
                ];
                $customer_id = tao_customer($data);
            } else {
                $customer_id = $customer['id'];
            }
            them_don_xem($customer_id, $product_id, $time, $date);
            $title = "Đặt lịch thành công";
            $content = "
            <h2>Xin chào {$name}</h2>
            <p>Lịch xem của bạn đã được khởi tạo thành công trên hệ thống.</p>
            <p>Thời gian: {$time} - {$date}</p>
            <p>Xin cảm ơn bạn đã đặt lịch!</p>
            ";
            sendMail($email, $name, $title, $content);
            echo "
                <script>
                    alert('Đặt lịch thành công, vui lòng kiểm tra email');
                </script>
            ";
        } else {
            $_SESSION['errors'] = $errors;
        }
    }
    if (isset($_GET['id'])) {

        $id = $_GET['id'];
        $id_category = $_GET['id_category'];
        $lay_img = layAnhMoTa($id);

        $lay_sp = layMotSanPham($id);
        $laysp_cung_loai = laySanPhamCungLoai($id, $id_category);
        $lay_ten_danh_muc = layTenDanhMuc($id_category);
    }
    require('views/client/single-product.php');
}

function laySPtheoMaLoai()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $ds_sp = laySPTheoLoai($id);
    }
    include('views/client/shop-right-sidebar.php');
}

function hoiDap()
{
    showHoiDap();
    include('views/client/q_a.php');
}

function contact()
{
    viewContact();
    include('views/client/lien_he.php');
}
function pages()
{
    showpages();
    include('views/client/pages.php');
}
function gioi_thieu()
{
    showgioithieu();
    include('views/client/gioithieu.php');
}
function formDatLich()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $san_pham = layMotSanPham($id);
    }

    include('views/client/dat_lich.php');
}

    // function xuLyDatLich() {
    //     if (isset($_POST['dat_lich'])) {
    //         $name = $_POST['name'];
    //         $address = $_POST['address'];
    //         $phone = $_POST['phone'];
    //         $email = $_POST['email'];
    //         $product_id = $_POST['product_id'];
    //         $time = $_POST['time'];
    //         $date = $_POST['date'];
    //         $customer = find_user_by_email($email);
    //         if (empty($customer)) {
    //             $data = [
    //                 'name' => $name,
    //                 'address' => $address,
    //                 'phone' => $phone,
    //                 'email' => $email,
    //             ];
    //             $customer_id = tao_customer($data);
    //         } else {
    //             $customer_id = $customer['id'];
    //         }
    //         them_don_xem($customer_id, $product_id, $time, $date);
    //     }
    // }

    // function tao_don_xem() {
    //     if (isset($_POST['datlich'])) {
    //         $customer_id = $_POST['customer_id'];
    //         $product_id = $_POST['product_id'];
    //         $time = $_POST['time'];
    //         $date = $_POST['date'];
    //         them_don_xem($customer_id, $product_id, $time, $date);
    //     }
    //     $customer_id = $_SESSION['user']['id'];
    //     $don_xem = viewDonXem($customer_id);
    //     include('views/view_order/view_order.php');
    // }

    // function tao_don_xem() {
    //     them_don_xem() ;
    //     $don_xem = viewDonXem();
    //     include('views/view_order/view_order.php');
    // }
