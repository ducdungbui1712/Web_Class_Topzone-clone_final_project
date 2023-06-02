<?php
    require_once('db/product_db.php');

    if(isset($_GET['id'])){
        $id = get_product_by_id($_GET['id']);
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/detail.css">
    <script src="js/detail.js"></script>
    <title><?php echo $id['name'] ?></title>
</head>
<body>
    <?php require_once('navbar.php'); ?>
    <br>

    <section class="detail">
        <div class="intro-detail"> 
            <div class="center-page">
                <aside id="slider-detail">
                    <div class="video-img">
                        <div class="thubnail-slide full">
                            <div class="prev disabled"></div>
                            <div class="next"></div>
                            <div class="owl-carousel slider-img owl-loaded owl-drag" id="slider-defaults">
                                <div class="owl-stage-outer">
                                <?php
                                    $all_files = glob($id['image']."/*.*");
                                    $width = count($all_files)*600;
                                    echo "<div class='owl-stage' style='transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width:".$width."px;'>";
                                    for ($i=0; $i<count($all_files); $i++)
                                    {
                                        $image_name = $all_files[$i];
                                        $extension = pathinfo($image_name, PATHINFO_EXTENSION);
                                        $imgExtArr = ['jpg', 'jpeg', 'png'];
                                        if(in_array($extension, $imgExtArr)){
                                        ?>
                                            <div class="owl-item slidenumber<?php echo $i ?>" style="width: 600px;">
                                                <div class="item-img">
                                                    <img class="owl-lazy" width="650" height="650" src="<?php echo $image_name?>" style="opacity: 1;">
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    }
                                    echo "</div>"
                                ?>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev disabled">
                                        <span aria-label="Previous">‹</span>
                                    </button>
                                    <button type="button" role="presentation" class="owl-next">
                                        <span aria-label="Next">›</span>
                                    </button>
                                </div>
                                <div class="owl-dots" style="transition: 0.5s all ease-out;">
                                <?php
                                for ($i=0; $i<count($all_files); $i++)
                                {
                                    $image_name = $all_files[$i];
                                        $extension = pathinfo($image_name, PATHINFO_EXTENSION);
                                        $imgExtArr = ['jpg', 'jpeg', 'png'];
                                        if(in_array($extension, $imgExtArr)){
                                            if($i == 0){
                                            ?>
                                                <button role="button" class="owl-dot dotnumber<?php echo $i ?> img active" style="height: 11.1111%;">
                                                    <img class="theImg" src="<?php echo $image_name?>">
                                                </button>
                                            <?php
                                            }else{
                                            ?>  
                                                <button role="button" class="owl-dot dotnumber<?php echo $i ?> img" style="height: 11.1111%;">
                                                    <img class="theImg" src="<?php echo $image_name?>">
                                                </button>
                                            <?php
                                            }
                                        }
                                }
                                ?>
                                </div>
                            </div>
                    </div>
                </aside>

                <aside>
                    <h1><?php echo $id['name'] ?></h1>
                    <div class="price-promo-local">
                        <span onclick="pricePromoLocal(this)">Giá và khuyến mãi tại: Hồ Chí Minh</span>
                    
                            <div class="store-province">
                                <div class="SearchContainer">
                                    <input id="SearchProvince" placeholder="Tìm theo tỉnh thành">
                                    <i class="topzone-search"></i>
                                </div>
                                <ul class="Provinces">
                                        <li class="Item active">
                                            <a href="#">Hồ Chí Minh</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Hà Nội</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Đà Nẵng</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">An Giang</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Bà Rịa - Vũng Tàu</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Bắc Ninh</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Bến Tre</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Bình Định</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Bình Dương</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Bình Thuận</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Cà Mau</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Cần Thơ</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Đắk Lắk</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Đồng Nai</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Gia Lai</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Hải Phòng</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Khánh Hòa</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Kiên Giang</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Long An</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Nam Định</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Nghệ An</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Ninh Thuận</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Quảng Nam</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Quảng Ninh</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Tây Ninh</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Thái Nguyên</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Tiền Giang</a>
                                        </li>
                                        <li class="Item ">
                                            <a href="#">Vĩnh Long</a>
                                        </li>
                                </ul>
                            </div>
                    </div>
                    <strong class="price"><?php echo number_format($id['discountPrice'], 0, '', '.') ?>₫ *<del><?php echo number_format($id['price'], 0, '', '.') ?>₫</del><small><?php echo $id['discountPercent'] ?></small></strong>
                    <div class="capacity">
                        <span>Dung lượng</span>
                        <ul>
                            <li class="active">
                                <a href="detail.php?id=<?php echo get_product_by_GB($id['id'],$id['capacity']) ?>">
                                    <?php echo $id['capacity'] ?>
                                </a>
                            </li>
                        </ul>
                    </div>                        
                    <div class="color-sp">
                        <span>Màu: Vàng đồng</span>
                        <ul>
                            <li class="active">
                                    <a href="#" style="background-color:#fae7cf"></a>
                            </li>
                            <li class="">
                                    <a href="#;" style="background-color:#54524f"></a>
                            </li>
                            <li class="">
                                    <a href="#" style="background-color:#f1f2ed"></a>
                            </li>
                            <li class="">
                                    <a href="#" style="background-color:#a7c1d9"></a>
                            </li>
                            <li class="">
                                    <a href="#" style="background-color:#576856"></a>
                            </li>
                        </ul>
                    </div>        
                    <div id="promotion-detail" class="box-promo nomal">
                        <span>Khuyến mãi </span>
                        <small>Giá và khuyến mãi dự kiến áp dụng đến 23:59 | 17/08</small>
                        <div class="content-promo">
                            <p>
                                <i></i>
                                <b>Cơ hội trúng 20 iPad Pro M1 12.9" WiFi 512GB (Màu ngẫu nhiên) <a href="#"> Xem chi tiết</a></b>
                            </p>
                            <p>
                                <i></i>
                                <b>Phụ kiện chính hãng Apple giảm 30% khi mua kèm iPhone <a href="#"> Xem chi tiết</a></b>
                            </p>
                            <p>
                                <i></i>
                                <b>Giảm giá 25% iPad Pro M1 12.9" (2021) khi mua kèm iPhone (Không áp dụng kèm khuyến mãi khác của iPad) <a href="#"> Xem chi tiết</a><br></b>
                            </p>
                            <p>
                                <i></i>
                                <b>Giảm đến 1,500,000đ khi tham gia thu cũ đổi mới (Không áp dụng kèm giảm giá qua VNPAY) <a href="#"> Xem chi tiết</a></b>
                            </p>
                            <p>
                                <i></i>
                                <b>Giảm 50% giá gói cước 1 năm (Vina350/Vina500) cho Sim VinaPhone trả sau (Trị giá đến 3 triệu) <a href="#"> Xem chi tiết</a></b>
                            </p>
                            <p>
                                <i></i>
                                <b>Giảm 20% giá gói Bảo hiểm Bảo hành mở rộng PTI 12 tháng cho Iphone, Ipad <a href="#"> Xem chi tiết</a></b>
                            </p>
                            <p>
                                <i></i>
                                <b>Giảm 20% giá gói Bảo hiểm Rơi vỡ 6 tháng cho Iphone, Ipad <a href="#"> Xem chi tiết</a></b>
                            </p>
                            <p>
                                <i></i>
                                <b>Nhập mã&nbsp;SPPMWG giảm 10% tối đa 100.000đ khi thanh toán qua Ví ShopeePay <a href="#"> (click xem chi tiết)</a></b>
                            </p>
                            <p>
                                <i></i>
                                <b>Nhập mã&nbsp;TGDD giảm 5% tối đa 200.000đ cho đơn hàng từ 500.000đ trở lên khi thanh toán qua Ví Moca trên ứng dụng Grab <a href="#"> (click xem chi tiết)</a></b>
                            </p>
                        </div>
                        <p class="text"><em class="note">(*)</em> Giá hoặc khuyến mãi không áp dụng trả góp lãi suất đặc biệt (0%, 0.5%, 1%)</p>
                    </div>             
                    <span class="check-goods"><i class="topzone-box"></i>Xem TopZone có hàng</span>
                    <div class="campaign c3 dt">
                        <b>Ưu đãi khi thanh toán</b>
                        <div class="sliderX">
                            <div class="campaign-option" onclick="ActiveOption(this)" data-campaignname="VNPAYQR">
                                <figure class="vnpayqr">
                                    <i></i>
                                    <img src="img/Body_img/campaign/vnpay.png">
                                </figure>
                                    <b>Giảm <b>500.000₫</b></b>
                                    <span>Sản phẩm iPhone</span>
                                    <div>
                                        <i onmouseover="ShowRuleCampaign(this, 'vnpayqr')" onmouseout="HideRuleCampaign(this)" class="">?</i>
                                        <div id="vnpayqr">
                                            - Nhập mã <strong>TGDDTAO</strong> giảm thêm <strong>500.000₫</strong> khi thanh toán bằng quét QRCode qua App của các ngân hàng<br>
                                            - Thời gian: 01/8/2022 - 31/8/2022.<br>- Số suất: 10000<strong>&nbsp;</strong>suất cho cả 3 website TGDĐ/ĐMX/Topzone (hết suất thanh toán sẽ báo lỗi)<br>
                                            - Sản phẩm áp dụng: Tất cả sản phẩm<strong> IPHONE, IPAD.</strong><br>
                                            - Các ngân hàng được áp dụng KM: Vietcombank, BIDV, VietinBank, Agribank, Nam A Bank, Eximbank, SCB, HDBank, ABBank, Vietbank, BIDC, SAIGONBANK, OceanBank, Kienlongbank, Bảo Việt Bank, Việt Á Bank và ví điện tử VNPAY<br>
                                            - Số lần khuyến mãi: Mỗi khách hàng (tương ứng với mỗi số tài khoản ngân hàng và/hoặc số điện thoại đăng ký dịch vụ mobile banking) được khuyến mại 01 (một lần)/tháng.
                                        </div>
                                    </div>
                            </div>
                            <div class="campaign-option" onclick="ActiveOption(this)" data-campaignname="EXIMBANK">
                                <figure class="eximbank">
                                    <i></i>
                                    <img src="img/Body_img/campaign/eximbank.jpg">
                                </figure>
                                    <b>Giảm <b>500.000₫</b></b>
                                    <span>Sản phẩm từ 3Tr</span>
                                    <div>
                                        <i onmouseover="ShowRuleCampaign(this, 'eximbank')" onmouseout="HideRuleCampaign(this)" class="">?</i>
                                        <div id="eximbank">
                                            <p>- Giảm 500.000đ cho sản phẩm 3.000.000đ trở lên khi thanh toán qua thẻ tín dụng EXIMBANK.</p>
                                            <p>- Thời gian diễn ra chương trình : Từ ngày 15/06/2022 - 15/01/2023.</p>
                                            <p>- Số suất khuyến mãi : <strong>1.250</strong> suất (Nếu hết suất thanh toán sẽ báo lỗi).</p>
                                            <p>- Mỗi chủ thẻ được áp dụng 1 lần/chu kỳ.</p><p>- Không áp dụng trả góp qua thẻ tín dụng EXIMBANK.</p>
                                            <p>- Không áp dụng kèm các khuyến mãi qua ngân hàng hoặc cổng thanh toán khách.</p>
                                            <p>- Không áp dụng kèm mã giảm giá, coupon giảm giá.</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="campaign-option" onclick="ActiveOption(this)" data-campaignname="OCB">
                                <figure class="ocb">
                                    <i></i>
                                    <img src="img/Body_img/campaign/ocb-1.png">
                                </figure>
                                    <b>Giảm <b>500.000₫</b></b>
                                    <span>Sản phẩm từ 5Tr</span>
                                    <div>
                                        <i onmouseover="ShowRuleCampaign(this, 'ocb')" onmouseout="HideRuleCampaign(this)" class="">?</i>
                                        <div id="ocb">
                                            <p style="font-weight: 400;">- Ưu đãi <strong>500.000đ</strong> cho sản phẩm có giá thanh toán cuối cùng từ <strong>5.000.000đ</strong> trở lên khi thanh toán qua Thẻ tín dụng quốc tế OCB.</p>
                                            <p style="font-weight: 400;">- Thời gian diễn ra chương trình: Từ ngày 15/8/2022 - 15/2/2023 (Có thể kết thúc sớm nếu hết suất)</p>
                                            <p style="font-weight: 400;">- Áp dụng cho thẻ tín dụng OCB với các đầu BIN: 530572, 542172, 520980, 356505.</p><p style="font-weight: 400;">- Số suất khuyến mãi: <strong>125</strong> suất (Nếu hết suất thanh toán sẽ báo lỗi)</p>
                                            <p style="font-weight: 400;">- Mỗi chủ thẻ được sử dụng ưu đãi 1 lần/ngày</p><p style="font-weight: 400;">- Không áp dụng chung với chương trình trả góp qua thẻ tín dụng OCB.</p>
                                            <p style="font-weight: 400;">- Không áp dụng kèm các khuyến mãi qua ngân hàng hoặc cổng thanh toán khác.</p><p style="font-weight: 400;">- Không áp dụng mã giảm giá, coupon.</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="crule hide"></div>
                    </div>  
                    <style>
                        .campaign.dt>div::-webkit-scrollbar {width:6px;height:6px;}
                        .campaign.dt>div::-webkit-scrollbar-track {border-radius:10px;background:rgba(255,255,255,0.3);}
                        .campaign.dt>div::-webkit-scrollbar-thumb {border-radius:10px;background:rgba(255,255,255,0.5);}
                        .campaign.dt>div::-webkit-scrollbar-thumb:hover {background:rgba(255,255,255,0.4);}
                        .campaign.dt>div::-webkit-scrollbar-thumb:active {background:rgba(255,255,255,.9);}
                        .campaign {margin-bottom:15px;padding-top:17px;border-top:1px solid #E0E0E0;white-space:nowrap;position:relative;}
                        .campaign>div.sliderX {display:flex;overflow-x:scroll;-webkit-overflow-scrolling:touch;-ms-scroll-chaining:chained;padding-bottom:6px;}
                        .campaign>b {display:block;margin-bottom:15px;font-size:16px;color:#fff;}
                        .campaign>div>div {min-width:calc(40% - 3px);display:inline-block;vertical-align:top;padding:10px 10px 8px;border:2px solid #fff;border-radius:12px;position:relative;flex-shrink:0;margin-right:5px;background-color:#fff;cursor:pointer;}
                        .campaign>div>div:last-of-type {margin-right:0;}
                        .campaign>div>div>* {display:block;margin-bottom:2px;}
                        .campaign>div>div>figure {height:16px;position:relative;margin-bottom:6px;}
                        .campaign>div>div>figure>img {max-height:100%;top:0;bottom:0;left:20px;margin:auto;position:absolute;}
                        .campaign>div>div>figure.jcb>img {height:15px;}
                        .campaign>div>div>figure.tpbank>img {height:13px;}
                        .campaign>div>div>figure.fecredit>img {height:8px;}
                        .campaign>div>div>figure.vnpayqr>img {height:10px;}
                        .campaign>div>div>figure.fundiin>img {height:15px;}
                        .campaign>div>div>b {color:#000;font-weight:400;}
                        .campaign>div>div>b>span {font-size:12px;color:#666;}
                        .campaign>div>div>span {font-size:12px;color:#666;}
                        .campaign>div>div>a {font-weight:400;color:#FB6E2E;margin-bottom:0;}
                        .campaign>div>div>div {width:16px;height:16px;position:absolute;right:10px;top:10px;}
                        .campaign>div>div>div>i {font-style:normal;width:16px;height:16px;border-radius:50%;display:block;background-color:#999;color:#fff;font-size:10px;text-align:center;line-height:16px;position:relative;cursor:pointer;}
                        .campaign>div>div>div>i.act {background-color:#2F80ED;}
                        .campaign>div>div>div>i.act:before {content:"";position:absolute;width:12px;height:12px;background:#e0e0e0;transform:rotate(45deg);top:15px;right:2px;box-shadow:-2px -2px 5px -4px;}
                        .campaign>div>div>div>div {display:none;}
                        .campaign div.crule {position:absolute;right:0;top:83px;padding:10px;border-radius:12px;width:100%;background-color:#fff;border:1px solid #E0E0E0;z-index:5;white-space:normal;line-height:1.5;box-shadow:0 0 8px #ccc;}
                        .campaign div.crule>* {margin-bottom:10px;color:#333;white-space:normal;}
                        .campaign .cpopup {position:fixed !important;left:0 !important;top:0 !important;width:100%;height:100vh;background:rgba(0,0,0,.85);z-index:10;}
                        .campaign .cpopup>div {width:320px;position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;background-color:#fff;border-radius:4px;padding:20px;line-height:1.5;text-align:center;height:105px;display:block;white-space:normal;}
                        .campaign .cpopup>div:before {content:"×";position:absolute;right:7px;top:-5px;font-size:26px;}
                        .campaign.dt.c1>div>div>a {float:right;}
                        .campaign.mb>div {overflow-x:scroll;-webkit-overflow-scrolling:touch;-ms-scroll-chaining:chained;}
                        .campaign.mb>div>div {min-width:calc(43% - 3px);}
                        .campaign.mb.c1>div>div>a {display:block;padding-top:2px;}
                        .campaign.c1>div>div {width:calc(100% - 3px);}
                        .campaign.c1>div>div>* {display:inline-block;vertical-align:middle;margin-right:2px;}
                        .campaign.c1>div>div>div {position:relative;left:0;top:0;}
                        .campaign.c1>div>div>figure.fecredit {height:20px;}
                        .campaign.c1>div>div>figure>img {position:relative;left:0;display:inline-block;vertical-align:middle;}
                        .campaign.c1>div>div>figure>i {vertical-align:middle;}
                        .campaign.c2>div>div {width:calc((100% / 2) - 3px);}
                        .campaign.c2 .sliderX::-webkit-scrollbar, .campaign.c1 .sliderX::-webkit-scrollbar {display:none;}
                        .campaign.c2 .sliderX {justify-content:center;} 
                        .campaign:not(.c1) .sliderX>div>b>span:last-of-type {display:block;}
                        .campaign-option>figure>i {width:16px;height:16px;border-radius:50%;padding:3px;border:1px solid #2F80ED;display:inline-block;font-size:16px;cursor:pointer;}
                        .campaign-option.active {border:2px solid #2F80ED;}
                        .campaign-option.active>figure>i::before {content:"";display:block;height:100%;background-color:#2F80ED;border-radius:50%;}
                    </style>
                    <div class="buy-sp normal has-threebtn">
                        <a href="cart.php?id=<?php echo $id['id']?>" onclick="BuyNow()" class="btn-buy full">
                            Mua ngay
                        </a>
                        <a href="#" class="btn-ins pay-taichinh has-another-pay">
                            Mua trả góp 0%
                            <span>Qua công ty tài chính</span>
                        </a>
                        <a href="#" class="btn-ins pay-nganluong has-another-pay">
                            Trả góp 0% qua thẻ
                            <span>Visa, Mastercard, JCB, Amex</span>
                        </a>
                    </div>
                    <div class="btn-area clearfix"></div>
                    <div class="popup-error">
                        <div>
                            <a href="#" class="pe-close">×</a>
                            <div></div>
                            <a href="#" class="pe-btn">Kiểm tra giỏ hàng</a>
                            <a href="#" class="pe-btn btn-confirm">Đồng ý</a>
                        </div>
                    </div>   
                    <ul class="policy">
                        <li>
                            <span>
                                <i class="topzone-boxtskt"></i>
                                Bộ sản phẩm gồm: Hộp, Sách hướng dẫn, Cây lấy sim, Cáp Lightning - Type C
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="topzone-doitra"></i>
                                Hư gì đổi nấy <b>12 tháng</b> tại 3317 siêu thị trên toàn quốc <a href="#"> Xem chi tiết chính sách bảo hành, đổi trả </a>
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="topzone-baohanhpolicy"></i>
                                Bảo hành chính hãng 1 năm
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="topzone-giaohang"></i>
                                Giao hàng nhanh toàn quốc <a href="#">Xem chi tiết</a>
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="topzone-tongdai"></i>
                                Tổng đài: <a href="tel:1900969642">1900.9696.42</a> (9h00 - 21h00 mỗi ngày)
                            </span>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
        <div class="descrip">
            <strong id="combo-title" class="sg-access">Phụ kiện gợi ý cho <?php echo $id['category'] ?></strong>
            <div id="combo-detail" class="access-sg owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <?php
                        if ($id['category'] === 'iPhone'){
                            $suggest = get_product_by_subCategory('Phụ kiện iPhone');
                            $othersuggest = get_product_by_subCategory('Phụ kiện khác');
                            for($i = 0; $i<count($othersuggest);$i++){
                                array_push($suggest,$othersuggest[$i]);
                            }
                        }else if ($id['category'] === 'Mac'){
                            $suggest = get_product_by_subCategory('Phụ kiện Mac');
                            $othersuggest = get_product_by_subCategory('Phụ kiện khác');
                            for($i = 0; $i<count($othersuggest);$i++){
                                array_push($suggest,$othersuggest[$i]);
                            }
                        }else if ($id['category'] === 'Watch'){
                            $suggest = get_product_by_subCategory('Phụ kiện Apple Watch');
                            $othersuggest = get_product_by_subCategory('Phụ kiện khác');
                            for($i = 0; $i<count($othersuggest);$i++){
                                array_push($suggest,$othersuggest[$i]);
                            }
                        }else if ($id['category'] === 'iPad'){
                            $suggest = get_product_by_subCategory('Phụ kiện iPad');
                            $othersuggest = get_product_by_subCategory('Phụ kiện khác');
                            for($i = 0; $i<count($othersuggest);$i++){
                                array_push($suggest,$othersuggest[$i]);
                            }
                        }else if ($id['category'] === 'Phụ kiện'){
                            $suggest = get_product_by_subCategory('Phụ kiện khác');
                        }
                        $width = count($suggest)*300;
                        echo "<div class='owl-stage' style='transition: all 0s ease 0s; width:".$width."px; left: 0px;'>";
                        for ($i = 0; $i < count($suggest); $i++){
                            $item = $suggest[$i]
                            ?>
                            <div class="owl-item slidenumber<?php echo $i?>" style="width: 300px;">
                                <div class="item">
                                    <a href="detail.php?id=<?php echo $item['id']?>">
                                        <div class="img-access-sg">
                                            <img class=" lazyloaded" src="<?php echo $item['thumbnail']?>">
                                        </div>
                                        <h3><?php echo $item['name']?></h3>
                                        <span>
                                            <b><?php echo number_format($item['discountPrice'], 0, '', '.')?>₫</b> 
                                            <del><?php echo number_format($item['price'], 0, '', '.')?>₫</del>
                                            <?php echo $item['discountPercent']?>                   
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                        echo"</div>"
                    ?>
                    <!-- <div class="owl-stage" style="transition: all 0s ease 0s; width: 3000px; left: 0px;">
                        <div class="owl-item slidenumber10" style="width: 300px;">
                            <div class="item">
                                <a href="#">
                                    <div class="img-access-sg">
                                        <img class=" lazyloaded" alt="Ốp lưng Silicone MagSafe cho iPhone 13 Pro Max" src="img/Body_img/descrip/op-lung-magsafe-iphone-13-pro-max-nhua-deo-apple-mm2n3-650x650.png">
                                    </div>
                                    <h3>Ốp lưng Silicone MagSafe cho iPhone 13 Pro Max</h3>
                                    <span>
                                        <b>950.000₫</b> 
                                        <del>1.590.000₫</del>
                                        -40%                    
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="owl-item slidenumber11" style="width: 300px;">
                            <div class="item">
                                <a href="#">
                                    <div class="img-access-sg">
                                        <img class=" ls-is-cached lazyloaded" alt="Pin Dự Phòng MagSafe" src="img/Body_img/descrip/pin-apple-magsafe-battery-pack-211221-090310-650x650.png">
                                    </div>
                                    <h3>Pin Dự Phòng MagSafe</h3>
                                    <span>
                                        <b>2.390.000₫</b> 
                                        <del>2.990.000₫</del>
                                        -20%                    
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="owl-item slidenumber12" style="width: 300px;">
                            <div class="item">
                                <a href="#">
                                    <div class="img-access-sg">
                                        <img class=" lazyloaded" alt="Cáp Type C - Lightning MFI Belkin Duratex Plus F8J243 1.2m" src="img/Body_img/descrip/cap-lightning-mfi-belkin-duratex-plus-f8j243-trang-thumb-650x650.png">
                                    </div>
                                    <h3>Cáp Type C - Lightning MFI Belkin Duratex Plus F8J243 1.2m</h3>
                                    <span>
                                        <b>640.000₫</b>
                                        <del>800.000₫</del>
                                        -20%                    
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="owl-item slidenumber13" style="width: 300px;">
                            <div class="item">
                                <a href="#">
                                    <div class="img-access-sg">
                                        <img class=" lazyloaded" alt="Miếng dán kính iPhone 13 Pro Max UniQ" src="img/Body_img/descrip/mieng-dan-kinh-iphone-13-pro-max-uniq-thumbn-650x650.png">
                                    </div>
                                    <h3>Miếng dán kính iPhone 13 Pro Max UniQ</h3>
                                    <span>
                                        <b>195.000₫</b> 
                                        <del>220.000₫</del>
                                        -10%                    
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="owl-item slidenumber14" style="width: 300px;">
                            <div class="item">
                                <a href="#">
                                    <div class="img-access-sg">
                                        <img class=" lazyloaded" alt="Pin sạc dự phòng 10000mAh PowerIQ 2.0 Anker PowerCore II A1230" src="img/Body_img/descrip/sac-du-phong-10000mah-anker-powercore-ii-a1230-thumb-1-650x650.png">
                                    </div>
                                    <h3>Pin sạc dự phòng 10000mAh PowerIQ 2.0 Anker PowerCore II A1230</h3>
                                    <span>
                                        <b>855.000₫</b> 
                                        <del>950.000₫</del>
                                        -10%                    
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="owl-item slidenumber15" style="width: 300px;">
                            <div class="item">
                                <a href="#">
                                    <div class="img-access-sg">
                                        <img class=" lazyloaded" alt="Pin sạc dự phòng 10000mAh Anker PowerCore Select A1223" src="img/Body_img/descrip/sac-du-phong-10000mah-anker-powercore-select-a1223-den-thumb-650x650.png">
                                    </div>
                                    <h3>Pin sạc dự phòng 10000mAh Anker PowerCore Select A1223</h3>
                                    <span>
                                        <b>620.000₫</b> 
                                        <del>690.000₫</del>
                                        -10%                    
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="owl-item slidenumber16" style="width: 300px;">
                            <div class="item">
                                <a href="#">
                                    <div class="img-access-sg">
                                        <img class=" lazyloaded" alt="Pin sạc dự phòng 10000mAh Anker PowerCore Lite A1232" src="img/Body_img/descrip/sac-10000mah-type-c-anker-powercore-lite-a1232-den-thumb-1-650x650.png">
                                    </div>
                                    <h3>Pin sạc dự phòng 10000mAh Anker PowerCore Lite A1232</h3>
                                    <span>
                                        <b>720.000₫</b> 
                                        <del>800.000₫</del>
                                        -10%                    
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="owl-item slidenumber17" style="width: 300px;">
                            <div class="item">
                                <a href="#">
                                    <div class="img-access-sg">
                                        <img class=" lazyloaded" alt="Pin sạc dự phòng 10000mAh 15W PD Belkin Pocket Power BPB011" src="img/Body_img/descrip/pin-polymer-10000-type-c-15w-belkin-pocket-power-hong-thumb-650x650.png">
                                    </div>
                                    <h3>Pin sạc dự phòng 10000mAh 15W PD Belkin Pocket Power BPB011</h3>
                                    <span>
                                        <b>710.000₫</b> 
                                        <del>790.000₫</del>
                                        -10%                    
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="owl-item slidenumber18" style="width: 300px;">
                            <div class="item">
                                <a href="#">
                                    <div class="img-access-sg">
                                        <img class=" lazyloaded" alt="Pin sạc dự phòng 10000mAh Type C PD Anker PowerCore Slim A1231" src="img/Body_img/descrip/1-650x650.png">
                                    </div>
                                    <h3>Pin sạc dự phòng 10000mAh Type C PD Anker PowerCore Slim A1231</h3>
                                    <span>
                                        <b>900.000₫</b> 
                                        <del>1.000.000₫</del>
                                        -10%                    
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="owl-item slidenumber19" style="width: 300px;">
                            <div class="item">
                                <a href="#">
                                    <div class="img-access-sg">
                                        <img class=" lazyloaded" alt="Adapter sạc Apple USB-C 20W" src="img/Body_img/descrip/114.34.03-650x650.png">
                                    </div>
                                    <h3>Adapter sạc Apple USB-C 20W</h3>
                                    <span>
                                        <b>690.000₫</b>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev disabled">
                        <span aria-label="Previous">‹</span>
                    </button>
                    <button type="button" role="presentation" class="owl-next">
                        <span aria-label="Next">›</span>
                    </button>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
            <div class="tabs">
                <span class="tab-link current" data-tab="tab-1">Mô tả</span>
                <span class="tab-link" data-tab="tab-2">Thông số kỹ thuật</span>
            </div>
            <div class="specifications tab-content" id="tab-2">
                <div class="box-specifi ">

                    <a href="#" class="active">Màn hình</a>
                    <ul class="text-specifi active">
                        <li>
                            <aside>
                                <strong>Công nghệ màn hình:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">OLED</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Độ phân giải:</strong>
                            </aside>
                            <aside>
                                <span class="">1284 x 2778 Pixels</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Màn hình rộng:</strong>
                            </aside>
                            <aside>
                                <span class="">6.7" - Tần số quét 120 Hz</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Độ sáng tối đa:</strong>
                            </aside>
                            <aside>
                                <span class="">1200 nits</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Mặt kính cảm ứng:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">Kính cường lực Ceramic Shield</span>
                            </aside>
                        </li>
                    </ul>
                </div>
                <div class="box-specifi ">
                    <a href="#" class="active">Camera sau</a>
                    <ul class="text-specifi active">
                        <li>
                            <aside>
                                    <strong href="#">Độ phân giải:</strong>
                            </aside>
                            <aside>
                                <span class="">3 camera 12 MP</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Quay phim:</strong>
                            </aside>
                            <aside>
                                <span class="circle">

                                    4K 2160p@24fps
                                </span>
                                <span class="circle">

                                    4K 2160p@30fps
                                </span>
                                <span class="circle">

                                    4K 2160p@60fps
                                </span>
                                <span class="circle">

                                    FullHD 1080p@120fps
                                </span>
                                <span class="circle">

                                    FullHD 1080p@240fps
                                </span>
                                <span class="circle">

                                    FullHD 1080p@30fps
                                </span>
                                <span class="circle">

                                    FullHD 1080p@60fps
                                </span>
                                <span class="circle">

                                    HD 720p@30fps
                                </span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Đèn Flash:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">Có</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Tính năng:</strong>
                            </aside>
                            <aside>
                                <span class="circle">

                                    Ban đêm (Night Mode)
                                </span>
                                <span class="circle">

                                    Chạm lấy nét
                                </span>
                                <span class="circle">

                                    Chống rung quang học (OIS)
                                </span>
                                <span class="circle">

                                    Deep Fusion
                                </span>
                                <span class="circle">

                                    Dolby Vision HDR
                                </span>
                                <span class="circle">

                                    Góc rộng (Wide)
                                </span>
                                <span class="circle">

                                    Góc siêu rộng (Ultrawide)
                                </span>
                                <span class="circle">

                                    HDR
                                </span>
                                <span class="circle">

                                    Nhận diện khuôn mặt
                                </span>
                                <span class="circle">

                                    Quay chậm (Slow Motion)
                                </span>
                                <span class="circle">

                                    Siêu cận (Macro)
                                </span>
                                <span class="circle">

                                    Toàn cảnh (Panorama)
                                </span>
                                <span class="circle">

                                    Trôi nhanh thời gian (Time Lapse)
                                </span>
                                <span class="circle">

                                    Tự động lấy nét (AF)
                                </span>
                                <span class="circle">

                                    Xóa phông
                                </span>
                                <span class="circle">

                                    Zoom kỹ thuật số
                                </span>
                                <span class="circle">

                                    Zoom quang học
                                </span>
                                <span class="circle">

                                    Ảnh Raw
                                </span>
                            </aside>
                        </li>
                    </ul>
                </div>
                <div class="box-specifi ">
                    <a href="#" class="" >Camera trước</a>
                    <ul class="text-specifi ">
                        <li>
                            <aside>
                                    <strong href="#">Độ phân giải:</strong>
                            </aside>
                            <aside>
                                <span class="">12 MP</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Tính năng:</strong>
                            </aside>
                            <aside>
                                <span class="circle">

                                    HDR
                                </span>
                                <span class="circle">

                                    Nhận diện khuôn mặt
                                </span>
                                <span class="circle">

                                    Quay video 4K
                                </span>
                                <span class="circle">

                                    Quay video Full HD
                                </span>
                                <span class="circle">

                                    Quay video HD
                                </span>
                                <span class="circle">

                                    Tự động lấy nét (AF)
                                </span>
                                <span class="circle">
                                    Xóa phông
                                </span>
                            </aside>
                        </li>
                    </ul>
                </div>
                <div class="box-specifi ">
                    <a href="#" class="">Hệ điều hành &amp; CPU</a>
                    <ul class="text-specifi ">
                        <li>
                            <aside>
                                <strong>Hệ điều hành:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">iOS 15</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Chip xử lý (CPU):</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">Apple A15 Bionic 6 nhân</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong href="#">Tốc độ CPU:</strong>
                            </aside>
                            <aside>
                                <span class="">3.22 GHz</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Chip đồ họa (GPU):</strong>
                            </aside>
                            <aside>
                                <span class="">Apple GPU 5 nhân</span>
                            </aside>
                        </li>
                    </ul>
                </div>
                <div class="box-specifi ">
                    <a href="#" class="">Bộ nhớ &amp; Lưu trữ</a>
                    <ul class="text-specifi ">
                        <li>
                            <aside>
                                    <strong href="#">RAM:</strong>
                            </aside>
                            <aside>
                                <span class="">6 GB</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Bộ nhớ trong:</strong>
                            </aside>
                            <aside>
                                <span class="">128 GB</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Bộ nhớ còn lại (khả dụng) khoảng:</strong>
                            </aside>
                            <aside>
                                <span class="">113 GB</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Danh bạ:</strong>
                            </aside>
                            <aside>
                                <span class="">Không giới hạn</span>
                            </aside>
                        </li>
                    </ul>
                </div>
                <div class="box-specifi ">
                    <a href="#;" class="" >Kết nối</a>
                    <ul class="text-specifi ">
                        <li>
                            <aside>
                                <strong>Mạng di động:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">Hỗ trợ 5G</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>SIM:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">1 Nano SIM &amp; 1 eSIM</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Wifi:</strong>
                            </aside>
                            <aside>
                                <span class="circle">

                                    Dual-band (2.4 GHz/5 GHz)
                                </span>
                                <span class="circle">

                                    Wi-Fi 802.11 a/b/g/n/ac/ax
                                </span>
                                <span class="circle">

                                    Wi-Fi hotspot
                                </span>
                                <span class="circle">

                                    Wi-Fi MIMO
                                </span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>GPS:</strong>
                            </aside>
                            <aside>
                                <span class="circle">

                                    BEIDOU
                                </span>
                                <span class="circle">

                                    GALILEO
                                </span>
                                <span class="circle">

                                    GLONASS
                                </span>
                                <span class="circle">

                                    A-GPS
                                </span>
                                <span class="circle">

                                    iBeacon
                                </span>
                                <span class="circle">

                                    QZSS
                                </span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Bluetooth:</strong>
                            </aside>
                            <aside>
                                <span class="circle">

                                    A2DP
                                </span>
                                <span class="circle">

                                    LE
                                </span>
                                <span class="circle">

                                    v5.0
                                </span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Cổng kết nối/sạc:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">Lightning</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Jack tai nghe:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">Lightning</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Kết nối khác:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">NFC</span>
                            </aside>
                        </li>
                    </ul>
                </div>
                <div class="box-specifi ">
                    <a href="#" class="">Pin &amp; Sạc</a>
                    <ul class="text-specifi ">
                        <li>
                            <aside>
                                <strong>Dung lượng pin:</strong>
                            </aside>
                            <aside>
                                <span class="">4352 mAh</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Loại pin:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">Li-Ion</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Hỗ trợ sạc tối đa:</strong>
                            </aside>
                            <aside>
                                <span class="">20 W</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Công nghệ pin:</strong>
                            </aside>
                            <aside>
                                <span class="circle">

                                    Siêu tiết kiệm pin
                                </span>
                                <span class="circle">

                                    Sạc không dây
                                </span>
                                <span class="circle">

                                    Sạc không dây MagSafe
                                </span>
                                <span class="circle">

                                    Sạc pin nhanh
                                </span>
                            </aside>
                        </li>
                    </ul>
                </div>
                <div class="box-specifi ">
                    <a href="#" class="">Tiện ích</a>
                    <ul class="text-specifi ">
                        <li>
                            <aside>
                                <strong>Bảo mật nâng cao:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">Mở khoá khuôn mặt Face ID</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Kháng nước, bụi:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">IP68</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Ghi âm:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">Có (microphone chuyên dụng chống ồn)</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Xem phim:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">H.264(MPEG4-AVC)</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Nghe nhạc:</strong>
                            </aside>
                            <aside>
                                <span class="circle">

                                    AAC
                                </span>
                                <span class="circle">

                                    FLAC
                                </span>
                                <span class="circle">

                                    Lossless
                                </span>
                            </aside>
                        </li>
                    </ul>
                </div>
                <div class="box-specifi ">
                    <a href="#" class="">Thông tin chung</a>
                    <ul class="text-specifi ">
                        <li>
                            <aside>
                                <strong>Thiết kế:</strong>
                            </aside>
                            <aside>
                                <span class="" target="_blank">Nguyên khối</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Chất liệu:</strong>
                            </aside>
                            <aside>
                                <span class="">Khung thép không gỉ &amp; Mặt lưng kính cường lực</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Kích thước, khối lượng:</strong>
                            </aside>
                            <aside>
                                <span class="">Dài 160.8 mm - Ngang 78.1 mm - Dày 7.65 mm - Nặng 240 g</span>
                            </aside>
                        </li>
                        <li>
                            <aside>
                                <strong>Thời điểm ra mắt:</strong>
                            </aside>
                            <aside>
                                <span class="">09/2021</span>
                            </aside>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="description tab-content current" id="tab-1">
                <div class="text-detail ">
                    <p> 
                    <?php
                        $all_files = glob($id['image']."\descrip"."/*.*");
                        for ($i=0; $i<count($all_files); $i++)
                        {
                            $image_name = $all_files[$i];
                        ?>
                            <img src="<?php echo $image_name?>">
                        <?php
                        }
                    ?>
                    </p>
                    <?php
                        $textDescrip = $id['image']."/textDescrip.txt";
                        $array = explode("\n", file_get_contents($textDescrip));
                        echo $array[0];
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('footer.php'); ?>
</body>
</html>
