@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="mt-4"> TITLE: {{ $project->title }}</h2>
        <p class="mt-2">
            Type: {{ $project->type ? $project->type->name : 'There is no type' }}
        </p>

        <div>
            @foreach ($project->technologies as $technology)
                  <p>Technology: {{ $technology->name }}</p>
            @endforeach
        </div>

        <h2 class="mt-5">DESCRIPTION: {{ $project->description }}</h2>
    </div>
@endsection
