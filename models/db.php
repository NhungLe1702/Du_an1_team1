<?php

// Định nghĩa ra các tình huống lấy dữ liệu
define('FETCH_ALL', 2);
define('FETCH_ONE', 1);
define('NOT_FETCH', 0);

if(!function_exists('getConnect')) {
    function getConnect() {
        $connect = new PDO(
            'mysql:host=localhost;dbname=Team1_web17309;',
            'root',
            ''
        );
        return $connect;
    }
}

// Nhận vào tham số là câu truy vấn, tham số thứ 2 là cách lấy dũ liệu
function getData($sql, $fetchType) {
    $conn = getConnect();
    $statement = $conn->prepare($sql);
    $statement->execute();

    // Cần biết bên kia muốn lấy dl theo kiểu gì : $fetchType
    switch ($fetchType) {
        case FETCH_ALL:
            return $statement->fetchAll();
        case FETCH_ONE:
            return $statement->fetch();
        default:
            return true;
    }
}

function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = getConnect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
} 

function pdo_execute_get_last_id($sql){
    //$sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = getConnect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $conn->lastInsertId();
    
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
} 