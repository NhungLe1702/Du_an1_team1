<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style> 
    .form-horizontal{
      flex: 1;
    }
  </style>
  <link
      rel="stylesheet"
      type="text/css"
      href="views/template/css/assets/extra-libs/multicheck/multicheck.css"
    />
    <link
      href="views/template/css/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
      rel="stylesheet"
    />
    <link href="views/template/css/dist/css/style.min.css" rel="stylesheet" />
</head>
<body>
<div class="page-wrapper" style="margin: 0;">
      
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
          <div class="button_insert">

            <button style="border: none; padding:8px 12px; border-radius: 5px; background-color: #9cd6ee; font-weight: bold; ">
              <a href="index.php?url=san_pham">Danh sách</a>
            </button>

          </div>
          </div>
        </div>
      </div>
      
      <div class="container-fluid">
        
        <div class="row" >
          
            <div class="col-md-6" style="margin: 0 auto;">
              <div class="card"  >
              
                <form class="form-horizontal" action="index.php?url=sua_san_pham" method="POST">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Chỉnh sửa sản phẩm</h4>
                    <input type="hidden" name="id" value="<?= $lay_mot['id'] ?>">
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label" 
                        >ID</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                          disabled
                          value="<?= $lay_mot['id'];?>" 
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label" 
                        >Tên</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                          name="name"
                          value="<?= $lay_mot['name'];?>"
                        />
                      </div>
                    </div>
                    

                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label" 
                        >Hình ảnh</label
                      >
                      <div class="col-sm-9">
                        
                        <img name="img_upload" src="views/template/image/product/<?= $lay_mot['image'] ?>" alt="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label" 
                        >Đơn giá</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                          name="price"
                          value="<?= $lay_mot['price']?>"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label" 
                        >Giảm giá</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                          name="sale"
                          value="<?= $lay_mot['sale']?>"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label" 
                        >Nguồn gốc</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                          name="origin"
                          value="<?= $lay_mot['origin']?>"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label" 
                        >Mô tả</label
                      >
                      <div class="col-sm-9">
                        <textarea  class="form-control" name="description" id="" cols="78" rows="4" ><?= $lay_mot['description']?></textarea>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label" 
                        >Năm sản xuất</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="number"
                          class="form-control"
                          id="fname"
                          name="year"
                          value="<?= $lay_mot['year']?>"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label" 
                        >Thương hiệu</label
                      >
                      <div class="col-sm-9">
                        <select class="form-control" name="id_category">
                            <?php foreach (danhSachDanhMuc() as $key => $value) { ?>
                                <option value="<?php echo $value["id"] ?>" <?php echo ($value["id"] == $lay_mot['id_category']) ? 'selected' : "" ?>>
                                    <?php echo $value["name"] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                  </div>
                  <div class="border-top">
                    <div class="card-body">
                      <button name="btn_update" type="submit" value="<?php echo $lay_sp['id'] ?>" class="btn btn-primary">
                        Update
                      </button>
                    </div>
                  </div>
                </form>
              
              </div>
              
            </div>
          
          
        </div>
        
      </div>
      
    </div>
</body>
</html>