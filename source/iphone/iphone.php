<?php
    session_start();
    include('../db/product_db.php');

    $iphone = get_product_by_category('Iphone');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Điện thoại Iphone chính hãng </title>
</head>
<style>
    *{
        box-sizing: border-box;
    }
    body{
        background-color: #3e3e3f;
        margin: 0;
        min-width: 1024px;
        display: block;
    }
    a{
        text-decoration: none;
        transition: 0.3s;
    }
    section{
        max-width: 1170px;
        min-width: 1024px;
        margin: auto;
        width: 100%;
    }
</style>
<header>
    <div class="navbar">
            <?php require_once('../navbar.php'); ?>
    </div>
    <i class="bi bi-apple title" style="font-style: normal; font-size: 40px;">Iphone</i>
    <div class="carousel-iphone">
        <div class="myCarou fade">
            <img src="../img/image/carousel1.png" style="width:100%">
        </div>
        <div class="myCarou fade">
            <img src="/ck-web/img/image/carousel2.png" style="width:100%">
        </div>
        <div class="myCarou fade">
            <img src="/ck-web/img/image/carousel3.png" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a> 
    </div>
    <br>
    
    <script src="../carousel.js"></script>
</header>
<body>
    <section>
        <div class="filter-cate">
            <div class="ft-cate">
                <a href="../iphone/iphone.php" class="activate"> Tất cả</a>
                <a href="../iphone/iphone-13.php" class> Iphone 13</a>
                <a href="../iphone/iphone-12.php" class> Iphone 12</a>
                <a href="../iphone/iphone-11.php" class> Iphone 11</a>
                <a href="../iphone/iphone-se.php" class> Iphone SE</a>
            </div>
            <div class="ft-sort">
                <a href="#"> Xếp theo: Mới ra mắt</a>
            </div>
        </div>
        <div class="container-product">
            <ul class="list-cate">
                <?php 
                    foreach($iphone as $p) {
                        ?>
                            <li>
                                <a  href="../detail.php?id=<?php echo $p['id'] ?>">
                                    <div class="item-img">
                                        <img src="../<?= $p['thumbnail'] ?>" alt="Iphone SE (2022)">
                                    </div>
                                    <div class="prod-group">
                                        <ul>
                                            <li class="activateprod"><?= $p['capacity'] ?></li>
                                        
                                        </ul>
                                    </div>
                                    <h4><?= $p['name'] ?></h4>
                                    <div class="box-p">
                                        <strong class="price"><?php echo number_format($p['discountPrice'], 0, '', '.') ?>₫</strong>
                                        <p clas="price-old-black"><?php echo number_format($p['price'], 0, '', '.') ?>₫</p>
                                        <span class="percent"><?= $p['discountPercent'] ?></span>
                                    </div>
                                </a>
                            </li>
                        <?php
                    }
                ?>
            </ul>
        </div>
    </section>
</body>
    <?php require_once('../footer.php');?>
</html>