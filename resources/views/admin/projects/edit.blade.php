@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>Modify a Project</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $project->description }}</textarea>
            </div>

            <div class="mb-4">
                @foreach ($technologies as $technology)
                    <div class="form-check">
                        <input @checked($project->technologies->contains($technology))
                         class="form-check-input" type="checkbox" value="{{ $technology->id }}" id="technology-{{ $technology->id }}"name="technologies[]">
                        <label class="form-check-label" for="technology-{{ $technology->id }}">
                            {{ $technology->name }}
                        </label>
                    </div>
                @endforeach
            </div>


            <button class="btn btn-warning" type="submit">Save Modify</button>
        </form>
    </div>
@endsection
