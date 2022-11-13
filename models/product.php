<?php 
// Lấy hàm getData từ db
    require_once('models/db.php');

    function layDSSanPham() 
    {
        $sql = "SELECT * FROM product ORDER BY id DESC ";
        $product = getData($sql, FETCH_ALL);
        return $product;
    }

    
?>