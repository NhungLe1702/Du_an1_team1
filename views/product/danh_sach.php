<?php

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="views/template/css/assets/images/favicon.png"
    />
    <!-- Custom CSS -->
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
    
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <div class="page-wrapper" style="margin-left: 0;">
        

        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <!-- <h4 class="page-title">Danh sách</h4> -->
              <div class="button_insert">

                <button style="border: none; padding:8px 12px; border-radius: 5px; background-color: #9cd6ee; font-weight: bold; ">
                  <a href="index.php?url=them_san_pham">Thêm mới</a>
                </button>
              </div>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol> -->
                </nav>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-body">
                  <!-- <h5 class="card-title">Basic Datatable</h5> -->
                  
                  <div class="table-responsive">
                  
                     
                    <div class="col-sm-12 col-md-6">
                      <form class="search_product" action="index.php?url=loc_san_pham_theo_dm" method="post">
                         
                          <select name="id_category" id="" style="width: 150px ; height: 31px ; border: 1px solid #cccccc; border-radius: 5px; ">
                              <option value="0" selected >Tất cả</option>
                              <?php foreach (danhSachDanhMuc() as $key => $value) { ?>
                                  <option  value="<?php echo $value["id"] ?>" > <?php echo $value["name"] ?> </option>
                              <?php } ?>
                          </select>
                          <input class="btn_submit" type="submit" name="listOk" value="Lọc">
                      </form>
                    </div>
                      
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered">
                    
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Tên</th>
                          <th>Hình ảnh</th>
                          <!-- <th>Hình ảnh mô tả</th> -->
                          <th>Đơn giá</th>
                          <th>sale</th>
                          <th>nguồn gốc</th>
                          <th>mô tả</th>
                          <th>năm sản xuất</th>
                          <th>Id_thương hiệu</th>
                          <th>Hành động</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php foreach($ds_sp as $key => $value) :   ?>
                          <tr>
                            <td><?= $value['id']?></td>
                            <td><?= $value['name']?></td>
                            <td style="padding:10px 0;"><img src="views/template/image/product/<?php echo $value['image'] ?>" alt="" style ="width:80%"></td>
                            <td><?= number_format($value['price'])?></td>
                            <td><?= number_format($value['sale'])?></td>
                            <td><?= $value['origin']?></td>
                            <td><?= $value['description']?></td>
                            <td><?= $value['year']?></td>
                            <td>
                              <?= $value['id_category']?>
                            </td>
                            
                            <td style="color: white">
                              <button style="border: none;margin-top:6px ; padding:4px 10px; border-radius: 5px; background-color: #9cd6ee; font-weight: bold;  ">
                                  <a href="index.php?url=form_sua_san_pham&id=<?= $value['id'] ?>">Sửa</a>
                              </button>
                            
                              <button style="border: none;margin-top:6px ; padding:4px 10px; background-color: #ffaa8e; border-radius: 5px; font-weight: bold; ">
                                  <a href="index.php?url=xoa_san_pham&id=<?= $value['id'] ?>" onclick="return confirm('Bạn có muốn xoá không?')">Xoá</a>
                              </button>
                              
                              <!-- <button style="border: none; margin-top:6px ;padding:4px 10px; background-color: #ffaa8e; border-radius: 5px; font-weight: bold; ">
                                  <a href="index.php?url=form_them_khung_gio&id=<?= $value['id'] ?>" >Thêm giờ </a>
                              </button> -->

                            </td>
                          
                          </tr>
                        <?php endforeach ?>
                        
                        </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>

       
      </div>
      
    </div>

    
    <script src="views/template/css/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="views/template/css/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="views/template/css/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="views/template/css/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="views/template/css/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="views/template/css/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="views/template/css/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="views/template/css/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="views/template/css/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="views/template/css/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
     
      // $("#zero_config").DataTable();

      $("#zero_config").DataTable(
        {
          sorting: false
        }
      );
    </script>
  </body>
</html>
