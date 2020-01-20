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
</div>
<footer>
    @include('../inc/footer')
</footer>