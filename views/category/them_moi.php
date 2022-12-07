<?php
  require_once('models/category.php');
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

            <button style="border: none; padding:8px 12px; border-radius: 5px; background-color: #9cd6ee; font-weight: bold;  ">
              <a href="index.php?url=danh_muc">Danh sách</a>
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
              
                <form class="form-horizontal" action="index.php?url=them_danh_muc" method="POST" >
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Thêm mới thương hiệu</h4>
                    
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Tên thương hiệu</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                          name="name" 
                        />
                      </div>
                    </div>
                          <?php
                            echo "<br>";
                            echo isset($error['name']) ? $error['name'] : "";
                          ?>
                  </div>

                  <div class="border-top">
                    <div class="card-body">
                      <button name="btn_submit" type="submit" class="btn btn-primary">
                        Thêm Mới
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


