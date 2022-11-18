<?php
    // include_once('models/db.php');
    

    function showHoiDap(){
    
    }

    function viewContact(){
    
    }

    // function them_don_xem($customer_id, $product_id, $time, $date) {
    //     $sql = "
    //         INSERT INTO view_order (customer_id, product_id, time, date)
    //         VALUES ('$customer_id', '$product_id', '$time', '$date')
    //         ";
    //         pdo_execute($sql);
    // }

    function them_don_xem() {
        if (isset($_POST['datlich'])) {
            $customer_id = $_POST['customer_id'];
            $product_id = $_POST['product_id'];
            $time = $_POST['time'];
            $date = $_POST['date'];
            $sql = "
                    INSERT INTO view_order (customer_id, product_id, time, date)
                    VALUES ('$customer_id', '$product_id', '$time', '$date')
                "; 
            $add = pdo_execute($sql);    
                 
        }
    }

    function viewDonXem() {
        $customer_id = $_SESSION['user']['id'];
        $sql = "
                 SELECT 
                     view_order.id,
                     customer.name as customer_name,
                     product.name as product_name,
                     view_order.time,
                     view_order.date,
                     view_order.status,
                     view_order.created_at
                 FROM view_order
                 join customer on customer.id = view_order.customer_id
                 join product on product.id = view_order.product_id
                 WHERE customer_id = '{$customer_id}'
                 order by view_order.id desc
             ";
        $view = getData($sql, FETCH_ALL);     
            return $view;
    }

    // function viewDonXem($customer_id){
    //     $sql = "
    //         SELECT 
    //             view_order.id,
    //             customer.name as customer_name,
    //             product.name as product_name,
    //             view_order.time,
    //             view_order.date,
    //             view_order.status,
    //             view_order.created_at
    //         FROM view_order
    //         join customer on customer.id = view_order.customer_id
    //         join product on product.id = view_order.product_id
    //         WHERE customer_id = '{$customer_id}'
    //         order by view_order.id desc
    //     ";
    //     return getData($sql, FETCH_ALL);
    // }


?>