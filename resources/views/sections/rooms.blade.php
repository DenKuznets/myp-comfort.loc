<section id="rooms">
    <div class="rooms containers">
        <h2>Номерные отделения</h2>
        <div class="rooms__cards">
            <div class="rooms__card">
                <picture>
                    <source srcset="{{ asset('assets/img/room1-1920.jpg') }}" media="(min-width: 1025px)">
                    <source srcset="{{ asset('assets/img/room1-1024.jpg') }}" media="(max-width: 1024px)">
                    <source srcset="{{ asset('assets/img/room1-768.jpg') }}" media="(max-width: 768px)">
                    <source srcset="{{ asset('assets/img/room1-480.jpg') }}" media="(max-width: 480px)">
                    <source srcset="{{ asset('assets/img/room1-360.jpg') }}" media="(max-width: 360px)">
                    <img src="{{ asset('assets/img/room1-1920.jpg') }}" alt="">
                </picture>
                <h4>Русская парная + бассейн</h4>
                <button class="btn">Стоимость</button>
            </div>
            <div class="rooms__card">
                <picture>
                    <source srcset="{{ asset('assets/img/room2-1920.jpg') }}" media="(min-width: 1025px)">
                    <source srcset="{{ asset('assets/img/room2-1024.jpg') }}" media="(max-width: 1024px)">
                    <source srcset="{{ asset('assets/img/room2-768.jpg') }}" media="(max-width: 768px)">
                    <source srcset="{{ asset('assets/img/room2-480.jpg') }}" media="(max-width: 480px)">
                    <source srcset="{{ asset('assets/img/room2-360.jpg') }}" media="(max-width: 360px)">
                    <img src="{{ asset('assets/img/room2-1920.jpg') }}" alt="">
                </picture>
                <h4>Русская парная + обливная бочка</h4>
                <button class="btn">Стоимость</button>
            </div>
        </div>
    </div>
</section>
