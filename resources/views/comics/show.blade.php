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
            <div class="col-2 bg-transparent">
                <img class="img-fluid cover" src={{$comics->thumb}}>
                <p class="text-white text-center">{{$comics->price}}</p>
                <p class="text-white text-center">{{$comics->series}}</p>
                <p class="text-white text-center">{{$comics->type}}</p>
            </div>
        </div>
     </div>
     
      
    </div> 
    <!--Menu-->
       <div class="bg-blue w-100">
        <div class="container menuwrapper">
             @foreach (config("data.items") as $item)
            <div>
              
                <img src="/assets/img/{{$item['img']}}" alt="" class="images">
                <span class="ms-1 text-white">{{ $item['description'] }}</span>
               
            </div> 
            @endforeach
        </div>
@endsection