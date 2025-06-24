@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Заявка #{{ $modelRequest->id }} от {{ $modelRequest->created_at->format('d.m.Y, H:i') }}</h1>

        @if (session('alert'))
            <div class="alert alert-success">{{ session('alert') }}</div>
        @endif

        <form
            action="{{ route('admin.requests.update', $modelRequest->id) }}"
            class="w-50"
            method="POST"
        >
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label" for="name">Имя</label>

                <input
                    autocomplete="name"
                    class="form-control @error('name') is-invalid @enderror"
                    id="name"
                    name="name"
                    required
                    type="text"
                    value="{{ old('name', $modelRequest->name) }}"
                >

                @error('name')
                    <span class="form-text">{{ $message }}</span>
                @enderror
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
                    value="{{ old('phone', $modelRequest->phone) }}"
                >

                @error('phone')
                    <span class="form-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="subject">Тема сообщения</label>

                <select
                    class="form-control @error('subject') is-invalid @enderror"
                    id="subject"
                    name="subject"
                    required
                >
                    @foreach (['Утилизация отходов', 'Паспортизация отходов', 'Транспортные услуги', 'Сотрудничество', 'Другое'] as $option)
                        <option {{ old('subject', $modelRequest->subject) == $option ? 'selected' : '' }}
                            value="{{ $option }}"
                        >
                            {{ $option }}
                        </option>
                    @endforeach
                </select>

                @error('subject')
                    <span class="form-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="message">Сообщение</label>

                <textarea
                    class="form-control @error('message') is-invalid @enderror"
                    id="message"
                    name="message"
                    rows="3"
                >{{ old('message', $modelRequest->message) }}</textarea>

                @error('message')
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
