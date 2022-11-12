<style>
    .add {
    width: 1400px;
    margin: 0 auto;
    margin-top: 20px;
    box-shadow: 0px 0px 10px 5px rgb(0, 0, 0, 0.1);
    border-radius: 10px;
    background-color: #ffffff;
}

.add__title {
    background-color: #729ccf;
    line-height: 55px;
    border-radius: 10px 10px 0 0;
    text-align: center;
}

.add__link {
    text-align: center;
}

.add__link a,
.form__btn input {
    border: 1px solid #0066cc;
    padding: 5px 15px;
    border-radius: 10px;
    color: #0066cc;
    font-weight: bolder;
    background-color: #ffffff;
}

.add__link a:hover,
.form__btn input:hover {
    background-color: #0066cc;
    color: #ffffff;
}

form {
    width: 900px;
    margin: 0 auto;
    font-size: 17px;
}

.form__div {
    display: flex;
    margin-top: 20px;
}

.form__div label {
    flex: 1;
}

.form__div input,
.form__div select,
.form__div textarea {
    flex: 2;
    height: 35px;
}

.form__btn {
    text-align: center;
    padding: 20px;
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/template/css/edit.css">


</head>

<body>
    <div class="add">
        <div class="add__title">
            <h2>Sửa sản phẩm</h2>
        </div>

        <div class="add__link">
            <a class="link" href="index.php?url=ds_san_pham">Danh sách</a>
        </div>

        <form action="index.php?url=update_san_pham" method="POST" enctype="multipart/form-data">

            <div class="form__div">
                <label>Mã sản phẩm</label>
                <input type="text" value="<?php echo $lay_sp['id']; ?>" name="id">
            </div>

            <!-- Nếu xoá &id = trên đường dẫn thì form sẽ có lỗi nên sử dụng toán tử 3 ngôi để xét có tồn tại mới echo -->
            <!-- echo isset($lay_sp['ma_hh']) ?$lay_sp['ma_hh'] :"" ; -->

            <div class="form__div">
                <label>Tên hàng hoá</label>
                <input type="text" value="<?php echo $lay_sp['name']; ?>" name="name">
            </div>

            <div class="form_div" style="display:flex">
                <label style="flex:1">Image</label>
                <div class="img">
                    <img style="width: 30%; flex:2;" src="views/template/images/san_pham/<?php echo $lay_sp['imagr'] ?>">
                </div>
            </div>
            <div class="form__div">
                <label>Image</label>
                <input type="file" name="img_upload">
            </div>
            <div class="form__div">
                <label>Đơn giá</label>
                <input type="number" value="<?php echo $lay_sp['price']; ?>" name="price">
            </div>

            <div class="form__div">
                <label>Giảm giá</label>
                <input type="number" value="<?php echo $lay_sp['sale']; ?>" name="sale">
            </div>

            <div class="form__div">
                <label>Nguồn gốc</label>
                <input type="text" value="<?php echo $lay_sp['origin']; ?>" name="orgin">
            </div>

            <div class="form__div">
                <label>description</label>
                <input type="text" value="<?php echo $lay_sp['description']; ?>" name="description">
            </div>

            <div class="form__div">
                <label>year</label>
                <input type="date" value="<?php echo $lay_sp['year']; ?>" name="year">
            </div>

            <div class="form__div">
                <label>category</label>
                <select name="id">
                    <?php foreach (layDSSanPham() as $key => $value) { ?>
                        <option value="<?php echo $value["id"] ?>" <?php echo ($value["id"] == $lay_sp['id']) ? 'selected' : "" ?>>
                            <?php echo $value["name"] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form__btn">
                <input type="hidden" name="id" value="<?php echo $lay_sp['id'] ?>">
                <input class="save" type="submit" name="btn_save" value="Edit">
                <!-- <input type="reset" name="btn_reset" value="Reset"> -->
            </div>

        </form>
    </div>
</body>

</html>