<section class="section services">
    <div class="container">
        <h2 class="title">Наши услуги</h2>

        <div class="services__items">
            <div class="services__col">
                <a
                    class="services-item"
                    href="{{ route('services.disposal') }}"
                    style="background-image: url({{ asset('storage/images/services/services-img-4.png') }});"
                >
                    <span>Утилизация <br> отходов</span>
                </a>
            </div>

            <div class="services__col">
                <a
                    class="services-item"
                    href="{{ route('services.shipping') }}"
                    style="background-image: url({{ asset('storage/images/services/services-img-7.png') }});"
                >
                    <span>Транспортировка <br> отходов</span>
                </a>
            </div>

            <div class="services__col">
                <a
                    class="services-item"
                    href="{{ route('services.passportisation') }}"
                    style="background-image: url({{ asset('storage/images/services/services-img-8.png') }});"
                >
                    <span>Паспортизация отходов 1-4 класса опасности</span>
                </a>
            </div>
        </div>
    </div>
</section>
