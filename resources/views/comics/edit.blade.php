@extends('layouts.app')

@section('content')
    <div class="bg-black">
        <div class="container">
            <div class="row">
                <h2 class="text-white">Edit comic</h2>
            </div>
            <div class="row">
                <form action="{{route('comics.update', $comic->id)}}" method="POST" class="text-white">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description">{{$comic->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Sale date</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{$comic->sale_date}}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
