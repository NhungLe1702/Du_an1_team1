<?php
    include('models/db.php');

    function danhSach() {
        $sql = "SELECT * FROM category";
        $dsdm = getData($sql, FETCH_ALL);
        return $dsdm;
    }

    function xoaDanhMuc($id){
        $sql = "DELETE FROM category WHERE id = '$id'";
        $xoa_sp = pdo_execute($sql);
    }


?>
