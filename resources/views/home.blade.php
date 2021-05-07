<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Google Font --}}
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
    <title>La Molisana</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src={{ asset("images/marchio-sito-test.png") }} alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">Prodotti</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <section>{{dd($pasta_lunga)}}}}</section>
            <section></section>
            <section></section>
        </div>
    </main>

    <footer></footer>
</body>
</html>