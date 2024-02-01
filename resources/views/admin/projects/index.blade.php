@extends('layouts.admin')

@section('content')
    <div class="container">

        <div>
             <a class="btn btn-success mt-3" href="{{ route('admin.projects.create') }}">Create a new Element</a>
        </div>

        @if (count($projects) > 0)
        <table class="table table-striped mt-5">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">DESCRIPTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td class="d-flex">
                            <a class="btn btn-success" href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">Details</a>

                            <a class="btn btn-warning ms-2" href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}"> Modify </a>
                        </td>
                @endforeach
                </tr>
            </tbody>
        </table>
        @else
            <div class="alert alert-warning mt-5">
                The table is empty. Create some data
            </div>
        @endif
    </div>
@endsection
