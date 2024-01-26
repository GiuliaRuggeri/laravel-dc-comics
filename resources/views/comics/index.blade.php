@extends('layouts.app')


@section('content')
    <!--Jumbo-->
    <div class="jumbo">



    </div>

    <!--Main-->
    <div class="bg-black d-flex m-auto">
        <div class="container position-relative">
            <div class="currentcomic position-absolute start-0 p-1 text-center">CURRENT SERIES</div>
            <div class="row mt-4">
                @foreach ($comics as $comic)
                    <div class="col-2 bg-transparent">
                        @if ($comic->thumb)
                            <img class="img-fluid cover" src={{ $comic->thumb }}>
                        @else
                        <div>
                            <img src="assets/img/dc-logo.png" alt="logo">
                        </div>
                            
                        @endif

                        <div class="d-flex justify-content-center">
                            <a href="{{ route('comics.show', $comic->id) }}"><button
                                    class="btn btn-primary mt-2 mb-2 me-2 text-center">View more</button></a>
                            <a href="{{ route('comics.edit', $comic->id) }}"><button
                                    class="btn btn-primary mt-2 mb-2 text-center">Edit</button></a>



                        </div>
                        <div class="d-flex justify-content-center">
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="" id="delete">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </div>

                        <p class="text-white text-center">{{ $comic->price }}</p>
                        <p class="text-white text-center">{{ $comic->series }}</p>
                        <p class="text-white text-center">{{ $comic->type }}</p>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{route('comics.create', $comic->id)}}"><button class="btn btn-primary me-3 mb-3 text-center">Create</button></a>
                <button type="button" class="btn btn-primary mb-3 ">LOAD MORE</button>
            </div>


        </div>
    </div>
    <!--Menu-->
    <div class="bg-blue w-100">
        <div class="container menuwrapper">
            @foreach (config('data.items') as $item)
                <div>

                    <img src="/assets/img/{{ $item['img'] }}" alt="" class="images">
                    <span class="ms-1 text-white">{{ $item['description'] }}</span>

                </div>
            @endforeach
        </div>
    </div>
@endsection
