<?php 
// Lấy hàm getData từ db
    // require_once('models/db.php');

    function layDSSanPham() {
        $sql = " SELECT * FROM product
        WHERE product.id NOT IN (SELECT DISTINCT view_order.product_id FROM view_order WHERE view_order.status IN (2, 4))
        ORDER BY id DESC ";
        $product = getData($sql, FETCH_ALL);
        return $product;
    }

    function layAnhMoTaAdmin() {
        $sql = "SELECT image_product.image 
                FROM image_product JOIN product 
                                   ON image_product.id_product = product.id";
        $imgMT = getData($sql, FETCH_ALL);
        return $imgMT;
    }
    
    //themsp
    function themMoiSanPham(){
        $error = [];
        // if (isset($_POST["btn_save"])) {
            $name = $_POST['name'];
            $image = $_FILES['img_upload']['name'];
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $origin = $_POST['origin'];
            $description = $_POST['description'];
            $year = $_POST['year'];
            $id_category = $_POST['id_category'];

            if(!$id_category) {
                $error['category'] = "Bạn chưa chọn thương hiệu";
            }

            if (isset($_FILES["img_upload"])) {
                $target_dir = "views/template/image/product/";

                $file_name = $_FILES["img_upload"]["name"];
                $target_file = $target_dir . $file_name;

                $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
                $arr_type = ["jpg", "png", "jpeg", "gif"];

                $allowUpload = true;

                if ($allowUpload == true) {
                    move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file);
                }
            }

            if (isset($_FILES["images"])) {
                $images  = $_FILES['images'];
                $images_name = $images["name"];

                $target_dir = "views/template/image/Anh_phu/";
               
                foreach($images_name as $key => $value) {
                    move_uploaded_file($_FILES["images"]["tmp_name"][$key], $target_dir.$value);
                }
            }

            if (!$error) {
                
                $sql = "INSERT INTO product(name, image, price, sale, origin, description, year, id_category) 
                        VALUES('$name', '$image', $price, $sale, '$origin', '$description', '$year', $id_category)";
                $last_id = pdo_execute_get_last_id($sql) ;
            
                foreach($images_name as $key => $value) {
                    $sql = "INSERT INTO image_product(id_product, image) VALUES($last_id, '$value')";
                    $add_img = pdo_execute($sql);
                }
                echo ('<script>window.location.href="index.php?url=hien_thi_san_pham"</script>');
            }
        // }
    }
    function xoaSanPham($id){
        $sql = "DELETE FROM product WHERE id = '$id'";
        $xoa_sp = pdo_execute($sql);
    }

    function layMotSanPham($id) {
        $sql = "SELECT * FROM product WHERE id = '$id'";
        $lm = getData($sql, FETCH_ONE);
        return $lm;
    }

    function hamSuaSanPham() {
        $error = [];
        if (isset($_POST["btn_update"])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            // $image = $_FILES['img_upload']['name'];
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $origin = $_POST['origin'];
            $description = $_POST['description'];
            $year = $_POST['year'];
            $id_category = $_POST['id_category'];

            if (!$error) {
                
                $sql = "UPDATE product SET
                     name = '$name', 
                     price = $price, 
                     sale = $sale, 
                     origin = '$origin', 
                     description = '$description', 
                     year = '$year', 
                     id_category = $id_category 
                    WHERE id = $id";
                $update_sp = pdo_execute($sql);
            }
            echo ('<script>window.location.href="index.php?url=hien_thi_san_pham"</script>');
        
        }
       
    }

    function laySanPhamCungLoai($id, $id_category){
        $sql = "SELECT * FROM product WHERE id <> '$id' AND id_category = '$id_category' LIMIT 3";
        $lay_cung_loai = getData($sql, FETCH_ALL);
        return $lay_cung_loai;
    }

    function laySPTheoLoai($id) {
        $sql = "SELECT * FROM product WHERE id_category = '$id'";
        $product = getData($sql, FETCH_ALL);
        return $product;
    }

    function layTenDanhMuc($id_category) {
        $sql = "SELECT name FROM category WHERE id = '$id_category'";
        $cname = getData($sql, FETCH_ONE);
        return $cname;
    }

    function hamthongKeSanPham() {
        $sql = " SELECT ca.id as id_category , 
                        ca.name as name, 
                        COUNT(pr.id) as so_luong, 
                        MIN(pr.price - pr.sale) gia_min, 
                        MAX(pr.price - pr.sale) gia_max, 
                        AVG(pr.price -  pr.sale) gia_avg
        FROM product pr
        JOIN category ca ON ca.id=pr.id_category
        GROUP BY ca.id, ca.name ";
        $thong_ke_sp = getData($sql, FETCH_ALL);
        return $thong_ke_sp;
    }
    function timKiem($kw) {
        $sql = "SELECT * FROM product WHERE 1";
        if($kw != "") {
            $sql.= " AND name LIKE '%".$kw."%'";
        }
        $product = getData($sql, FETCH_ALL);
        return $product;
    }

    function locSPtheoLoai( $id_category) {
        $sql = "SELECT * FROM product ";
        if($id_category > 0) {
            $sql= "SELECT * FROM product WHERE id_category = '$id_category'";
        }
        $product = getData($sql, FETCH_ALL);
        return $product;
    }

    function layAnhMoTa($id) {
        $sql = "SELECT * FROM image_product WHERE id_product = '$id'";
        $imgMT = getData($sql, FETCH_ALL);
        return $imgMT;
    }

?>
