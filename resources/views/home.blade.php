<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
    <title>La Molisana</title>
</head>
<body>
    @include('partials.header')

    <main>
        <div class="container">
            <section>
                <h2>Le Lunghe</h2>
                <div class="cards">
                    @foreach ($pasta_lunga as $item)
                    <div class="card">
                        <img src="{{$item["src"]}}" alt="{{$item["titolo"]}}">
                    </div> 
                    @endforeach
                </div>
            </section>
            <section>
                <h2>Le Corte</h2>
                <div class="cards">
                    @foreach ($pasta_corta as $item)
                    <div class="card">
                        <img src="{{$item["src"]}}" alt="{{$item["titolo"]}}">
                    </div> 
                    @endforeach
                </div>
            </section>
            <section>
                <h2>Le Cortissime</h2>
                <div class="cards">
                    @foreach ($pasta_cortissima as $item)
                    <div class="card">
                        <img src="{{$item["src"]}}" alt="{{$item["titolo"]}}">
                    </div> 
                    @endforeach
                </div>
            </section>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>