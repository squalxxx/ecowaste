@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Настройки сайта</h1>

        @if (session('alert'))
            <div class="alert alert-success">{{ session('alert') }}</div>
        @endif

        <form
            action="{{ route('admin.settings.update') }}"
            class="w-50"
            enctype="multipart/form-data"
            method="POST"
        >
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label" for="logotype">Логотип</label>

                <div>
                    @if (app('settings')?->logotype)
                        <div class="mb-2">
                            <img
                                alt="Логотип"
                                src="{{ asset('storage/' . app('settings')?->logotype) }}"
                                style="max-width: 200px;"
                            >
                        </div>
                    @endif

                    <input
                        accept="image/*"
                        class="form-control @error('logotype') is-invalid @enderror"
                        id="logotype"
                        name="logotype"
                        type="file"
                    >

                    @error('logotype')
                        <span class="form-text">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="phone">Номер телефона</label>

                <input
                    autocomplete="phone"
                    class="form-control @error('phone') is-invalid @enderror"
                    id="phone"
                    name="phone"
                    required
                    type="tel"
                    value="{{ old('phone', app('settings')?->phone) }}"
                >

                @error('phone')
                    <span class="form-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">Email</label>

                <input
                    autocomplete="email"
                    class="form-control @error('email') is-invalid @enderror"
                    id="email"
                    name="email"
                    required
                    type="email"
                    value="{{ old('email', app('settings')?->email) }}"
                >

                @error('email')
                    <span class="form-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="address">Адрес офиса</label>

                <input
                    autocomplete="address"
                    class="form-control @error('address') is-invalid @enderror"
                    id="address"
                    name="address"
                    required
                    type="text"
                    value="{{ old('address', app('settings')?->address) }}"
                >

                @error('address')
                    <span class="form-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="work_time">Рабочее время</label>

                <input
                    autocomplete="work_time"
                    class="form-control @error('work_time') is-invalid @enderror"
                    id="work_time"
                    name="work_time"
                    required
                    type="text"
                    value="{{ old('work_time', app('settings')?->work_time) }}"
                >

                @error('work_time')
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
