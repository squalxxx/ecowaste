@extends('layouts.app')

@section('content')
    <div class="hero">
        <div class="container">
            <h1>Отзывы</h1>

            <p>На этой странице мы публикуем отзывы о нас. Напишите свое мнение о наших услугах и работе
                специалистов, с которыми вы общались. Мы постоянно развиваемся и стремимся к высокому качеству
                обслуживания и благодаря Вашим отзывам, мы оперативно принимаем меры для его улучшения. Если вы
                хотите оставить отзыв или пожелание, то пишите нам на почту <a class="link"
                    href="mailto:help@ecowastegroup.ru"
                >help@ecowastegroup.ru</a></p>
            <p>Спасибо!</p>

            <p>&nbsp;</p>

            <div class="swiper reviews__slider swiper-initialized swiper-horizontal swiper-backface-hidden">
                <div
                    aria-live="polite"
                    class="swiper-wrapper"
                    id="swiper-wrapper-048cbf5dd310e85c"
                >
                    <a
                        class="swiper-slide swiper-slide-active"
                        data-fancybox="reviews"
                        href="{{ asset('storage/images/reviews/reviews-1.jpg') }}"
                    >
                        <img src="{{ asset('storage/images/reviews/reviews-1.jpg') }}">
                    </a>
                    <a
                        class="swiper-slide swiper-slide-next"
                        data-fancybox="reviews"
                        href="{{ asset('storage/images/reviews/reviews-2.jpg') }}"
                    >
                        <img src="{{ asset('storage/images/reviews/reviews-2.jpg') }}">
                    </a>
                    <a
                        class="swiper-slide"
                        data-fancybox="reviews"
                        href="{{ asset('storage/images/reviews/reviews-3.jpg') }}"
                    >
                        <img src="{{ asset('storage/images/reviews/reviews-3.jpg') }}">
                    </a>
                    <a
                        class="swiper-slide"
                        data-fancybox="reviews"
                        href="{{ asset('storage/images/reviews/reviews-4.jpg') }}"
                    >
                        <img src="{{ asset('storage/images/reviews/reviews-4.jpg') }}">
                    </a>
                </div>

                <div class="swiper-buttons">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
