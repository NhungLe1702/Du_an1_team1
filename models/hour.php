<?php 
/* 
    function danhSachKhungGio() {
        // $sql = "SELECT * FROM hour";
        $sql = "SELECT h.id, h.id_product, p.name, p.image ,h.hour_start, h.hour_end 
                FROM hour h INNER JOIN product p ON h.id_product = p.id ";
        $dskh = getData($sql, FETCH_ALL);
        return $dskh;
    }

    function themKhungGio() {
        if(isset($_POST['btn_submit'])) {
            $id_product = $_POST['id_product'];
            $hour_start = $_POST['bat_dau'];
            $hour_end = $_POST['ket_thuc'];
            $sql = "INSERT INTO hour(id_product, hour_start, hour_end) 
                    VALUES($id_product, '$hour_start', '$hour_end') ";
            $add = pdo_execute($sql);
            // $thong_bao = 'Thêm thành công';
            
        }
    }
*/

?> 