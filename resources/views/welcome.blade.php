@extends('layouts.header')

@section('content')
    <div class="main-content">
        <div class="latest">
            <h1>hello world</h1>
            <div class="latest-items">
                @foreach ($car as $item)
                    <div class="latest-item">
                        <div class="item-thumb">
                            <img src="{{ asset('/uploads/Cars/'.$item->car_image) }}" width="214px" height="100px">
                        </div>
                        <div class="item-detail">
                            <h2 class="item-title">{{ $item->brand }} {{ $item->model}}</h2>
                            <h6 class="item-milage">{{ $item->milage }}Km <span class="cylinder">{{ $item->cylinders }} {{ $item->cylinder_type }}</span></h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    </div>
@endsection
   
