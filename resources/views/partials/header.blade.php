<header>
    <div class="container">
        <div class="logo">
            <img src={{ asset("images/marchio-sito-test.png") }} alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a class="active" href="{{ route('home')}}">Home</a></li>
                <li><a href="{{ route('products', ['id'=>1]) }}">Prodotti</a></li>
                <li><a href="{{ route('news')}}">News</a></li>
            </ul>
        </nav>
    </div>
</header>