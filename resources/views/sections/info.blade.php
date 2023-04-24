<section id="info">
    <div class="info containers">
        <h2>Важная информация</h2>
        <div class="info__cards">
            <div class="info__card info__card-important">
                <picture info__card-img>
                    <source srcset="{{ asset('assets/img/important1920.jpg') }}" media="(min-width: 1025px)">
                    <source srcset="{{ asset('assets/img/important1024.jpg') }}" media="(min-width: 1024px)">
                    <source srcset="{{ asset('assets/img/important768.jpg') }}" media="(min-width: 768px)">
                    <source srcset="{{ asset('assets/img/important480.jpg') }}" media="(min-width: 480px)">
                    <source srcset="{{ asset('assets/img/important360.jpg') }}" media="(min-width: 360px)">
                    <img src="{{ asset('assets/img/important-img.jpg') }}" alt="">
                </picture>
                <div class="info__card-text">
                    <p class="bold important-header">Мы не работаем 15 марта!</p>
                    <p style="padding-bottom: 20px; margin-bottom: auto">Наша баня не работает в данный момент из-за технических неполадок</p>
                    <a href="" class="info__card-text-details">Подробнее</a>
                </div>
            </div>
            <div class="info__card">
                <div class="info__card-text">
                    <p class="bold">График работы на 8 марта</p>
                    <p style="padding-bottom: 20px; margin-bottom: auto">Мы работаем для вас с 10:00 до 19:00! Если у вас намечается большое застолье,</p>
                    <a href="" class="info__card-text-details">Подробнее</a>
                </div>
            </div>
            <div class="info__card">
                <div class="info__card-text">
                    <p class="bold">Ищем нового сотрудника</p>
                    <p style="padding-bottom: 20px; margin-bottom: auto">Ищем сотрудника в баню на постоянную работу в центре города. Требования: Опыт…</p>
                    <a href="" class="info__card-text-details">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>
