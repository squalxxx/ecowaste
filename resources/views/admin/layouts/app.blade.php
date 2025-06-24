<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <!-- CSRF Token -->
    <meta content="{{ csrf_token() }}" name="csrf-token">

    <title>Эковейст | Личный кабинет</title>

    <!-- Fonts -->
    <link href="//fonts.bunny.net" rel="dns-prefetch">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="navbar-brand">
                    <a class="link-dark link-offset-2 link-underline-opacity-0" href="/">
                        Эковейст
                    </a>
                    |
                    <a class="link-dark link-offset-2 link-underline-opacity-0" href="/admin">
                        Админ-панель
                    </a>
                </div>

                <button
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}"
                    class="navbar-toggler"
                    data-bs-target="#navbarSupportedContent"
                    data-bs-toggle="collapse"
                    type="button"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.requests.index') }}">Заявки</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.pages.index') }}">Страницы</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.settings.edit') }}">Настройки сайта</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a
                                    aria-expanded="false"
                                    aria-haspopup="true"
                                    class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                    v-pre
                                >
                                    {{ Auth::user()->fullname }}
                                </a>

                                <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('admin.profile.edit') }}">
                                        Настройки профиля
                                    </a>

                                    <a
                                        class="dropdown-item"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"
                                    >
                                        Выйти
                                    </a>

                                    <form
                                        action="{{ route('logout') }}"
                                        class="d-none"
                                        id="logout-form"
                                        method="POST"
                                    >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
