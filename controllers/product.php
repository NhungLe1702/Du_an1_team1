<?php
require('models/product.php');


function hienThiSanPham()
{
    $ds = layDSSanPham();
    include('views/product/danh_sach.php');
}

// function formTaoSanPham()
// {
//     $them_sp = themMoiSanPham();
//     include('views/product/tao_moi.php');
// }

// function formSuaSanPham()
// {
//     if (isset($_GET['id'])) {
//         $id = $_GET['id'];
//         $lay_sp = layMotSanPham($id);
//     } 
//     include('views/product/chinh_sua.php');
// }

// function SuaSanPham()
// {
//     hamSuaSanPham();
//     // include('views/san_pham/danh_sach.php');
// }

// function laySPTheoten() {
//     if (isset($_GET['id'])) {
//         $id = $_GET['id'];
//         $ds_sp = laySPTheoten($id);
//     }
//     include('views/template/home.php');
// }

// function locSPtheoten() {
//     if(isset($_POST['listOk'])) {
//         $kw_ten = $_POST['ten'];
//         $id_ten = $_POST['id_ten'];
//     } 
//     $ds_sp = locSPtheoten($kw_ten, $id_ten);
//     include('views/product/danh_sach.php');
// }



// function timKiemSanPham() {
//     if(isset($_POST['tim_kiem'])) {
//         $kw_sp = $_POST['tu_khoa'];
        
//     } 
//     $ds_sp = timKiem($kw_sp);
//     include('views/template/home.php');
// }


?>

