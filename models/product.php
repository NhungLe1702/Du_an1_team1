<?php
// Model này đại diện cho bảng san_pham trong DB và sẽ thực hiện các hàm
// tương tác với bảng đó

// Lấy hàm getData từ db
    require_once('models/db.php');

    function layDSSanPham() 
    {
        $sql = "SELECT * FROM product ORDER BY id DESC ";
        $product = getData($sql, FETCH_ALL);
        return $product;
    }

    function loadSPTrangChu() {
        $sql = "SELECT * FROM product ORDER BY id DESC LIMIT 9 ";
        $product = getData($sql, FETCH_ALL);
        return $product;
    }

    // Thêm mới
    function themMoiSanPham()
    {
        $error = [];
        if (isset($_POST["btn_save"])) {
            $ten = $_POST['name'];
            $img = $_FILES['img_upload']['name'];
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $origin = $_POST['origin'];
            $description = $_POST['description'];
            $year = $_POST['year'];
            $id_category = $_POST['id_category'];

            if (isset($_FILES["img_upload"])) {
                $target_dir = "views/template/images/product/";

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
                $sql = "INSERT INTO product(ten, img, price, sale, origin, description, year, id_category) 
                        VALUES('$ten', $img, $price, '$sale', '$origin', '$description', $year, $id_category)";
                $add_sp = pdo_execute($sql);
                $thong_bao = 'Thêm thành công';
            }
        }
        if (isset($thong_bao))  echo $thong_bao;
    }

    function xoaSanPham($id)
    {
        $sql = "DELETE FROM product WHERE id = '$id'";
        $xoa_sp = pdo_execute($sql);
    }

    function layMotSanPham($id)
    {
        $sql = "SELECT * FROM product WHERE id = '$id'";
        $lay_mot = getData($sql, FETCH_ONE);
        return $lay_mot;
    }

    function laySanPhamCungten($id, $id_ten)
    {
        $sql = "SELECT * FROM product WHERE id <> '$id' AND id_category = '$id_ten' LIMIT 4";
        $lay_cung_ten = getData($sql, FETCH_ALL);
        return $lay_cung_ten;
    }

    function hamSuaSanPham()
    {
        $error = [];
        if (isset($_POST["btn_save"])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $img = $_FILES['img_upload']['name'];
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $origin = $_POST['origin'];
            $description = $_POST['description'];
            $year = $_POST['year'];
            $id_category = $_POST['id_category'];

            if (isset($_FILES["img_upload"])) {
                $target_dir = "views/template/images/product/";

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
                $sql = "UPDATE product SET name = '$name', img = '$img',price = '$price' ,sale = '$sale' , description = '$description', year = '$year', id_category = '$id_category', id = '$id' WHERE id_category = '$id' ";
                $edit_sp = pdo_execute($sql);
                $thong_bao = 'Cập nhật thành công';
            }
        }
        if (isset($thong_bao))  echo $thong_bao;
    }

    function laySPTheoten($id) {
        $sql = "SELECT * FROM product WHERE id_category = '$id'";
        $product = getData($sql, FETCH_ALL);
        return $product;
    }

    function locSPtheoten($kw_ten, $id_ten) {

        $sql = "SELECT * FROM product WHERE 1";
        if($kw_ten != "") {
            $sql.= " AND name LIKE '%".$kw_ten."%'";
        }
        if($id_ten > 0) {
            $sql= "SELECT * FROM product WHERE id_category = '$id_ten'";
        }

        // if($kw_loai != "") {
        //     $sql= "SELECT * FROM hang_hoa WHERE ten_hh LIKE '$kw_loai'";
        // }
        // if($id_loai > 0) {
        //     $sql= "SELECT * FROM hang_hoa WHERE ma_loai = '$id_loai'";
        // }

        $product = getData($sql, FETCH_ALL);
        return $product;
    }

    function timKiem($kw_sp) {
        $sql = "SELECT * FROM product WHERE 1";
        if($kw_sp != "") {
            $sql.= " AND name LIKE '%".$kw_sp."%'";
        }
        $product = getData($sql, FETCH_ALL);
        return $product;
    }
