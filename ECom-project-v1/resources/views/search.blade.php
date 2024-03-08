@extends('main-template')
@section('content')
    <div class="container">
        <form action="{{route('products')}}" method="get">

        <div class="form-floating mb-3">
            <input  type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Назва продукту</label>
        </div>
            <div class="form-floating mb-3">
                <input type="text" name="detail" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Деталь</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"  name="category" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Назва категорії</label>
            </div>
            <div class="form-floating mb-3">
                <input value="1" type="number" name="min_price" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Мінімальна ціна</label>
            </div>
            <div class="form-floating mb-3">
                <input value="10000" type="number" name="max_price" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Максимальна ціна</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Пошук</button>
        </form>
    </div>
@endsection
