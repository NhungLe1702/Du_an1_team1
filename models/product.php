<?php 
// Lấy hàm getData từ db
    require_once('models/db.php');

    function layDSSanPham() 
    {
        $sql = "SELECT * FROM product ORDER BY id DESC ";
        $product = getData($sql, FETCH_ALL);
        return $product;
    }
    //themsp
    function themMoiSanPham()
{
    $error = [];
    if (isset($_POST["btn_save"])) {
        $name = $_POST['name'];
        $image = $_FILES['img_upload']['name'];
        $price = $_POST['price'];
        $sale = $_POST['sale'];
        $origin = $_POST['origin'];
        $description = $_POST['description'];
        $year = $_POST['year'];
        $id_category = $_POST['id_category'];

        if (isset($_FILES["img_upload"])) {
            $target_dir = "views/template/image/product";

            $file_name = $_FILES["img_upload"]["name"];
            $target_file = $target_dir . $file_name;

            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
            $arr_type = ["jpg", "png", "jpeg", "gif"];
            $allowUpload = true;

            if (!in_array($file_type, $arr_type)) {
                $error["type_error"] = "Không được upload file khác định dạng jpg, jpeg, png, gif";
                $allowUpload = false;
            }

            if ($allowUpload == true) {
                move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file);
            }
        }

        if (!$error) {
            $sql = "INSERT INTO product(name, image, price, sale, origin, description, year, id_category) 
                    VALUES('$name', '$image', $price, $sale, '$origin', '$description', '$year', $id_category)";
            $add_sp = pdo_execute($sql);
            $thong_bao = 'Thêm thành công';
        }
      
    }
    if (isset($thong_bao))  echo $thong_bao;
}


  
