@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>I nostri fumetti</h2>
        {{-- <div class="my-2 text-end">
            <a href="{{ route('pastas.create') }}">Crea una nuova pasta</a>
        </div> --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Descrizione</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->description }}</td>
                        {{-- <td>
                            <a class="btn btn-success" href="{{ route('pastas.show', $pasta->id) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td> --}}
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection