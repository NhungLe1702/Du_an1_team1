<?php
    require('models/product.php');

<<<<<<< HEAD
    function hienThiSanPham()
    {
        $ds = layDSSanPham();
        include('views/product/danh_sach.php');
    }

    function formTaoSanPham()
    {
        $them_sp = themMoiSanPham();
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
=======
function hienThiSanPham()
{
    $ds = layDSSanPham();
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
   $up = SualoiSanpham();
}
>>>>>>> b4f7a51ca7d3d21b97ea362f0fded0ab9d901cea

?>

