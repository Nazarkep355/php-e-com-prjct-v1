<div class="container">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{route('products')}}" class="nav-link active" aria-current="page">Список продуктів</a></li>
        </ul>
    </header>
</div>
@yield('content')
