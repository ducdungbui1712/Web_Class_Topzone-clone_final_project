<link rel="stylesheet" href="CSS/navbar.css"> 
<script src="js/navbar.js">
</script>
<nav>
    <div class="head">
            <div class="logo-topzone">
                <a href="/index.php">
                    <i class="topzone-logo"></i>
                </a>
                <a href="#">
                    <i class="topzone-autho"></i>
                </a>
            </div>
            <ul class="menu">
                <li class="menu-ip ">
                    <a href="../iphone/iphone.php">
                        <span>iPhone</span>
                    </a>
                </li>
                <li class="menu-mac ">
                    <a href="../mac/mac.php">
                        <span>Mac</span>
                    </a>
                </li>
                <li class="menu-ipad ">
                    <a href="../ipad/ipad.php">
                        <span>iPad</span>
                    </a>
                </li>
                <li class="menu-watch ">
                    <a href="../watch/watch.php">
                        <span>Watch</span>
                    </a>
                </li>
                <li class="menu-sound ">
                    <a href="../sound/sound.php">
                        <span>Âm thanh</span>
                    </a>
                </li>
                <li class="menu-access ">
                    <a href="../acess/acess.php">
                        <span>Phụ kiện</span>
                    </a>
                </li>
                <li class="menu-news ">
                    <a href="../tekzone.php">
                        <span>TekZone</span>
                    </a>
                </li>
            </ul>
            <div class="search-cart">
                <div class="search-sp">
                    <i class="topzone-search"></i>
                </div>
                <a href="/cart.php" class="cart">
                    <i class="topzone-cart"></i>
                </a>
                <div class="view-cart">
                    <i class="topzone-cohang"></i>
                    <span>Đã thêm sản phẩm vào giỏ hàng</span>
                    <a href="/cart.php">Xem giỏ hàng</a>
                </div>
            </div>
            <form class="form-search" onsubmit="return false;">
                <div class="click-search">
                    <label for="search-input"><i class="topzone-search"></i></label>
                    <input id="search-input" oninput="suggest(this.value)" type="text" placeholder="Tìm kiếm sản phẩm" autocomplete="off">
                    <i class="topzone-delSearch"></i>
                </div>
                <button type="submit" class="submit-search" style="display:none">
                </button>
                <div class="sg-search" style="display: none;">
                    <small class="quicklink">Có phải bạn muốn tìm</small>
                    <div class="text-search">
                            <a href="/iphone"><span>iPhone</span></a>
                            <a href="/iphone-11"><span>iPhone 11</span></a>
                            <a href="/iphone-xr"><span>iPhone XR</span></a>
                    </div>
                    <small>Sản phẩm gợi ý</small>
                    <ul class="list-sg-search">
                    </ul>
                </div>
            </form>
        </div>
</nav>

<div class="bg-sg" style="display: none;"></div>


<script>

</script>

