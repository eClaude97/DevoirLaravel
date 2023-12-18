@extends('layouts.base')
@section('title',  'Listes des Apprenants')
@section('content')

    <h4 class="mt-4">@yield('title')</h4>

    <table class="table mt-2">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Matricule</th>
            <th scope="col">Nom</th>
            <th scope="col">Filière</th>
            <th scope="col">Email</th>
            <th scope="col">Adresse</th>
            <th scope="col">Contact</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($items as $student)
            <tr>
                <th scope="row">{{$student->id}}</th>
                <td>{{$student->matricule}}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->grade }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->contact }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
