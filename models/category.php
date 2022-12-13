<?php
    // include('models/db.php');

    function danhSachDanhMuc() {
        $sql = "SELECT * FROM category";
        $dsdm = getData($sql, FETCH_ALL);
        return $dsdm;
    }

    function xoaDanhMuc($id){
        $sql = "DELETE FROM category WHERE id = '$id'";
        $xoa_sp = pdo_execute($sql);
    }

    function themDanhMuc() {
        $error = [];
        if(isset($_POST['btn_submit'])) {
            $name = $_POST['name'];
            
            if(empty($name)) {
                $error['name'] = "Vui lòng nhập tên thương hiệu";
            }

            if(!$error) {
                $sql = "INSERT INTO category(name) VALUES('$name') ";
                $add = pdo_execute($sql);
                echo ('<script>window.location.href="index.php?url=danh_muc"</script>');
            }
        }   
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
        echo ('<script>window.location.href="index.php?url=danh_muc"</script>');
    }
?>
