<style>
    .ds__title {
   
   line-height: 55px;
  
   text-align: center;
}

.ds__title h2 {
   margin-bottom: 0;
}

table {
   background-color: #ffffff;
   width: 100%;
}

@font-face {
   font-family: worksansBold;
   src: url(../font/WorkSans-SemiBold.ttf);
}

.danh__sach {
   width: 1400px;
   margin: 0 auto;
   margin-top: 30px;
}

.content__table thead tr {
   background-color: #2783df;
   font-family: worksansBold;
   color: #ffffff;
}

.content__table {
   border-collapse: collapse;
   box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
   border-radius: 5px 5px 0 0;
}

.content__table tr {
   border-bottom: 1px solid #dddddd;
}

.content__table th, .content__table td {
   padding: 15px 7px;
}

td {
   text-align: center;
}

tbody .mo_ta {
   text-align:justify;
}

img {
   width: 60%;
}

.content__table tbody button {
   padding: 0 10px;
   line-height: 20px;
   border-radius: 10px;
   margin-top: 10px;
}

.content__table tbody tr:last-of-type{
   border-bottom: 2px solid #0066cc;
}



button {
   text-decoration: none;
   line-height: 35px;
   padding: 0 20px;
   border: 1px solid #0066cc;
   border-radius: 35px;
   display: inline-block;
   text-align: center;
   font-size: 14px;
   background-color: #ffffff;
   font-weight: bolder;
}

button a {
   color: #0066cc;
}

button:hover {
   background-color: #0066cc;
   color: white;
}

button:hover a {
   color: white;
}

.button__active {
   padding: 20px;
   text-align: center;
}

.search_product {
   text-align: center;
   margin-bottom: 20px;
}

.search_product input {
   line-height: 30px;
   border-radius: 10px;
   border: 1px solid #0066cc;
   
}

.search_product select {
   padding: 8px 0px;
   border-radius: 10px;
   border: 1px solid #0066cc;
   color: #0066cc;
}

.search_product .btn_submit {
   padding: 0 15px;
   background-color: #ffffff;
   color: #0066cc;
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/template/css/list.css">
    <!-- <style> 
        .search_product {
            text-align: center;
            margin-bottom: 20px;
        }

        .search_product input {
            line-height: 30px;
            border-radius: 10px;
            border: 1px solid #0066cc;
            
        }

        .search_product select {
            padding: 8px 0px;
            border-radius: 10px;
            border: 1px solid #0066cc;
            color: #0066cc;
        }

        .search_product .btn_submit {
            padding: 0 15px;
            background-color: #ffffff;
            color: #0066cc;
        }
    </style> -->
</head>

<body>
    

    <div class="danh__sach">
        <div class="ds__title">
            <h2>Danh sách sản phẩm</h2>
        </div>
        
        <div class="button__active">
            <button><a href="index.php?url=them_san_pham">Thêm mới</a></button>
            
        </div>
        
        <div class="search_product">
            <form class="search_product" action="index.php?url=loc_san_pham_theo_dm" method="post">
                <input type="text" name="category">
                <select name="id_category" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach (layDSSanPham() as $key => $value) { ?>
                        <option value="<?php echo $value["id"] ?>"><?php echo $value["name"] ?></option>
                    <?php } ?>
                </select>
                <input class="btn_submit" type="submit" name="listOk" value="GO">
            </form>
        </div>
        

        <table class="content__table">
            <thead>
                <tr class="title__table">
                   
                    <td>Mã </td>
                    <td>Tên</td>
                    <td>Hình ảnh</td>
                    <td>Đơn giá</td>
                    <td>Giảm giá</td>
                    <td>Nguồn gốc</td>
                    <td>Mô tả</td>
                    <td>năm sản xuất</td>
                    <td>Mã thương hiệu</td>
                    <td>Active</td>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_sp as $key => $value) : ?>
                    <tr>
                        
                        <td><?= $value['id']  ?></td>
                        <td><?= $value['name']  ?></td>
                        <td><img src="views/template/images/san_pham/<?php echo $value['image'] ?>" alt=""></td>
                        <td><?= $value['price']  ?></td>
                        <td><?= $value['sale']  ?></td>
                        <td><?= $value['origin']  ?></td>
                        <td class="description"><?= $value['description']  ?></td>
                        <td><?= $value['year']  ?></td>
                        <td><?= $value['id_category']  ?></td>
                        <td>
                            <button><a href="index.php?url=xoa_san_pham&id=<?= $value['id'] ?>" onclick="return confirm('Bạn có muốn xoá không?')">Xoá</a></button>
                            <button><a href="index.php?url=form_sua_san_pham&id=<?= $value['id'] ?>">Sửa</a></button>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>

        
    </div>

</body>

</html>