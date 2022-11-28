<?php
  $status = [
      '0' => 'Chưa xem',
      '1' => 'Đã xem',
      '2' => 'Đã đặt cọc',
      '3' => 'Đã hủy đơn',
      '4' => 'Đã mua'
  ];
?>
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

            <!-- <button style="border: none; padding:8px 12px; border-radius: 5px; background-color: #9cd6ee; font-weight: bold;  ">
              <a href="index.php?url=hien_thi_san_pham">Danh sách</a>
            </button> -->

          </div>
          </div>
        </div>
      </div>
      
      <div class="container-fluid" >
      
      <!-- style="text-align:center; margin-left:500px;" -->

        <div class="row" >
          
            <div class="col-md-6" style="margin: 0 auto">
              <div class="card ">
              
                <form class="form-horizontal"  method="POST" action="index.php?url=don_xem_admin">

                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Thông tin đặt lịch</h4>

                    <input type="hidden" name="view_order_id" value="<?= $don_xem['id'] ?>">
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Tên khách hàng</label>

                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                          name="name"
                          disabled
                          value="<?= $don_xem['customer_name'] ?>"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Tên sản phẩm</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"  name = "  "
                          class="form-control"
                          id="lname"
                          disabled
                          value="<?= $don_xem['product_name'] ?>"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Thời gian xem</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="time" name = "time"
                          class="form-control"
                          id="lname"
                          disabled
                          value="<?= $don_xem['time'] ?>"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Ngày xem</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="date" name = "date"
                          class="form-control"
                          id="lname"
                          disabled
                          value="<?= $don_xem['date'] ?>"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Trạng thái</label
                      >
                      <div class="col-sm-9">
                        <select name="status" id="">
                            <?php foreach($status as $key => $value): ?>
                                <option value="<?= $key ?>"
                                    <?php if($key == $don_xem['status']): ?>
                                        selected
                                    <?php endif; ?>
                                >
                                    <?= $value ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                      </div>
                    </div>

                 

                    

                      

                     
                      
                  </div>

                  <div class="border-top">
                    <div class="card-body">
                      <button name="update_don_xem" type="submit" class="btn btn-primary">
                        Cập nhật
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