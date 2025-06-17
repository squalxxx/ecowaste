@extends('lk.app')

@section('content')
    <div class="container">
        <h1>Ваши заявки</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($requests->isEmpty())
            <p>У вас пока нет заявок.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Тема</th>
                        <th scope="col">Сообщение</th>
                        <th scope="col">Дата подачи</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($requests as $index => $request)
                        <tr>
                            <th scope="row">{{ $request->id }}</th>
                            <td>{{ $request->name }}</td>
                            <td>{{ $request->subject }}</td>
                            <td style="max-width: 150px;">
                                {{ empty($request->message) ? 'Не заполнено' : \Illuminate\Support\Str::limit(strip_tags($request->message), 100) }}
                            </td>
                            <td>{{ $request->created_at->format('d.m.Y, H:i') }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('lk.requests.edit', $request->id) }}">Подробнее</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {{ $requests->links('vendor.pagination.custom') }}
            </div>
        @endif
    </div>
@endsection
