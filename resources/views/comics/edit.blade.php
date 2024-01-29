@extends('layouts.app')

@section('content')
    <div class="bg-black">
        <div class="container">
            <div class="row">
                <h2 class="text-white">Edit comic</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="row">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="text-white">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" value="{{ old('title') ?? $comic->title }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') ?? $comic->description }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                            value="{{ old('price') ?? $comic->price }}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                            value="{{ old('series') ?? $comic->series }}">
                        @error('series')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Sale date</label>
                        <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="series" name="series"
                            value="{{ old('sale_date') ?? $comic->sale_date }}">
                        @error('sale_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                            value="{{ old('type') ?? $comic->type }}">
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
