<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="js/cart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Giỏ hàng của bạn</title>
</head>

<header>
    <div class="navbar">
            <?php require_once('navbar.php'); ?>
    </div>
</header>
<style>
    body{
        background: #f0f0f0;
        margin: 0;
        min-width: 1024px;
        display: block;
        position: relative;
    }
    a{
        text-decoration: none;
        transition: 0.3s;
    }
</style>
<body>
    <div class="cartpage">
        <div class="topcart">
            <a href="/homepage.php" class="backhome"> <i class="bi bi-backspace" style="padding-right:5px"></i>Quay lại trang chủ </a>
            <span> Giỏ hàng của bạn </span>
        </div>
        <div class="cartform">
            <ul class="cart-list">
                <li class="product-item">
                    <div class="img-sp">
                        <img src="/ck-web/img/image/iphone-11-black-1-200x200.png">
                        <div>
                            <button><i class="bi bi-x-lg" style="font-size:8px"></i> Xóa </button>
                        </div>                    
                    </div>
                    <div class="info-sp">
                        <div class="name-price">
                            <div class="name-container">
                                <a href="#" class="product-item_name">
                                    Iphone SE (2022)
                                </a>
                            </div>
                            <span>
                                10.690.000đ
                                <strike> 14.990.000 </strike>
                            </span>
                        </div>
                        <hr style="width: 65%; visibility: hidden">
                        <div class=promotion>
                            <label> 0 khuyến mãi </label>
                        </div>
                        <div class="choose-number">
                            <div class="leftpos"></div>
                            <div class="inside">
                                <div class="minus" id="minus">
                                    <i class="bi bi-dash"></i>
                                </div>
                                <input type="text" maxlength="3" class="number" id="number" value="1">
                                <div class="plus" id="plus">
                                    <i style="background-color: rgb(62, 62, 63);"></i>
                                    <i style="background-color: rgb(62, 62, 63);"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class=total-price>
                <span class="total-quantity">
                    <span class="total-label"> Tạm tính</span>
                    (1 sản phẩm): 
                </span>
                <span class="total-money" id="total-money-each-product">10,690,000</span>
            </div>
            <div class="infor-customer">
                <h4> Thông tin khách hàng</h4>
                <form class=form-customer>
                    <div class="sex-customer">
                        <input class="radio" type="radio" name="sex" value="nam">
                        <label class="sex-label"> Anh</label>
                        <input class="radio" type="radio" name="sex" value="nu">
                        <label class="sex-label"> Chị</label>
                    </div>
                    <div class="filling-form">
                        <div class="name-field">
                            <input type="text" required>
                            <label for="cusName" class="form-label">Họ và Tên</label>
                        </div>
                        <div class="name-field number-field">
                            <input type="text" required>
                            <label for="cusPhone" class="form-label">Số điện thoại</label>
                        </div>
                    </div>
                </form>
            </div>
                <div class="infor-customer">
                    <h4> Thông tin giao hàng</h4>
                    <form class=form-customer>
                        <div class="sex-customer">
                            <input class="radio" type="radio" name="methoddiv" value="payatshop">
                            <label class="sex-label"> Nhận tại cửa hàng</label>
                            <input class="radio" type="radio" name="methoddiv" value="delivery">
                            <label class="sex-label"> Giao hàng tận nhà</label>
                        </div>
                        <div class="filling-form">
                            <div class="address-field">
                                <input type="text" required>
                                <label for="cusName" class="form-label">Địa chỉ giao hàng</label>
                            </div>
                        </div>
                        <ul class="otheroption">
                            <li>
                            <input class="radio" type="checkbox" name="option1" value="otherppl">
                            <label class="sex-label"> Gọi người khác nhận hàng</label>
                            </li>
                            <li>
                            <input class="radio" type="checkbox" name="option2" value="changecontract">
                            <label class="sex-label"> Chuyển danh bạ, dữ liệu qua máy mới</label>
                            </li>
                            <li>
                            <input class="radio" type="checkbox" name="option3" value="companybil">
                            <label class="sex-label"> Xuất hóa đơn công ty</label>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="infor-customer">
                    <form class=form-customer>
                    <div class=total-price>
                        <span class="total-quantity">
                            <span class="total-label"> Tổng tiền: </span>
                        </span>
                        <span class="total-money" id="total-money" style="color:red" >10,690,000</span>
                    </div>
                    <button type="submit" class="paybutton"> Đặt hàng </button>
                    </form>
                </div>
            </div>
        <div>
        <small class="footercart">
            Bằng cách đặt hàng, bạn đã đồng ý với Điều khoản sử dụng của chúng tôi
        </small>
        </div>
    </div>
</body>

<script>
    var plus = document.getElementById('plus');
    minus = document.getElementById('minus');
    num = document.getElementById('number');
    total = document.getElementById('total-money');
    totalMoneyEachProduct = document.getElementById('total-money-each-product');

    let count = 1;

    plus.addEventListener("click", ()=> {
        count++; 
        num.value = count;
      
        let money = count * 10690000;
        val = (money).toLocaleString('en-US', {
             valute: 'VND',
        }); 
        
        total.innerText = val;
        totalMoneyEachProduct.innerText = val;

    });

    minus.addEventListener("click", ()=> {
       if(count > 1){
            count--; 
            num.value = count;
            
            let money = count * 10690000;
            val = (money).toLocaleString('en-US', {
                valute: 'VND',
            }); 

            total.innerText = val;
            totalMoneyEachProduct.innerText = val;
        }
    });
</script>
</html>