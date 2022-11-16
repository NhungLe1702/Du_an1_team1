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
              
                <form class="form-horizontal" action="index.php?url=them_khung_gio" method="POST" >
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Thêm mới khung giờ</h4>
                    
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Id sản phẩm</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="number"
                          class="form-control"
                          id="fname"
                          name="id_product"
                          value="<?php if(isset($id)) echo $id?>" 
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Giờ bắt đầu</label
                      >
                      <div class="col-sm-9">
                        <input
                         
                          type="time"
                          class="form-control"
                          id="fname"
                          name="bat_dau"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Giờ kết thúc</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="time"
                          class="form-control"
                          id="fname"
                          name="ket_thuc"
                        />
                      </div>
                    </div>

                  </div>

                  <div class="border-top">
                    <div class="card-body">
                      <button name="btn_submit" type="submit" class="btn btn-primary">
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


