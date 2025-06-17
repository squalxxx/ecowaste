@extends('layouts.app')

@section('content')
    <div class="hero">
        <div class="container">
            <h1 style="color:#000;">Услуги</h1>
        </div>
    </div>

    <div class="container">
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

    @include('blocks.how-work')

    @include('blocks.about')
@endsection
