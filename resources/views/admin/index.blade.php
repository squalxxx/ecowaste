@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Админ-панель</h1>

        <div class="card mb-4">
            <div class="card-header">Последние заявки</div>
            <div class="card-body">
                @if ($latestRequests->isEmpty())
                    <p>Нет новых заявок</p>
                @else
                    <ul class="list-group list-group-flush">
                        @foreach ($latestRequests as $request)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $request->name }} | {{ $request->phone }}
                                <a class="btn btn-sm btn-primary"
                                    href="{{ route('admin.requests.edit', $request) }}">Подробнее</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="card-footer text-end">
                <a class="btn btn-link" href="{{ route('admin.requests.index') }}">Смотреть все заявки</a>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">Последние страницы</div>
            <div class="card-body">
                @if ($latestPages->isEmpty())
                    <p>Нет созданных страниц</p>
                @else
                    <ul class="list-group list-group-flush">
                        @foreach ($latestPages as $page)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $page->title }}
                                <a class="btn btn-sm btn-primary"
                                    href="{{ route('admin.pages.edit', $page) }}">Подробнее</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="card-footer text-end">
                <a class="btn btn-link" href="{{ route('admin.pages.index') }}">Смотреть все страницы</a>
            </div>
        </div>
    </div>
@endsection
