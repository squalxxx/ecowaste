@extends('layouts.app')

@section('content')
    <div class="hero bg-gray" id="hero">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Утилизация отходов</h1>
                    <p class="lead">Полный комплекс работ по утилизации отходов III-V классов опасности</p>
                    <ul>
                        <li>сбор информации и систематизация данных об отходах и способах их обезвреживания и (или)
                            утилизации;</li>
                        <li>поставка материалов для сбора и ликвидации отходов;</li>
                        <li>системы хранения отходов (специальная тара);</li>
                        <li>вывоз (транспортирование) отходов;</li>
                        <li>утилизация, обезвреживание и размещение широкого спектра отходов III-V классов
                            опасности.</li>
                    </ul>
                </div>

                <div class="col-sm-4 d-none d-md-flex align-items-center justify-content-end">
                    <svg
                        aria-hidden="true"
                        class="svg-inline hero-icon text-secondary"
                        data-icon="recycle"
                        data-prefix="fal"
                        focusable="false"
                        role="img"
                        viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            class=""
                            d="M201.728 62.049l-43.385 69.459c-3.511 5.622-10.916 7.332-16.537 3.819l-6.781-4.237c-5.619-3.511-7.329-10.912-3.819-16.533l43.387-69.48c37.575-60.12 125.263-60.084 162.816 0l46.217 74.015 12.037-52.14c1.491-6.458 7.934-10.484 14.392-8.993l7.794 1.799c6.458 1.491 10.484 7.934 8.993 14.392l-21.633 93.702c-1.491 6.458-7.934 10.484-14.392 8.993l-93.702-21.633c-6.458-1.491-10.484-7.934-8.993-14.392l1.799-7.794c1.491-6.458 7.934-10.484 14.392-8.993l52.202 12.052-46.251-74.047c-25.002-40.006-83.467-40.099-108.536.011zm295.56 239.071l-52.939-84.78c-3.511-5.623-10.916-7.334-16.538-3.821l-6.767 4.228c-5.62 3.512-7.329 10.913-3.819 16.534l52.966 84.798c26.605 42.568-4.054 97.92-54.272 97.92H310.627l37.858-37.858c4.686-4.686 4.686-12.284 0-16.97l-5.656-5.656c-4.686-4.686-12.284-4.686-16.97 0l-68 68c-4.686 4.686-4.686 12.284 0 16.971l68 68c4.686 4.686 12.284 4.686 16.97 0l5.656-5.657c4.686-4.686 4.686-12.284 0-16.971L310.627 448H415.88c75.274 0 121.335-82.997 81.408-146.88zM41.813 318.069l55.803-89.339 12.044 52.166c1.491 6.458 7.934 10.484 14.392 8.993l7.794-1.799c6.458-1.491 10.484-7.934 8.993-14.392l-21.633-93.702c-1.491-6.458-7.934-10.484-14.392-8.993l-93.702 21.633c-6.458 1.491-10.484 7.934-8.993 14.392l1.799 7.794c1.491 6.458 7.934 10.484 14.392 8.993l52.193-12.05-55.796 89.355C-25.188 364.952 20.781 448 96.115 448H196c6.627 0 12-5.373 12-12v-8c0-6.627-5.373-12-12-12H96.078c-50.199 0-80.887-55.335-54.265-97.931z"
                            fill="currentColor"
                        ></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    @include('blocks.why-us')

    <section class="section" id="waste">
        <div class="container">
            <h2>Принимаем отходы I-IV класса опасности</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="waste__thumb">
                        <img
                            alt=""
                            class="waste__thumb__image"
                            src="{{ asset('storage/images/waste/waste-img-1.jpg') }}"
                        >
                        <div class="name">Медицинские отходы</div>
                        <div class="price">от 35 р/кг</div>
                        <div class="waste__list">
                            <ul>
                                <li>Лекарственные отходы</li>
                                <li>Бактерицидные лампы</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="waste__thumb">
                        <img
                            alt=""
                            class="waste__thumb__image"
                            src="{{ asset('storage/images/waste/waste-img-2.jpg') }}"
                        >
                        <div class="name">Лабораторные отходы</div>
                        <div class="price">от 50 р/кг</div>
                        <div class="waste__list">
                            <ul>
                                <li>Отходы органических, неорганических кислот</li>
                                <li>Отходы щелочей и гидроксидов</li>
                                <li>Отходы солей</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="waste__thumb">
                        <img
                            alt=""
                            class="waste__thumb__image"
                            src="{{ asset('storage/images/waste/waste-img-3.jpg') }}"
                        >
                        <div class="name">Промышленные отходы</div>
                        <div class="price">от 17,50 р/кг</div>
                        <div class="waste__list">
                            <ul>
                                <li>Гальванические шламы</li>
                                <li>Лакокрасочные материалы</li>
                                <li>Конденсаторы и трансформаторы</li>
                                <li>Отработанные аккумуляторы</li>
                                <li>Чистящие и моющие средства</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="waste__thumb">
                        <img
                            alt=""
                            class="waste__thumb__image"
                            src="{{ asset('storage/images/waste/waste-img-4.jpg') }}"
                        >
                        <div class="name">Отходы нефтепродуктов</div>
                        <div class="price">от 3,50 р/кг</div>
                        <div class="waste__list">
                            <ul>
                                <li>Обтирочный материал, загрязненный маслами</li>
                                <li>Нефтешламы</li>
                                <li>Отработанные масла</li>
                                <li>Отходы производства нефти и газа, сланцев</li>
                                <li>Смазочно-охлаждающие жидкости (СОЖ)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="waste__thumb">
                        <img
                            alt=""
                            class="waste__thumb__image"
                            src="{{ asset('storage/images/waste/waste-img-5.jpg') }}"
                        >
                        <div class="name">Другое</div>
                        <div class="price">от 9 руб/кг</div>
                        <div class="waste__list">
                            <ul>
                                <li>Пищевые отходы</li>
                                <li>Оргтехника</li>
                                <li>Архивная документация, бумага, картона</li>
                                <li>Отходы спецодежды</li>
                                <li>Конфискат</li>
                                <li>Светодиодные лампы</li>
                                <li>Утилизация шин и покрышек</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('blocks.how-work')

    @include('blocks.about')
@endsection
