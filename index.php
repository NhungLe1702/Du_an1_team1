<?php

require('controllers/client.php');


// Chỉ dùng để quản lý đường dẫn và điều hướng đến màn hình phù hợp
$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        hienThiTrangChu();
        break;

    case 'trang_chu':
        hienThiTrangChu();
        break;

    // case 'trang_chu':
    //     hienThiTrangChu();
    //     break;


//nhung update

    default:
        echo 'Đường dẫn không tồn tại';
        break;

}


