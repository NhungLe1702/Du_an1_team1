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
                  <a href="index.php?url=thong_ke_san_pham">Sản phẩm</a>
                </button>
                <button style="border: none; padding:8px 12px; border-radius: 5px; background-color: #9cd6ee; font-weight: bold; ">
                  <a href="index.php?url=thong_ke_don_xem">Đơn xem</a>
                </button>
                <button style="border: none; padding:8px 12px; border-radius: 5px; background-color: #9cd6ee; font-weight: bold; ">
                  <a href="index.php?url=thong_ke_doanh_thu">Doanh thu</a>
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
                  <h4 class="card-title" style="text-align: center;">Thống kê doanh thu</h4>
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered">
                    
                      <thead>
                        <tr>
                          <th>Tên xe</th>
                          <th>Tổng doanh thu</th>
                          
                          <!-- <th>Số lượng sản phẩm</th>
                          <th>Giá thấp nhất</th>
                          <th>Giá cao nhất</th>
                          <th>Giá trung bình</th> -->
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($tk as $key => $value) :   ?>
                         
                          <tr>
                            <td><?= $value['product_name'] ?></td>
                            <td><?= number_format( $value['doanh_thu']) ?></td>
                            
                            
                            
                            
                            
                          
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
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
  </body>
</html>
