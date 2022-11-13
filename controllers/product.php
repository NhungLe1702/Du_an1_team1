<?php
require('models/product.php');

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

?>

