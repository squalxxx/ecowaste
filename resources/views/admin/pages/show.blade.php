@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $page->title }}</h1>

        <p><strong>Slug:</strong> /{{ $page->slug }}</p>
        <p><strong>Родительская страница:</strong> {{ $page->parent?->title ?? '—' }}</p>

        <hr>

        <div>
            {!! nl2br(htmlspecialchars($page->content)) !!}
        </div>

        <div class="mt-3">
            <a class="btn btn-warning" href="{{ route('admin.pages.edit', $page) }}">Редактировать</a>
            <a class="btn btn-secondary" href="{{ url()->previous() }}">Назад</a>
        </div>
    </div>
@endsection
