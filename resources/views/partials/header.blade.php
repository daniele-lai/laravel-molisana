<header>
    <div class="container">
        <div class="logo">
            <img src={{ asset("images/marchio-sito-test.png") }} alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a class="{{Route::getCurrentRoute()->getName() == 'home' ? 'active' : '' }}" href="{{ route('home')}}">Home</a></li>
                <li><a class="{{Route::getCurrentRoute()->getName() == 'products' ? 'active' : '' }}" href="{{ route('products', ['id'=>0]) }}">Prodotti</a></li>
                <li><a class="{{Route::getCurrentRoute()->getName() == 'news' ? 'active' : '' }}" href="{{ route('news')}}">News</a></li>
            </ul>
        </nav>
    </div>
</header>