<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<header>
    @include('../inc/header')
</header>
<div class="content">
    <div class="content__brandLogos">
        @foreach ($brands as $b)
            <img src="img/BrandLogos/{{$b->brandLogo}}" alt="">   
        @endforeach
    </div>
    <div class="content__items">
        @foreach ($itemImages as $img)
            <div>
                <img src="{{$img->img}}" alt="">
            </div>
        @endforeach
    </div>
</div>
<footer>
    @include('../inc/footer')
</footer>