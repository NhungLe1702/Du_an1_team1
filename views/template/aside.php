<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="price-slider-box">
            <!-- <div class="price-filter">
                <div class="price-slider-title">
                    <h6>Min / Max Price</h6>
                </div>
                <form action="#" method="post">
                    <div class="price-slider-top">
                        <div class="input-type">
                            <input type="text" id="min-price" />
                        </div>
                        <div class="input-type">
                            <input type="text" id="max-price" />
                        </div>
                    </div>
                    <div id="price-slider" class="price-slider"></div>
                </form>
            </div> -->
            <!-- /.price-filter -->
        </div>
        
        <div class="categoryies-option">
            <h4>Hãng xe</h4>
            <ul>
                <?php foreach(danhSachDanhMuc() as $key => $value) : ?>
                    <li style="padding-left:  20px; color: black!important;">
                        <!-- <input id="Road" type="checkbox" name="Road"> -->
                        <label for="Road">
                            <a style="color: #666666; hover: text-decorated: underline;" href="index.php?url=ds_san_pham_theo_dm&id=<?php echo $value['id'] ?>"><?=$value['name']?><span> (15)</span></a>
                            
                        </label>
                    </li>
                <?php endforeach ?>

            </ul>
        </div>
        <div class="categoryies-option color-box">
            <h4>color</h4>
            <ul>
                <li>
                    <input id="asbestos" class="asbestos" type="checkbox" name="asbestos">
                    <label for="asbestos">Road bike<span> (15)</span></label>
                </li>
                <li>
                    <input id="white" class="white" type="checkbox" name="white">
                    <label for="white">White<span> (12)</span></label>
                </li>
                <li>
                    <input id="green" class="green" type="checkbox" name="green">
                    <label for="green">folding bike<span> (13)</span></label>
                </li>
                <li>
                    <input id="belize" class="belize" type="checkbox" name="belize">
                    <label for="belize">folding bike<span> (13)</span></label>
                </li>
                <li>
                    <input id="pomegramate" class="pomegramate" type="checkbox" name="pomegramate">
                    <label for="pomegramate">folding bike<span> (13)</span></label>
                </li>
                <li>
                    <input id="orange" class="orange" type="checkbox" name="orange">
                    <label for="orange">folding bike<span> (13)</span></label>
                </li>
                <li>
                    <input id="block" class="block" type="checkbox" name="block">
                    <label for="block">folding bike<span> (13)</span></label>
                </li>
            </ul>
        </div>
        <div class="categoryies-option">
            <h4>size</h4>
            <ul>
                <li>
                    <input id="s" type="checkbox" name="s">
                    <label for="s">s<span> (32)</span></label>
                </li>
                <li>
                    <input id="M" type="checkbox" name="M">
                    <label for="M">M<span> (25)</span></label>
                </li>
                <li>
                    <input id="L" type="checkbox" name="L">
                    <label for="L">L<span> (41)</span></label>
                </li>
                <li>
                    <input id="XL" type="checkbox" name="XL">
                    <label for="XL">XL<span> (20)</span></label>
                </li>
            </ul>
        </div>
        <div class="categoryies-option">
            <h4>availabilty</h4>
            <ul>
                <li>
                    <input id="Not" type="checkbox" name="Not">
                    <label for="Not">Not available <span> (7)</span></label>
                </li>
                <li>
                    <input id="stock" type="checkbox" name="stock">
                    <label for="stock">In stock <span> (30)</span></label>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>