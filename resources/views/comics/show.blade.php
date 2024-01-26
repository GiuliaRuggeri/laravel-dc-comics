@extends('layouts.app')

@section('content')
    <!--Jumbo-->
    <div class="jumbo">



    </div>

    <!--Main-->
    <div class="bg-white d-flex m-auto">
        <div class="container position-relative">

            <div class="showcomic position-absolute start-0 p-1 text-center">
                @if ($comics->thumb)
                    <img class="img-fluid cover h-75" src={{ $comics->thumb }}>
                @else
                <div class="bg-white">
                    <img class="cover h-75" src="../assets/img/dc-logo.png" alt="logo"> 
                </div>
                   
                @endif

            </div>
            <div class="row mt-4">
                <div class="col-8 bg-transparent">
                    <h2 class=" text-center">{{ $comics->title }}</h2>
                    <div class="">
                        <p class=" text-center">U.S PRICE ${{ $comics->price }}</p>
                    </div>

                    <p class=" text-center">{{ $comics->description }}</p>
                </div>
                <div class="col-2">
                    <h5 class="text-end">ADVERTISEMENT</h5>
                    <img class="mb-3" src="/assets/img/adv.jpg" alt="">
                </div>
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
    @endsection
