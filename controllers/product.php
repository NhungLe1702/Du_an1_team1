<?php
    require('models/product.php');

    function hienThiSanPham()
    {
        $ds_sp = layDSSanPham();
        // $lay_anh = layAnhMoTaAdmin();
        include('views/product/danh_sach.php');
    }

    // function formTaoSanPham()
    // {
    //     $them_sp = themMoiSanPham();
    //     include('views/product/tao_moi.php');
    // }

    function formTaoSanPham(){
        $errors = [];
        if (isset($_POST["btn_save"])) {

            if ($_POST['name'] == "" || is_numeric($_POST['name'])) {
                $errors['name']= 'Thông tin chưa đúng định dạng';
            }

            if(!$_POST['id_category']) {
                $errors['category'] = "Bạn chưa chọn thương hiệu";
            }

            if (!$errors) {
                $them_sp = themMoiSanPham();
                echo ('<script>window.location.href="index.php?url=hien_thi_san_pham"</script>');
            }
            
        }
        include('views/product/tao_moi.php');
    }

    

    function formSuaSanPham() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $lay_mot = layMotSanPham($id);
        }
        include('views/product/chinh_sua.php');
    }

    function suaSanPham() {
        $up = hamSuaSanPham();
    }

    function thongKeSanPham() {
        $tk = hamthongKeSanPham();
        include('views/statistic/san_pham.php');
    }

    function timKiemSanPham() {
        if(isset($_POST['tim_kiem'])) {
            $kw = $_POST['kw'];
            
        } 
        $ds_sp = timKiem($kw);
        include('views/client/shop-right-sidebar.php');
    }

    function locSPtheoMaLoai() {
        if(isset($_POST['listOk'])) {
            $id_category = $_POST['id_category'];
        } 
        $ds_sp = locSPtheoLoai( $id_category);
        include('views/product/danh_sach.php');
    }

    

?>

