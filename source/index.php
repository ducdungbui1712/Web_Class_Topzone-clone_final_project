<?php
    session_start();
    include('db/product_db.php');

    $iphone = get_product_by_category('Iphone');
    $mac = get_product_by_category('Mac');
    $ipad = get_product_by_category('Ipad');
    $watch = get_product_by_category('Watch');
    $sound = get_product_by_category('Âm thanh');
    $accessory = get_product_by_category('Phụ kiện');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Topzone - Cửa Hàng Apple Chính Hãng </title>
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
</style>
<header>
    <?php require_once('navbar.php'); ?>
    
    <div class="carousel-container">
        <div class="myCarou fade">
            <img src="img/image/carousel1.png" style="width:100%">
        </div>
        <div class="myCarou fade">
            <img src="img/image/carousel2.png" style="width:100%">
        </div>
        <div class="myCarou fade">
            <img src="img/image/carousel3.png" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a> 
        <div style="text-align:center" class="dotpos">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
    </div>
    <br>
    
    <script src="carousel.js"></script>
    <div class="introlist">
        <div class="introitem">
            <i class="bi bi-check2-circle introimg"></i>
            <p> Mẫu mã đa dạng, chính hãng </p>
        </div>
        <div class="introitem">
            <i class="bi bi-truck introimg"></i>
            <p> Giao hàng toàn quốc </p>
        </div>
        <div class="introitem">
            <i class="bi bi-shield introimg"></i>
            <p> Bảo hành có cam kết tới 12 tháng </p>
        </div>
        <div class="introitem"> 
            <i class="bi bi-arrow-left-circle introimg"></i>
            <p> Có thể đổi trả tại thegioididong và dienmayxanh </p>
        </div>
    </div>
</header>
<body>
    <div class="category">
        <ul class="choosecate">
            <li>
                <a href="../iphone/iphone.php">
                    <div class="catesp cateip">
                        <img src="img/image/img-cateiphone.png" alt width="93" height="111">
                    </div>
                    <span> Iphone </span>
                </a>
            </li>
            <li>
                <a href="../mac/mac.php">
                    <div class="catesp catemac">
                        <img src="img/image/img-catemac.png" alt width="166" height="75">
                    </div>
                    <span> Mac </span>
                </a>
            </li>
            <li>
                <a href="../ipad/ipad.php">
                    <div class="catesp cateipad">
                        <img src="img/image/img-cateipad.png" alt width="116" height="102">
                    </div>
                    <span> Ipad </span>
                </a>
            </li>
            <li>
                <a href="../watch/watch.php">
                    <div class="catesp catewatch">
                        <img src="img/image/img-catewatch.png" alt width="132" height="84">
                    </div>
                    <span> Watch </span>
                </a>
            </li>
            <li>
                <a href="../sound/sound.php">
                    <div class="catesp catewatch">
                        <img src="img/image/img-catesound.png" alt width="170" height="124">
                    </div>
                    <span> Âm thanh</span>
                </a>
            </li>
            <li>
                <a href="../acess/acess.php">
                    <div class="catesp cateacess">
                        <img src="img/image/img-catephukien.png" alt width="96" height="96">
                    </div>
                    <span> Phụ kiện </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="content">
            <a href="iphone/iphone.php" class="contentlogo">
                <i class="bi bi-apple contenticon" style="font-style: normal;">Iphone</i>
            </a>
            <div class="contentpath cont-carousel cont-loaded">
                <div class="cont-stage-outer">
                        <?php 
                            $width = count($iphone)*248.5 + count($iphone)*10;
                            echo "<div class='cont-stage' style='transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width:".$width."px;'>";
                            foreach($iphone as $p) {
                                ?>
                                    <div class="cont-item active" style="width: 248.5px; margin-right: 10px">
                                        <div class="item">
                                            <a href="detail.php?id=<?php echo $p['id'] ?>">
                                                <div class="cont-img">
                                                    <img src="<?= $p['thumbnail'] ?>">
                                                </div>
                                                <h3> <?= $p['name'] ?> </h3>
                                                <span> 
                                                    <?php echo number_format($p['price'], 0, '', '.') ?>₫
                                                    <strike><?php echo number_format($p['discountPrice'], 0, '', '.') ?>₫</strike><br>
                                                    <small><?= $p['discountPercent'] ?></small>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                            }
                            echo "</div>";
                        ?>
                </div>
            </div>
    </div>
    <div class="content">
        <a href="/mac" class="contentlogo">
            <i class="bi bi-apple contenticon" style="font-style: normal;">Mac</i>
        </a>
        <div class="contentpath cont-carousel cont-loaded">
            <div class="cont-stage-outer">
                    <?php 
                        $width = count($mac)*248.5 + count($mac)*10;
                        echo "<div class='cont-stage' style='transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width:".$width."px;'>";
                        foreach($mac as $p) {
                            ?>
                                <div class="cont-item active" style="width: 248.5px; margin-right: 10px">
                                    <div class="item">
                                        <a href="detail.php?id=<?php echo $p['id'] ?>">
                                            <div class="cont-img">
                                                <img src="<?= $p['thumbnail'] ?>">
                                            </div>
                                            <h3> <?= $p['name'] ?> </h3>
                                            <span> 
                                                <?php echo number_format($p['price'], 0, '', '.') ?>₫
                                                <strike><?php echo number_format($p['discountPrice'], 0, '', '.') ?>₫</strike><br>
                                                <small><?= $p['discountPercent'] ?></small>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            <?php
                        }
                        echo "</div>";
                    ?>
            </div>
        </div>
    </div>
    <div class="content">
        <a href="/ipad" class="contentlogo">
            <i class="bi bi-apple contenticon" style="font-style: normal;">Ipad</i>
        </a>
        <div class="contentpath cont-carousel cont-loaded">
            <div class="cont-stage-outer">
                    <?php 
                        $width = count($ipad)*248.5 + count($ipad)*10;
                        echo "<div class='cont-stage' style='transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width:".$width."px;'>";
                        foreach($ipad as $p) {
                            ?>
                                <div class="cont-item active" style="width: 248.5px; margin-right: 10px">
                                    <div class="item">
                                        <a href="detail.php?id=<?php echo $p['id'] ?>">
                                            <div class="cont-img">
                                                <img src="<?= $p['thumbnail'] ?>">
                                            </div>
                                            <h3> <?= $p['name'] ?> </h3>
                                            <span> 
                                                <?php echo number_format($p['price'], 0, '', '.') ?>₫
                                                <strike><?php echo number_format($p['discountPrice'], 0, '', '.') ?>₫</strike><br>
                                                <small><?= $p['discountPercent'] ?></small>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            <?php
                        }
                        echo "</div>";
                    ?>
            </div>
        </div>
    </div>
    <div class="content">
        <a href="/watch" class="contentlogo">
            <i class="bi bi-apple contenticon" style="font-style: normal;">Watch</i>
        </a>
        <div class="contentpath cont-carousel cont-loaded">
            <div class="cont-stage-outer">
                    <?php 
                        $width = count($watch)*248.5 + count($watch)*10;
                        echo "<div class='cont-stage' style='transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width:".$width."px;'>";
                        foreach($watch as $p) {
                            ?>
                                <div class="cont-item active" style="width: 248.5px; margin-right: 10px">
                                    <div class="item">
                                        <a href="detail.php?id=<?php echo $p['id'] ?>">
                                            <div class="cont-img">
                                                <img src="<?= $p['thumbnail'] ?>">
                                            </div>
                                            <h3> <?= $p['name'] ?> </h3>
                                            <span> 
                                                <?php echo number_format($p['price'], 0, '', '.') ?>₫
                                                <strike><?php echo number_format($p['discountPrice'], 0, '', '.') ?>₫</strike><br>
                                                <small><?= $p['discountPercent'] ?></small>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            <?php
                        }
                        echo "</div>";
                    ?>
            </div>
        </div>
    </div>
    <div class="content">
        <a href="/sound" class="contentlogo">
            <i class="contenticon" style="font-style: normal;">Âm Thanh </i>
        </a>
        <div class="contentpath cont-carousel cont-loaded">
            <div class="cont-stage-outer">
                    <?php 
                        $width = count($sound)*248.5 + count($sound)*10;
                        echo "<div class='cont-stage' style='transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width:".$width."px;'>";
                        foreach($sound as $p) {
                            ?>
                                <div class="cont-item active" style="width: 248.5px; margin-right: 10px">
                                    <div class="item">
                                        <a href="detail.php?id=<?php echo $p['id'] ?>">
                                            <div class="cont-img">
                                                <img src="<?= $p['thumbnail'] ?>">
                                            </div>
                                            <h3> <?= $p['name'] ?> </h3>
                                            <span> 
                                                <?php echo number_format($p['price'], 0, '', '.') ?>₫
                                                <strike><?php echo number_format($p['discountPrice'], 0, '', '.') ?>₫</strike><br>
                                                <small><?= $p['discountPercent'] ?></small>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            <?php
                        }
                        echo "</div>";
                    ?>
            </div>
        </div>
    </div>
    <div class="content">
        <a href="/acess" class="contentlogo">
            <i class="contenticon" style="font-style: normal;">Phụ kiện</i>
        </a>
        <div class="contentpath cont-carousel cont-loaded">
            <div class="cont-stage-outer">
                    <?php 
                        $width = count($accessory)*248.5 + count($accessory)*10;
                        echo "<div class='cont-stage' style='transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width:".$width."px;'>";
                        foreach($accessory as $p) {
                            ?>
                                <div class="cont-item active" style="width: 248.5px; margin-right: 10px">
                                    <div class="item">
                                        <a href="detail.php?id=<?php echo $p['id'] ?>">
                                            <div class="cont-img">
                                                <img src="<?= $p['thumbnail'] ?>">
                                            </div>
                                            <h3> <?= $p['name'] ?> </h3>
                                            <span> 
                                                <?php echo number_format($p['price'], 0, '', '.') ?>₫
                                                <strike><?php echo number_format($p['discountPrice'], 0, '', '.') ?>₫</strike><br>
                                                <small><?= $p['discountPercent'] ?></small>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            <?php
                        }
                        echo "</div>";
                    ?>
            </div>
        </div>
    </div>
</body>
    <?php require_once('footer.php');?>
</html>