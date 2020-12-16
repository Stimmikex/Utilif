<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/>
</head>
<div class="header__add__upper">
    <ul class="header__add__upper__ul">
        <li><a href="#" class="btn btn-default">Facebook</a></li>
        <li><a href="#" class="btn btn-default">Instagram</a></li>
        <li><a href="#" class="btn btn-default">About</a></li>
        <li><a href="#" class="btn btn-default">Location</a></li>
    </ul>
</div>
<div class="header__color" id="header__color">
    <div class="header__container">
            <img src="/img/header/sitelogo.png" alt="" class="headerIcon">
            <div class="header">
                <!--Div Search bar-->
                <div class="header__upper" id="MyCode" onload="FixMyCode()">
                    <div class="header__upper__search">
                        <input type="text">
                        <!-- /img/searchIcon.png -->
                        <button><img src="/img/header/searchIcon.png" alt="searchimage"></button>
                    </div>
                    <!--Div Cart and Info-->
                    <div class="header__upper__info">
                        <a href="pages/info.php" class="btn btn-default">Info<img src="/img/header/infoIcon.svg" alt="info image" class="header__upper__info_image"></a>
                        <a href="/cart" class="btn btn-default">Cart ({{ count((array) session('cart')) }}) <img src="/img/header/cartIcon.svg" alt="cart image" class="header__upper__info_image"></a>
                        <a href="{{ route('login') }}" class="btn btn-default">Account<img src="/img/header/accountIcon.svg" alt="account image" class="header__upper__info_image"></a>
                    </div>
                </div>
                <!--Div category-->
                <div class="header__lower">
                    <div class="header__lower__div">
                        <a href="javascript:void(0);" class="icon" onclick="displayHead()">
                            <i class="fa fa-bars"><img src="/img/header/hamIcon.png" alt="hamburgermenu Icon"></i>
                        </a>
                    </div>
                    <ul class="header__lower_ul" id="menuhead">
                        <li><a href="{{ route('Skis') }}" class="btn btn-default">Skis</a></li>
                        <li><a href="{{ route('Repair') }}" class="btn btn-default">Repair</a></li>
                        <li><a href="{{ route('Outdoor') }}" class="btn btn-default">Outdoor</a></li>
                        <li><a href="{{ route('Bikes') }}" class="btn btn-default">Bikes</a></li>
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
                            <a href="pages/info.php" class="btn btn-default">Info<img src="/img/header/infoIcon.svg" alt="info image" class="header__upper__info_image"></a>
                            <a href="/cart" class="btn btn-default">Cart ({{ count((array) session('cart')) }}) <img src="/img/header/cartIcon.svg" alt="cart image" class="header__upper__info_image"></a>
                            <a href="{{ route('login') }}" class="btn btn-default">Account<img src="/img/header/accountIcon.svg" alt="account image" class="header__upper__info_image"></a>
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
            x.style.display = "0px";
        } else {
            x.style.zIndex = 1;
            x.style.display = "flex";
            x.style.display = "0px";
        }
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

var header = document.getElementById("header__color");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>