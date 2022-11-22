<?php 
    // require('models/product.php');

    require_once('models/client.php');

    function hienThiTrangChu() {
        require('views/template/home.php');
    }

    function sanPhamClient() {
        $ds_sp = layDSSanPham();
        require('views/client/shop-right-sidebar.php');
    }

    function chiTietSanPham() {
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
    
    function laySPtheoMaLoai() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $ds_sp = laySPTheoLoai($id);
        }
        include('views/client/shop-right-sidebar.php');
    }
    
    function hoiDap(){
        showHoiDap();
        include('views/client/q_a.php'); 
    }

    function contact(){
        viewContact();
        include('views/client/lien_he.php');
    }
    function pages(){
        showpages();
        include('views/client/pages.php');
    }
    function gioi_thieu(){
        showgioithieu();
        include('views/client/gioithieu.php');
    }
    function formDatLich() {
        if (isset($_GET['id'])  ) {
            $id = $_GET['id'];
            $san_pham = layMotSanPham($id);
        }
        
        include('views/client/dat_lich.php');
    }

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

    function tao_don_xem() {
        them_don_xem() ;
        $don_xem = viewDonXem();
        include('views/view_order/view_order.php');
    }
?>