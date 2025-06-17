@extends('lk.app')

@section('content')
    <div class="container">
        <h1>Заявка #{{ $modelRequest->id }} от {{ $modelRequest->created_at->format('d.m.Y, H:i') }}</h1>

        <form action="{{ route('lk.requests.update', $modelRequest->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Имя -->
            <div class="form-group mb-3">
                <label for="name">Имя</label>
                <input
                    class="form-control @error('name') is-invalid @enderror"
                    id="name"
                    name="name"
                    required
                    type="text"
                    value="{{ old('name', $modelRequest->name) }}"
                >
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group mb-3">
                <label for="phone">Номер телефон</label>
                <input
                    class="form-control @error('phone') is-invalid @enderror"
                    id="phone"
                    name="phone"
                    required
                    type="tel"
                    value="{{ old('phone', $modelRequest->phone) }}"
                >
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Тема -->
            <div class="form-group mb-3">
                <label for="subject">Тема сообщения</label>
                <select
                    class="form-control @error('subject') is-invalid @enderror"
                    id="subject"
                    name="subject"
                    required
                >
                    @foreach (['Утилизация отходов', 'Паспортизация отходов', 'Транспортные услуги', 'Сотрудничество', 'Другое'] as $option)
                        <option {{ old('subject', $modelRequest->subject) == $option ? 'selected' : '' }}
                            value="{{ $option }}"
                        >{{ $option }}</option>
                    @endforeach
                </select>
                @error('subject')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Сообщение -->
            <div class="form-group mb-3">
                <label for="message">Сообщение</label>
                <textarea
                    class="form-control @error('message') is-invalid @enderror"
                    id="message"
                    name="message"
                    rows="5"
                >{{ old('message', $modelRequest->message) }}</textarea>
                @error('message')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <button class="btn btn-primary" type="submit">Обновить заявку</button>

                <a class="btn btn-secondary" href="{{ route('lk.requests.index') }}">
                    Все заявки
                </a>
            </div>
        </form>
    </div>
@endsection
