<footer id="footer">
    <div class="footer containers">
        <div class="footer__block1">
            <div class="footer__logo">
                <a
                 {{-- href="{{route("index)}}" --}}
                ></a>
                <img class="svg" src="{{ asset('assets/img/logo-footer.svg') }}" alt="">
            </div>
            <div class="footer__rights">© <?php echo date('Y'); ?> , Все права защищены</div>
        </div>
        <div class="footer__block2">
            <nav class="footer__nav">
                <ul>
                    <li><a href="#about">О компании</a></li>
                    <li><a href="#baths">Бани</a></li>
                    <li><a href="#laundry">Прачечная</a></li>
                    <li><a href="#info">Информация</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                </ul>
            </nav>
            <div class="footer__block2-pa">
                <div class="footer__block2-pa-policy">Политика конфиденциальности</div>
                <div class="footer__block2-pa-alexmedia">Сайт разработан компанией <a href="https://alex-media.ru/">ALEX–MEDIA</a> </div>
            </div>
        </div>
        <div class="footer__disclaimer">Цены на сайте не являются публичной офертой</div>
    </div>
    @include('layouts.popupBath') 
    @include('layouts.popupRoom1') 
    @include('layouts.popupRoom2') 
    @include('layouts.popupLaundry') 
</footer>
