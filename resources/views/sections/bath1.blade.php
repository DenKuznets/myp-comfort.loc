<section id="bath1">
    <div class="bath containers">
        <div class="bath__content">
            <div class="animate__animated bath__text">
                <h3>Городская баня № 2</h3>
                <h4>г. Арзамас, ул. Калинина, д. 32</h4>
                <p>Русская парная, веники, массажное кресло, парикмахерская, буфет, душевое отделение</p>
                <div class="bath__schedule">
                    <div class="bath__days">
                        <h4>График работы</h4>
                        <p class="bold">
                            Пн: выходной <br> <br>
                            Вт: санитарный день <br> <br>
                            Ср-Вс: круглосуточно
                        </p>
                    </div>
                    <div class="bath__hours">
                        <h4>Ежедневные сеансы</h4>
                        <p class="bold">с 12.00 до 14.00 <br><br>
                            с 14.30 до 16.30 <br><br>
                            с 17.00 до 19.00 <br><br>
                            с 19.30 до 21.30</p>
                    </div>
                </div>
                <button id="popAp" class="btn bath__btn">Стоимость</button>
            </div>
            <div class="animate__animated bath__image">
                {{-- <img src="{{ asset('assets/img/bath-img.png') }}" alt=""> --}}
                <div class="bath__swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="bath__card">
                                <img src="{{ asset('assets/img/bath1-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bath__card">
                                <img src="{{ asset('assets/img/bath1-1.jpg') }}" alt="">
                            </div>
                        </div>
                        {{-- <div class="swiper-slide">
                            <div class="bath__card">
                                <img src="{{ asset('assets/img/bath1-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bath__card">
                                <img src="{{ asset('assets/img/bath1-1.jpg') }}" alt="">
                            </div>
                        </div> --}}
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- If we need navigation buttons -->
                        <!-- <div class="swiper-button-prev green"></div>
          <div class="swiper-button-next green"></div> -->

                        <!-- If we need scrollbar -->
                        <!-- <div class="swiper-scrollbar"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
