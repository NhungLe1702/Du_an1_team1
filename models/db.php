<?php

// Định nghĩa ra các tình huống lấy dữ liệu
define('FETCH_ALL', 2);
define('FETCH_ONE', 1);
define('NOT_FETCH', 0);

function getConnect() {
    $connect = new PDO(
<<<<<<< HEAD
        'mysql:host=localhost;dbname=Team1_web17309;',
        'nhunglt',
        '123456'
=======

        'mysql:host=localhost;dbname=team1_web17309;',
        'root',
        ''

>>>>>>> 2537fc155ff23853e5d87cf7aca4a1c48912e46f
    );
    return $connect;
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
