<div class="header__add__upper">
    <ul class="header__add__upper__ul">
        <li><a href="#" class="btn btn-default">Facebook</a></li>
        <li><a href="#" class="btn btn-default">Instagram</a></li>
        <li><a href="#" class="btn btn-default">About</a></li>
        <li><a href="#" class="btn btn-default">Location</a></li>
    </ul>
</div>
<div class="header__color">
    <div class="header__container" id="header__container">
            <img src="img/sitelogo.png" alt="" class="headerIcon">
            <div class="header">
                <!--Div Search bar-->
                <div class="header__upper" id="MyCode" onload="FixMyCode()">
                    <div class="header__upper__search">
                        <input type="text">
                        <!-- /img/searchIcon.png -->
                        <button><img src="/img/searchIcon.png" alt="searchimage"></button>
                    </div>
                    <!--Div Cart and Info-->
                    <div class="header__upper__info">
                        <a href="pages/info.php" class="btn btn-default">Info<img src="/img/infoIcon.png" alt="info image" class="header__upper__info_image"></a>
                        <a href="pages/cart.php" class="btn btn-default">Cart<img src="/img/cartIcon.png" alt="cart image" class="header__upper__info_image"></a>
                        <a href="{{ route('login') }}" class="btn btn-default">Account<img src="/img/accountIcon.png" alt="account image" class="header__upper__info_image"></a>
                    </div>
                </div>
                <!--Div category-->
                <div class="header__lower">
                    <div class="header__lower__div">
                        <a href="javascript:void(0);" class="icon" onclick="displayHead()">
                            <i class="fa fa-bars"><img src="/img/hamIcon.png" alt="hamburgermenu Icon"></i>
                        </a>
                    </div>
                    <ul class="header__lower_ul" id="menuhead">
                        <li><a href="{{ route('utivist') }}" class="btn btn-default">Útivist</a></li>
                        <li><a href="{{ route('sund') }}" class="btn btn-default">Sund</a></li>
                        <li><a href="{{ route('skor') }}" class="btn btn-default">Skór</a></li>
                        <li><a href="{{ route('ithrottir') }}" class="btn btn-default">Íþróttarfatnaður</a></li>
                        <li><a href="{{ route('skidi') }}" class="btn btn-default">Skíðavörur</a></li>
                        <li><a href="{{ route('tilbod') }}" class="btn btn-default">Tilboðsvörur</a></li>
                        <div class="header__lower_ul__div">
                            <div class="btn btn-default" id="tester">
                                <p class="header__lower_ul__div__div__text">Testing</p>
                                <p onclick="displayUlList()" class="header__lower_ul__div__div__down">+</p>
                                <ul class="header__lower_ul__div_ul" id="DUL">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                </ul>
                            </div>
                            <a href="pages/info.php" class="btn btn-default">Info<img src="/img/infoIcon.png" alt="info image" class="header__upper__info_image"></a>
                            <a href="pages/cart.php" class="btn btn-default">Cart<img src="/img/cartIcon.png" alt="cart image" class="header__upper__info_image"></a>
                            <a href="{{ route('login') }}" class="btn btn-default">Account<img src="/img/accountIcon.png" alt="account image" class="header__upper__info_image"></a>
                        </div>
                    </ul>
                </div>    
            </div>
        </div>
</div>
<div class="header__add__lower">
    <p>here are some cool things</p>
</div>
<script>
    function displayHead() {
        var x = document.getElementById("menuhead");
        if (x.style.display === "flex") {
            x.style.display = "none";
        } else {
            x.style.zIndex = 1;
            x.style.display = "flex";
        }
    }
    function GodDamn() {
        document.getElementById("MyCode").style.width = "";
        document.getElementById("MyCode").style.width = "100%";
    }
    function FixMyCode() {
        setTimeout(GodDamn(), 1000);
    }
    function displayUlList() {
        var x = document.getElementById("DUL");
        if (x.style.display === "flex") {
            x.style.display = "none";
        } else {
            x.style.zIndex = 2;
            x.style.display = "flex";
        }
    }
</script>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("header__container");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>