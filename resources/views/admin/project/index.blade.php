@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Tabella Progetti</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Slug(URL)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projectsList as $project)
                    <tr>
                        <th> {{ $project->title }} </th>
                        <td> {{ $project->description }} </td>
                        <td> {{ $project->slug }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection