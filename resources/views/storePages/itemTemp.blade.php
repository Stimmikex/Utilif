<header>
    @include('../../inc/header')
</header>
<div class="item">
    <p> {{  $itemName = request()->segment(count(request()->segments())) }} </p>
    @foreach ($items as $itemsChecker)
        @if ($itemsChecker->name == $itemName)
            <div class="item__container">
                <div class="item__container-item-info">
                    @foreach ($types as $type)
                        @if ($type->id == $itemsChecker->type_id)
                            <p>Type: {{$type->name}}</p>  
                        @endif
                    @endforeach
                    @foreach ($brands as $brand)
                        @if ($brand->id == $itemsChecker->brand_id)
                            <img src="../img/BrandLogos/{{$brand->brandLogo}}" alt="">  
                        @endif
                    @endforeach
                </div>
                <div class="item__container-item-image">
                    @foreach ($itemImages as $img)
                        @if ($itemsChecker->id == $img->item_id)
                            @if ($img->item_id == $itemsChecker->id)
                                <img src="{{$img->img}}" alt="">
                            @endif
                        @endif
                    @endforeach
                </div>
                <div class="item__container-item-tags">
                    <p>Price: {{$itemsChecker->price}}kr</p>
                    <a href="{{ URL::to('add-to-cart/'. $itemsChecker->id) }}">Add to Cart</a>
                </div>
            </div>
        @endif
    @endforeach
</div>
<footer>
    @include('../../inc/footer')
</footer>