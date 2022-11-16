<?php 
    // require('models/product.php');

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
            $lay_sp = layMotSanPham($id);
            $laysp_cung_loai = laySanPhamCungLoai($id, $id_category);
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
?>