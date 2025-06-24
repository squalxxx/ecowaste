<header class="Header">
    <div class="container">
        <div class="header-top">
            @if (app('settings')?->logotype)
                <a class="HeaderNavbar__brand" href="/">
                    <img
                        alt="Эковейст Групп"
                        class="navbar-brand"
                        src="{{ asset('storage/' . app('settings')?->logotype) }}"
                    >
                </a>
            @else
                <a class="HeaderNavbar__brand" href="/">
                    Ecowaste
                </a>
            @endif

            <div class="HeaderNavbar__address">
                <svg
                    fill="none"
                    height="25"
                    viewBox="0 0 25 25"
                    width="25"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <g clip-path="url(#clip0_5_138)">
                        <path
                            d="M12.4997 2.08333C8.46842 2.08333 5.20801 5.34375 5.20801 9.375C5.20801 14.8438 12.4997 22.9167 12.4997 22.9167C12.4997 22.9167 19.7913 14.8438 19.7913 9.375C19.7913 5.34375 16.5309 2.08333 12.4997 2.08333ZM12.4997 11.9792C11.0622 11.9792 9.89551 10.8125 9.89551 9.375C9.89551 7.9375 11.0622 6.77083 12.4997 6.77083C13.9372 6.77083 15.1038 7.9375 15.1038 9.375C15.1038 10.8125 13.9372 11.9792 12.4997 11.9792Z"
                            fill="#53B374"
                        />
                    </g>
                    <defs>
                        <clipPath id="clip0_5_138">
                            <rect
                                fill="white"
                                height="25"
                                width="25"
                            />
                        </clipPath>
                    </defs>
                </svg>

                <span>{{ app('settings')->address }}</span>
            </div>

            <div class="HeaderNavbar__phone">
                <svg
                    fill="none"
                    height="25"
                    viewBox="0 0 25 25"
                    width="25"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <g clip-path="url(#clip0_5_133)">
                        <path
                            d="M20.8438 16.0208C19.5625 16.0208 18.3229 15.8125 17.1667 15.4375C16.8021 15.3125 16.3958 15.4062 16.1146 15.6875L14.4792 17.7396C11.5312 16.3333 8.77083 13.6771 7.30208 10.625L9.33333 8.89583C9.61458 8.60417 9.69792 8.19792 9.58333 7.83333C9.19792 6.67708 9 5.4375 9 4.15625C9 3.59375 8.53125 3.125 7.96875 3.125H4.36458C3.80208 3.125 3.125 3.375 3.125 4.15625C3.125 13.8333 11.1771 21.875 20.8438 21.875C21.5833 21.875 21.875 21.2187 21.875 20.6458V17.0521C21.875 16.4896 21.4062 16.0208 20.8438 16.0208Z"
                            fill="#53B374"
                        />
                    </g>
                    <defs>
                        <clipPath id="clip0_5_133">
                            <rect
                                fill="white"
                                height="25"
                                width="25"
                            />
                        </clipPath>
                    </defs>
                </svg>

                <div class="phone-wrap">
                    <a class="phone" href="tel:{{ app('settings')->phone }}">
                        {{ app('settings')->phone }}
                    </a>

                    <a class="mail" href="mailto:{{ app('settings')->email }}">
                        {{ app('settings')->email }}
                    </a>
                </div>
            </div>

            <div class="header-buttons">
                <a
                    class="btn btn-green"
                    data-fancybox
                    data-src="#modalCallback"
                    style="color: #fff"
                >
                    Оставить заявку
                </a>
            </div>
        </div>

        <nav class="HeaderNavbar">
            <div class="HeaderNavbar__marker HeaderToggler d-block d-lg-none mr-1">
                <button
                    aria-expanded="false"
                    aria-label="Показать навигацию"
                    class="navbar-toggler collapsed"
                    data-target="#HeaderMenu"
                    data-toggle-menu
                    type="button"
                >
                    <svg
                        aria-hidden="true"
                        class="HeaderNavbar__svg"
                        data-icon="bars"
                        data-prefix="fal"
                        focusable="false"
                        role="img"
                        viewBox="0 0 448 512"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            class=""
                            d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"
                            fill="currentColor"
                        ></path>
                    </svg>
                </button>
            </div>

            <div class="HeaderMenu HeaderNavbar__nav mx-lg-auto" id="HeaderMenu">
                <div class="d-flex d-lg-none justify-content-end border-bottom bg-gray-light p-2">
                    <button
                        aria-expanded="false"
                        aria-label="Скрыть навигацию"
                        class="HeaderMenu__close  btn btn-link"
                        data-target="#HeaderMenu"
                        data-toggle-menu
                        type="button"
                    >
                        <svg
                            aria-hidden="true"
                            class="octicon octicon-x text-gray"
                            height="24"
                            version="1.1"
                            viewBox="0 0 24 24"
                            width="24"
                        >
                            <path
                                d="M5.72 5.72a.75.75 0 011.06 0L12 10.94l5.22-5.22a.75.75 0 111.06 1.06L13.06 12l5.22 5.22a.75.75 0 11-1.06 1.06L12 13.06l-5.22 5.22a.75.75 0 01-1.06-1.06L10.94 12 5.72 6.78a.75.75 0 010-1.06z"
                                fill-rule="evenodd"
                            >
                            </path>
                        </svg>
                    </button>
                </div>

                <ul class="HeaderMenu__nav nav">
                    <li class="nav-item position-relative">
                        <a
                            class="nav-link"
                            href="/services"
                            type="button"
                        >
                            <span class="DropdownMenu__toggle">Услуги</span>
                        </a>

                        <div
                            aria-hidden="true"
                            aria-labelledby="navWaste"
                            class="DropdownMenu"
                            id="navWaste"
                            role="menu"
                            tabindex="-1"
                        >
                            <div class="DropdownMenu__Nav">
                                <a class="DropdownMenu__Item" href="/services/disposal">
                                    <div class="DropdownItem__head">Утилизация отходов</div>
                                </a>

                                <a class="DropdownMenu__Item" href="/services/shipping">
                                    <div class="DropdownItem__head">Транспортировка отходов</div>
                                </a>

                                <a class="DropdownMenu__Item" href="/services/passportisation">
                                    <div class="DropdownItem__head">Паспортизация отходов 1-4 класса опасности</div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item position-relative">
                        <a class="nav-link" href="/about">О нас</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/reviews">Отзывы</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/stocks">Акции</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
