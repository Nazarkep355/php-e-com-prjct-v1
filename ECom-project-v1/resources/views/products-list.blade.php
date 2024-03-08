@extends('main-template')
@section('content')
<div class="container mx-auto my-2">

    <div class="container text-center">
        <div>
            {{$products->links()}}
        </div>
        <div class="row row-cols-4">
            @foreach($products as $product)
                <div class="col product">
                  <a style="text-decoration: none" href="{{route('product.id',$product->id)}}"> <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">{{$product->title}}</h4>
                            </div>
                            <div class="card-body">
                                <div id="image" class="mx-auto">
                                    <img width="150" height="250"
                                         src="{{$product->image}}">
                                </div>
                                <h1 class="card-title pricing-card-title">{{$product->price}}<small
                                        class="text-body-secondary fw-light"> Грн</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>{{$product->category->title}}</li>
                                </ul>
                            </div>
                        </div>
                    </div></a>

                </div>
            @endforeach
        </div>
    </div>
        <div>
            {{$products->withQueryString()->links()}}
        </div>

</div>
@endsection
