<?php
require('models/product.php');

function hienThiTrangChu()
{
    $ds_sp = loadSPTrangChu();
    require('views/template/home.php');
}
function hienThiSanPham()
{
    $ds_sp = layDSSanPham();
    include('views/product/danh_sach.php');
}

function formTaoSanPham()
{
    $them_sp = themMoiSanPham();
    include('views/product/tao_moi.php');
}

function formSuaSanPham()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $lay_sp = layMotSanPham($id);
    } 
    include('views/product/chinh_sua.php');
}

function SuaSanPham()
{
    hamSuaSanPham();
    // include('views/san_pham/danh_sach.php');
}

function laySPtheoMaLoai() {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $ds_sp = laySPTheoLoai($id);
    }
    include('views/template/home.php');
}

function locSPtheoMaLoai() {
    if(isset($_POST['listOk'])) {
        $kw_loai = $_POST['loai'];
        $id_loai = $_POST['id_loai'];
    } 
    $ds_sp = locSPtheoLoai($kw_loai, $id_loai);
    include('views/product/danh_sach.php');
}



function timKiemSanPham() {
    if(isset($_POST['tim_kiem'])) {
        $kw_sp = $_POST['tu_khoa'];
        
    } 
    $ds_sp = timKiem($kw_sp);
    include('views/template/home.php');
}




