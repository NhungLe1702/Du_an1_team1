<?php


  

   function view_donxem_admin(){
    $sql = " SELECT 
            view_order.id,
            view_order.customer_id,
            customer.name as customer_name,
            product.name as product_name,
            view_order.time,
            view_order.date,
            view_order.status,
            view_order.created_at
        FROM view_order
        join customer on customer.id = view_order.customer_id
        join product on product.id = view_order.product_id
        order by view_order.id desc
    ";
    return getData($sql, FETCH_ALL);
   }

  function cap_nhat_view_order($viewOrderId, $status){
        $sql = "
            UPDATE view_order
            SET
                status = '{$status}'
            WHERE id = '{$viewOrderId}'
        ";
        pdo_execute($sql);
  }

  function getDonXem($id) {
    $sql = " SELECT 
            view_order.id,
            customer.name as customer_name,
            product.name as product_name,
            view_order.time,
            view_order.date,
            view_order.status
        FROM view_order
        join customer on customer.id = view_order.customer_id
        join product on product.id = view_order.product_id
        where view_order.id = '{$id}'
    ";
    return getData($sql, FETCH_ONE);
  }

    function xoaDonXem($id){
        $sql = "DELETE FROM view_order WHERE id = '$id'";
        $xoa_dx = pdo_execute($sql);
    }

    function locDonXem($id) {
        if($id <> 5) {
            $sql = " SELECT 
            view_order.id,
            view_order.customer_id,
            customer.name as customer_name,
            product.name as product_name,
            view_order.time,
            view_order.date,
            view_order.status,
            view_order.created_at
            FROM view_order
            join customer on customer.id = view_order.customer_id
            join product on product.id = view_order.product_id WHERE status = '$id' ";
            
        } else {
            $sql = " SELECT 
            view_order.id,
            view_order.customer_id,
            customer.name as customer_name,
            product.name as product_name,
            view_order.time,
            view_order.date,
            view_order.status,
            view_order.created_at
            FROM view_order
            join customer on customer.id = view_order.customer_id
            join product on product.id = view_order.product_id ";
        }

        return getData($sql, FETCH_ALL);
        
    }

    function hoaDon($id) {
        $sql=" SELECT  
                    view_order.id,
                    customer.email as customer_email,
                    customer.name as customer_name,
                    customer.phone as customer_phone,
                    product.name as product_name,
                    product.price as price
                FROM view_order
                join customer on customer.id = view_order.customer_id
                join product on product.id = view_order.product_id
                where view_order.id = '{$id}'
            
            ";
        return getData($sql, FETCH_ONE);
    }

    function hamthongKeDonXem() {
        $sql =" SELECT DISTINCT status , 
                COUNT(status) as so_luong_don
                FROM view_order GROUP BY  status ";
        $thong_ke_dx = getData($sql, FETCH_ALL);
        return $thong_ke_dx;
    } 
    
    function demthongKeDonXem() {
        $sql =" SELECT COUNT(view_order.id) as tong FROM view_order ";
        $tong_don_xem = getData($sql, FETCH_ALL);
        return  $tong_don_xem;
    }









    function hamthongKeDoanhThu() {
        $sql =" SELECT  product.name as product_name, 
                        view_order.product_id, 
                        product.price as doanh_thu
                FROM product 
                INNER JOIN view_order ON product.id = view_order.product_id 
                WHERE status in (4) 
                GROUP BY product.name, view_order.product_id; ";
        $thong_ke_dt = getData($sql, FETCH_ALL);
        
      
        //  echo '<pre>';
        //  print_r($tong_doanh_thu);
       
          return $thong_ke_dt;
        
    }
    function tongDoanhThu(){
        $sql_tong_doanh_thu = "SELECT SUM(product.price) as tong_doanh_thu 
                               FROM product 
                               JOIN view_order 
                               ON view_order.product_id = product.id 
                               WHERE view_order.status IN (4);";                        
        $tong_doanh_thu = getData($sql_tong_doanh_thu,FETCH_ALL);
        return $tong_doanh_thu;
    }




?>