@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1>Страницы сайта</h1>

            <a class="btn btn-primary mb-3" href="{{ route('admin.pages.create') }}">Добавить страницу</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($pages->isEmpty())
            <p>Нет созданных страниц.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Название</th>
                        <th>Slug</th>
                        <th>Родительская страница</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pages as $page)
                        <tr>
                            <td>{{ $page->title }}</td>
                            <td>/{{ $page->full_slug }}</td>
                            <td>{{ $page->parent?->title ?? '—' }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning"
                                    href="{{ route('admin.pages.edit', $page) }}">Редактировать</a>
                                <form
                                    action="{{ route('admin.pages.destroy', $page) }}"
                                    class="d-inline"
                                    method="POST"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Вы уверены?')"
                                        type="submit"
                                    >Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
