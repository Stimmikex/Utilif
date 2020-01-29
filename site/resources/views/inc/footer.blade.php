<div class="footer">
    <div class="footer__upper">
        <div class="footer__upper__left">
            <p>Opening Hours</p>
            @foreach ($stores as $s)
                <h2>{{$s->name}}</h2>
                <div>
                    <ul>
                        @foreach ($opens as $o)
                            @if ($s->id == $o->store_id)
                                <li>{{$o->day}} : {{$o->time}}</li> 
                            @endif  
                        @endforeach 
                    </ul>
                </div>
            @endforeach
        </div>
        <div class="footer__upper__center">
            <div class="footer__upper__center__left">
                <p>My Account</p>
                <img src="img/footer/accountIcon.png" alt="">
            </div>
            <div class="footer__upper__center__center">
                <p>About</p>
                <img src="img/footer/deliIcon.jpg" alt="">
            </div>
            <div class="footer__upper__center__right">
                <p>Info</p>
                <img src="img/footer/jobIcon.png" alt="">
            </div>
        </div>
        <div class="footer__upper__right">
            {{-- <p>New Letter</p>
            <form action="">
                <input type="text">
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <input type="submit">
            </form> --}}
            <a href="#">Fyrirspurnir</a>
        </div>
    </div>
    <div class="footer__lower">
        <div class="footer__lower__level1">
            <div>
                <img src="img/footer/phoneIcon.png" alt="">
                <p>Phone</p>
            </div>
            <div>
                <img src="img/footer/chatIcon.png" alt="">
                <p>Chat</p>
            </div>
            <div>
                <img src="img/footer/instaIcon.png" alt="">
                <p>Social</p>
            </div>
        </div>
        <div class="footer__lower__level2">
            <p>Styrmir Óli Þorsteinsson</p>
            <p>styrmir97@gmail.com</p>
        </div>
    </div>
</div>