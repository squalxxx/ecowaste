@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Регистрация</div>

                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end" for="login">Логин</label>

                                <div class="col-md-6">
                                    <input
                                        autocomplete="login"
                                        autofocus
                                        class="form-control @error('login') is-invalid @enderror"
                                        id="login"
                                        name="login"
                                        placeholder="Придумайте логин"
                                        required
                                        type="text"
                                        value="{{ old('login') }}"
                                    >

                                    @error('login')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end" for="fullname">Как вас зовут?</label>

                                <div class="col-md-6">
                                    <input
                                        autocomplete="fullname"
                                        class="form-control @error('fullname') is-invalid @enderror"
                                        id="fullname"
                                        name="fullname"
                                        placeholder="Имя и фамилия"
                                        required
                                        type="text"
                                        value="{{ old('fullname') }}"
                                    >

                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end" for="email">Email</label>

                                <div class="col-md-6">
                                    <input
                                        autocomplete="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="email"
                                        name="email"
                                        placeholder="example@email.com"
                                        required
                                        type="email"
                                        value="{{ old('email') }}"
                                    >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end" for="phone">Номер телефона</label>

                                <div class="col-md-6">
                                    <input
                                        autocomplete="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        id="phone"
                                        name="phone"
                                        placeholder="+7 (123) 456 78-90"
                                        required
                                        type="tel"
                                        value="{{ old('phone') }}"
                                    >

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end" for="password">Пароль</label>

                                <div class="col-md-6">
                                    <input
                                        autocomplete="new-password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="password"
                                        name="password"
                                        placeholder="Придумайте пароль"
                                        required
                                        type="password"
                                    >

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end" for="password-confirm">Подтверждение
                                    пароля</label>

                                <div class="col-md-6">
                                    <input
                                        autocomplete="new-password"
                                        class="form-control"
                                        id="password-confirm"
                                        name="password_confirmation"
                                        placeholder="Подтвердите пароль"
                                        required
                                        type="password"
                                    >
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary" type="submit">
                                        Зарегистрироваться
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
