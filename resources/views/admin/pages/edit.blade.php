@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Редактировать страницу: "{{ $page->title }}"</h1>

        @if (session('alert'))
            <div class="alert alert-success">{{ session('alert') }}</div>
        @endif

        <form action="{{ route('admin.pages.update', $page) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label" for="title">Название страницы</label>
                <input
                    class="form-control @error('title') is-invalid @enderror"
                    id="title"
                    name="title"
                    required
                    type="text"
                    value="{{ old('title', $page->title) }}"
                >
                @error('title')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="slug">Slug (URL)</label>
                <input
                    class="form-control @error('slug') is-invalid @enderror"
                    id="slug"
                    name="slug"
                    required
                    type="text"
                    value="{{ old('slug', $page->slug) }}"
                >
                @error('slug')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="parent_id">Родительская страница</label>
                <select
                    class="form-control @error('parent_id') is-invalid @enderror"
                    id="parent_id"
                    name="parent_id"
                >
                    <option value="">Нет</option>
                    @foreach ($pages as $p)
                        <option {{ old('parent_id', $page->parent_id) == $p->id ? 'selected' : '' }}
                            value="{{ $p->id }}"
                        >
                            {{ $p->title }}
                        </option>
                    @endforeach
                </select>
                @error('parent_id')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="content">Контент (HTML/Blade)</label>
                <textarea
                    class="form-control @error('content') is-invalid @enderror"
                    id="content"
                    name="content"
                    rows="20"
                >{{ old('content', $page->content) }}</textarea>
                @error('content')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button class="btn btn-primary" type="submit">Обновить</button>
                <a class="btn btn-secondary" href="{{ url()->previous() }}">Вернуться назад</a>
            </div>
        </form>
    </div>
@endsection