@extends('layouts.base')
@section('title',  'Listes des Formations')
@section('content')

    <h4 class="mt-4">@yield('title')</h4>

    <table class="table mt-2">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Filière</th>
            <th scope="col" class="text-end">Montant</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($items as $formation)
            <tr>
                <th scope="row">{{ $formation->id }}</th>
                <td>{{ $formation->title }}</td>
                <td>{{ $formation->grade }}</td>
                <td class="text-end">{{ number_format($formation->montant, 0 ,'.', '.') }}F</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
