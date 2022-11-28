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



?>