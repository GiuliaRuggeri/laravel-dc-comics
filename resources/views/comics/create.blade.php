@extends('layouts.app')

@section('content')
<div class="bg-black">
    <div class="container">
        <div class="row">
            <h2 class="text-white">New Comic</h2>
        </div>
        <div class="row">
            <form action="{{ route('comics.store') }}" method="POST" class="text-white">
                @csrf
                {{-- title description type image cooking_time weight --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="text" class="form-control" id="saledate" name="sale_date">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
               
                <button type="submit" class="btn btn-primary mb-2">Add</button>
            </form>
        </div>
    </div>
</div>
    
@endsection