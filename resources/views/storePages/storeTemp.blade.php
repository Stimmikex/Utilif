<header>
    @include('../inc/header')
</header>
<div class="content">
    <div class="content__brandLogos">
        @foreach ($brands as $b)
            <img src="/img/BrandLogos/{{$b->brandLogo}}" alt="">   
        @endforeach
    </div>
    <?php
        $itemName = request()->segment(count(request()->segments()))
    ?>
    @if ($itemName == "Skis")
        <div class="content__skiPicker">
            <a href="../skiPicker"></a>
        </div>
    @endif
    @include('../../addonPages/itemSearch')
    <div class="content__items">
        @foreach ($items as $itemsChecker)
            @if ($itemsChecker->type_id == $types[0]->id)
                @foreach ($itemImages as $img)
                    @if ($itemsChecker->id == $img->item_id)
                        <div class="content__items-item">
                            <a href="{{'../Product/'.$itemsChecker->name}}">
                            <img src="{{$img->img}}" alt="">
                            @if ($img->item_id == $itemsChecker->id)
                                <div class="content__items-item-info">
                                    <p>{{$itemsChecker->name}}</p>
                                    <p>Price: {{$itemsChecker->price}}kr</p>
                                </div>
                                <div class="content__items-item-tags">
                                    @foreach ($brands as $brand)
                                        @if ($brand->id == $itemsChecker->brand_id)
                                            <img src="/img/BrandLogos/{{$brand->brandLogo}}" alt="">  
                                        @endif
                                    @endforeach
                                    @foreach ($types as $type)
                                        @if ($type->id == $itemsChecker->type_id)
                                            <p>Type: {{$type->name}}</p>  
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                            </a>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
</div>
<footer>
    @include('../inc/footer')
</footer>