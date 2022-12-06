<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style> 
    
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
<div class="page-wrapper " >
<!-- style="margin: 0;" -->
<!-- margin-left:500px; -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
          <div class="button_insert" style="text-align: center">

            <button style="border: none; padding:8px 12px; border-radius: 5px; background-color: #9cd6ee; font-weight: bold;  ">
              <a href="index.php?url=hien_thi_san_pham">Danh sách</a>
            </button>

          </div>
          </div>
        </div>
      </div>
      
      <div class="container-fluid" >
      
      <!-- style="text-align:center; margin-left:500px;" -->

        <div class="row" >
          
            <div class="col-md-6" style="margin: 0 auto">
              <div class="card ">
              
                <form class="form-horizontal" action="index.php?url=them_san_pham" method="POST" enctype="multipart/form-data" >

                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Thêm mới sản phẩm</h4>

                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Tên sản phẩm</label>

                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                          name="name" required
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Hình ảnh</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="file"  name = "img_upload"
                          class="form-control"
                          id="lname" required
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Ảnh mô tả</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="file"  name = "images[]"
                          class="form-control"
                          id="lname"
                          multiple="multiple" required
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Đơn giá</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="number" name = "price"
                          class="form-control"
                          id="lname" required
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Giảm giá</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="number" name = "sale"
                          class="form-control"
                          id="lname" required
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="email1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Nguồn gốc</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text" name = "origin"
                          class="form-control"
                          id="email1" required
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Mô tả</label
                      >
                      <div class="col-sm-9">
                        <textarea  class="form-control"  name="description" id="" cols="78" rows="6"></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Năm sản xuất</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="number" name ="year"
                          class="form-control"
                          id="cono1" required
                        />
                      </div>
                    </div>   

                    <div class="form-group row">
                      <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Thương hiệu</label
                      >
                      <div class="col-sm-9">
                        
                          <select id = "cono1" class="form-control" name="id_category">
                            <option value="">Chọn thương hiệu </option>
                            <?php foreach (danhSachDanhMuc() as $key => $value) { ?>
                                <option value="<?php echo $value["id"] ?>"><?php echo $value["name"] ?></option>
                            <?php } ?>
                          </select>

                      </div>
                    </div>   
                      
                  </div>

                  <div class="border-top">
                    <div class="card-body">
                      <button name="btn_save" type="submit" class="btn btn-primary">
                        Submit
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