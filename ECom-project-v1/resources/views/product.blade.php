@extends('main-template')
@section('content')
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col"><h1 class="display-5 fw-bold">{{$product->title}}</h1>
                    <p class="col-md-8 fs-4">
                        {{$product->description}}
                    </p>
                </div>
                <div class="col">
                    <div id="image" class="mx-auto">
                        <img width="300" height="500"
                             src="{{$product->image}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
