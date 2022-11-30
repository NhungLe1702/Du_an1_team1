<?php
// echo '<pre>';
// print_r($don_xem);
// die();
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

                <!-- <button style="border: none; padding:8px 12px; border-radius: 5px; background-color: #9cd6ee; font-weight: bold; ">
                  <a href="index.php?url=them_san_pham">Thêm mới</a>
                </button> -->
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
                      <form class="search_product" action="index.php?url=loc_don_xem_theo_status" method="post">
                         
                          <select name="id_status" id="">
                            
                              <option value="0">0. Chưa xem</option>
                              <option value="1">1. Đã xem</option>
                              <option value="2">2. Đã đặt cọc</option>
                              <option value="3">3. Đã Hủy</option>
                              <option value="4">4. Đã Mua</option>
                              <option value="5" selected>Tất cả</option>
                          </select>
                          <input class="btn_submit" type="submit" name="listOk" value="GO">
                      </form>
                    </div>

                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                    
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Tên khách hàng</th>
                          <th>Tên sản phẩm</th>
                          <th>Giờ xem</th>
                          <th>Ngày xem</th>
                          <th>Trạng thái</th>
                          <th>Thời gian tạo đơn</th>
                          <th>Hành động</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($don_xem as $key => $value) :   ?>
                          <?php $mangStatus = getStatus( $value['status'])?>
                            <tr style="background-color:<?php echo $mangStatus[1]?>;">
                              
                              <td><?= $value['id']?></td>
                              <td><?= $value['customer_name']?></td>
                              <td><?= $value['product_name']?></td>
                              <td><?= $value['time']?></td>
                              <td><?= $value['date']?></td>
                              <td >
                                <?= $mangStatus[0]  ?>
                              <td><?= $value['created_at']?></td>
                              <td >
                                <button style="border: none;margin-top:6px ; padding:4px 10px; border-radius: 5px; background-color: #9cd6ee; font-weight: bold;  ">
                                    <a href="index.php?url=update_view_order&id=<?= $value['id'] ?>">Sửa</a>
                                </button>
                              
                                <button style="border: none;margin-top:6px ; padding:4px 10px; background-color: #ffaa8e; border-radius: 5px; font-weight: bold; ">
                                    <a href="index.php?url=xoa_don_xem&id=<?= $value['id'] ?>" onclick="return confirm('Bạn có muốn xoá không?')">Xoá</a>
                                </button>
                                
                                <?php if($mangStatus[0] == 'Đã đặt cọc' ) {?>
                                  <button style="border: none; margin-top:6px ;padding:4px 10px; background-color: #ffaa8e; border-radius: 5px; font-weight: bold; ">
                                      <a id='btn'  href="index.php?url=in_hoa_don&id=<?= $value['id'] ?>" >In hoá đơn </a>
                                    
                                      <!-- <input type='button' id='btn'  value='In hoá đơn' onclick='printDiv();'> -->
                                  </button>
                                <?php }?>

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

    <!-- <div style="visibility: hidden" id='DivIdToPrint'>

        <style type="text/css">
        body{
        font-size:16px;
                line-height:24px;
                font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                color:#555;
        }
        .table_border tr td{
                border:1px solid #555 !important;
            }
        </style>    
        <table cellpadding="0" cellspacing="0">
            <table style="border:0;width:100%;">
            <tr><td colspan="2" align="center"><b>SHREE RANG AUTO CARE</b></td></tr>	
            <tr><td colspan="2" align="center">Dhanori Char Rasta, Gandevi, Navsari, 396360</td></tr>
            <tr><td colspan="2" align="center"><b>Contact:</b> +91 90994 95757</td></tr>
            <tr><td><b>Cust.Name:</b> Divyesh Patel </td><td align="right"><b>Bill No.:</b> # 12345</td></tr>
            <tr><td><b>Mob.No:</b> 9726820585 </td><td align="right"><b>Bill Dt.:</b> </td></tr>
            <tr><td colspan="2" align="center"><b>INVOICE</b></td></tr>
            <tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
                <td>
                    Type of work
                </td>
                <td align="right">
                    Amount
                </td>
            </tr>
              <tr class="itemrows">
                  <td>
                      <b>Washing</b>
                      <br>
                      <i>This is test</i>
                  </td>
                  <td align="right">
                      500
                  </td>
              </tr>
            <tr class="total">
                <td></td>
                <td align="right">
                   <b>Grand&nbsp;Total&nbsp;:&nbsp;500</b>
                </td>
            </tr>
			<tr><td colspan="2" align="center">Thank You ! Visit Again</td></tr>
            </table>
        </table>
		
				
    </div>
    <script type="text/javascript">
      function printDiv() {
        var divToPrint = document.getElementById('DivIdToPrint');
        var newWin = window.open('', 'Print-Window');
        newWin.document.open();
        newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
        newWin.document.close();
        setTimeout(function() {
          newWin.close();
        }, 10);
      }
    </script> -->
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
      $("#zero_config").DataTable(
        {
          sorting: false
        }
      );
    </script>
  </body>
</html>
