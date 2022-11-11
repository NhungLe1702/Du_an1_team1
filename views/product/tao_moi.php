<style>
    

.add {
    width: 1440px;
    margin: 0 auto;
    margin-top: 20px;
    box-shadow: 0px 0px 10px 5px rgb(0, 0, 0, 0.1);
    border-radius: 10px;
    background-color: #ffffff;
}

.add__title {
    background-color: #2783df;
    line-height: 55px;
    border-radius: 10px 10px 0 0;
    margin-bottom: 0;
    
}
.add__title h2 {
    color: white;
    text-align: center;
    
}

.add_link {
    text-align: center;
}

.add_link a,
.form__btn input {
    border: 1px solid #2783df;
    padding: 5px 15px;
    border-radius: 10px;
    color: #0066cc;
    font-weight: bolder;
    background-color: #ffffff;
}

.add_link a:hover,
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
    padding: 40px;
}


</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/template/css/add.css">
</head>

<body>
    <div class="add">
        <div class="add__title">
            <h2>Tạo mới sản phẩm</h2>
        </div>

        <div class="add_link">
            <a class="link" href="index.php?url=ds_san_pham">Danh sách</a>
        </div>

        <form action="index.php?url=them_san_pham" method="POST" enctype="multipart/form-data">

            <div class="form__div">
                <label>Tên hàng hoá</label>
                <input type="text" name="name">
            </div>

            <div class="form__div">
                <label>Đơn giá</label>
                <input type="number" name="don_gia">
            </div>

            <div class="form__div">
                <label>Giảm giá</label>
                <input type="number" name="giam_gia">
            </div>

            <div class="form__div">
                <label>Image</label>
                <input type="file" name="img_upload">
            </div>

            <div class="form__div">
                <label>Ngày nhập</label>
                <input type="date" name="ngay_nhap">
            </div>

            <div class="form__div">
                <label>Mô tả</label>

                <textarea name="mo_ta"></textarea>
            </div>

            <div class="form__div">
                <label>Đặc biệt</label>
                <input type="number" name="dac_biet">
            </div>

            <div class="form__div">
                <label>Số lượt xem</label>
                <input type="number" name="luot_xem">
            </div>

            <div class="form__div">
                <label>Loại</label>
                <select name="ma_loai">
                    <?php foreach (layDSSanPham() as $key => $value) { ?>
                        <option value="<?php echo $value["ma_loai"] ?>"><?php echo $value["ten_loai"] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form__btn">
                <input class="save" type="submit" name="btn_save" value="Save">
                <input type="reset" name="btn_reset" value="Reset">
            </div>

        </form>
    </div>
</body>

</html>