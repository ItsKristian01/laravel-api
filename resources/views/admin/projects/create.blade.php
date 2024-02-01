@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>CREATE A NEW BOOLFOLIO</h2>

        <form class="mt-5" action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}">

                @error('title')
                    <div class="text-danger"> {{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('content') }}</textarea>
            </div>

            <div class="mb-3 has-validation">
                <label for="type">Select the type of Project</label>
                <select class="form-select @error('type_id') is-invalid" @enderror name="type_id" id="type">
                    <option @selected(old('type_id') == null) value="">No Typology</option>
                    @foreach ($types as $type)
                        <option @selected(old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                @error('type_id')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>

            <div>
                @foreach ($technologies as $technology)
                    <div class="form-check mb-4 mt-4">
                        <input @checked(in_array($technology->id, old('technologies', []))) class="form-check-input" type="checkbox" id="technology-{{ $technology->id }}" value="{{ $technology->id }}" name="technologies[]">
                        <label class="form-check-label" for="technology-{{ $technology->id }}">
                            {{ $technology->name }}
                        </label>
                    </div>
                @endforeach
            </div>


            <button class="btn btn-success" type="submit">Save</button>
        </form>
    </div>
@endsection
