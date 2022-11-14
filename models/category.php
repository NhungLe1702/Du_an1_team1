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

    function themDanhMuc() {
        if(isset($_POST['btn_submit'])) {
            $name = $_POST['name'];
            $sql = "INSERT INTO category(name) VALUES('$name') ";
            $add = pdo_execute($sql);
            // $thong_bao = 'Thêm thành công';
            
        }
        
        // if (isset($thong_bao))  echo $thong_bao;
    }

    function layMotDanhMuc($id) {
        $sql = "SELECT * FROM category WHERE id = '$id' ";
        $lm = getData($sql,FETCH_ONE );
        return $lm;
    }

    function hamSuaDanhMuc() {
        if(isset($_POST['btn_submit'])) {
            $id = $_POST["id"];
            $name = $_POST["name"];
           
            $sql = "UPDATE category SET name = '$name' WHERE id = '$id' ";
            $update = pdo_execute($sql);
            $thong_bao = 'Cập nhật thành công';
        }
        if (isset($thong_bao))  echo $thong_bao;
    }
?>
