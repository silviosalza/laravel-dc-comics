@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>I nostri fumetti</h2>
        <div class="my-2 text-end">
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Inserisci nuovo fumetto</a>
        </div>
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
                        <td>
                            <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">
                                Info
                            </a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                            <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    Elimina
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection