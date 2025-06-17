@extends('lk.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редактировать профиль</div>

                    <div class="card-body">
                        <form action="{{ route('lk.profile.update') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end" for="login">Логин</label>
                                <div class="col-md-6">
                                    <input
                                        autocomplete="login"
                                        class="form-control @error('login') is-invalid @enderror"
                                        id="login"
                                        name="login"
                                        required
                                        type="text"
                                        value="{{ old('login', $user->login) }}"
                                    >
                                    @error('login')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end" for="fullname">Полное имя</label>
                                <div class="col-md-6">
                                    <input
                                        autocomplete="fullname"
                                        class="form-control @error('fullname') is-invalid @enderror"
                                        id="fullname"
                                        name="fullname"
                                        required
                                        type="text"
                                        value="{{ old('fullname', $user->fullname) }}"
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
                                        required
                                        type="email"
                                        value="{{ old('email', $user->email) }}"
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
                                        type="tel"
                                        value="{{ old('phone', $user->phone) }}"
                                    >
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end" for="password">Новый пароль</label>
                                <div class="col-md-6">
                                    <input
                                        autocomplete="new-password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="password"
                                        name="password"
                                        type="password"
                                    >
                                    <small class="text-muted">Оставьте пустым, если не хотите менять пароль</small>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end" for="password-confirm">Подтвердите
                                    пароль</label>
                                <div class="col-md-6">
                                    <input
                                        autocomplete="new-password"
                                        class="form-control"
                                        id="password-confirm"
                                        name="password_confirmation"
                                        type="password"
                                    >
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary" type="submit">
                                        Сохранить изменения
                                    </button>

                                    <a class="btn btn-secondary" href="{{ url()->previous() }}">
                                        Вернуться назад
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
