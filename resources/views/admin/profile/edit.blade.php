@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Настройки профиля</h1>

        @if (session('alert'))
            <div class="alert alert-success">{{ session('alert') }}</div>
        @endif

        <form
            action="{{ route('admin.profile.update') }}"
            class="w-50"
            method="POST"
        >
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label" for="login">Логин</label>

                <input
                    class="form-control @error('login') is-invalid @enderror"
                    id="login"
                    name="login"
                    required
                    type="text"
                    value="{{ old('login', $user->login) }}"
                >

                @error('login')
                    <span class="form-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="fullname">Полное имя</label>

                <input
                    class="form-control @error('fullname') is-invalid @enderror"
                    id="fullname"
                    name="fullname"
                    required
                    type="text"
                    value="{{ old('fullname', $user->fullname) }}"
                >

                @error('fullname')
                    <span class="form-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="phone">Номер телефона</label>

                <input
                    class="form-control @error('phone') is-invalid @enderror"
                    id="phone"
                    name="phone"
                    required
                    type="tel"
                    value="{{ old('phone', $user->phone) }}"
                >

                @error('phone')
                    <span class="form-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">Email</label>

                <input
                    class="form-control @error('email') is-invalid @enderror"
                    id="email"
                    name="email"
                    required
                    type="email"
                    value="{{ old('email', $user->email) }}"
                >

                @error('email')
                    <span class="form-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="password">Новый пароль</label>

                <input
                    class="form-control @error('password') is-invalid @enderror"
                    id="password"
                    name="password"
                    type="password"
                    value="{{ old('password') }}"
                >

                @error('password')
                    <span class="form-text">{{ $message }}</span>
                @else
                    <span class="form-text">Оставьте пустым, если не хотите менять пароль</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="password_confirmation">Подтвердите пароль</label>

                <input
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    value="{{ old('password_confirmation') }}"
                >

                @error('password_confirmation')
                    <span class="form-text">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button class="btn btn-primary" type="submit">
                    Сохранить изменения
                </button>

                <a class="btn btn-secondary" href="{{ url()->previous() }}">
                    Вернуться назад
                </a>
            </div>
        </form>
    </div>
@endsection
