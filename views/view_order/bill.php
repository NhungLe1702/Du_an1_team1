<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<!-- onload="window.print()" -->
<body >
    <div id='DivIdToPrint'>    
        <table cellpadding="0" cellspacing="0">
            <table style="border:0;width:100%;">
            <tr><td colspan="2" align="center"><b>DOTBIKE</b></td></tr>	
            <tr><td colspan="2" align="center">Phường Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</td></tr>
            <tr><td colspan="2" align="center"><b>Liên hệ:</b> +91 90994 95757</td></tr>
            <tr><td><b>Tên Khách hàng:</b> <?php echo $hoa_don['customer_name']?> </td></tr>
            <tr><td><b>Số điện thoại:</b> <?php echo $hoa_don['customer_phone']?> </td></tr>
            <tr><td colspan="2" align="center"><b>Hoá đơn</b></td></tr>
            <tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
                <td>
                   Sản phẩm
                </td>
                <td align="right">
                    Giá
                </td>
            </tr>
            <tr class="itemrows">
                <td>
                    <b><?php echo $hoa_don['product_name']?></b>
                    <!-- <br>
                    <i>This is test</i> -->
                </td>
                <td align="right">
                    <?php echo number_format($hoa_don['price'])?>
                </td>
            </tr>
            <tr class="total">
                <td></td>
                <td align="right">
                <b>Tổng thanh toán :&nbsp;<?php echo number_format($hoa_don['price'])?></b>
                </td>
            </tr>
            <tr><td colspan="2" align="center">Thank You ! Visit Again</td></tr>
            </table>
        </table>
           
                    
    </div>
</body>
</html>





<input type='button' id='btn' value='Print' onclick='printDiv();'> 

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
</script>