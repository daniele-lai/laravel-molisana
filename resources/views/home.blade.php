@extends('layouts.main')

@section('pageTitle')
    La Molisana
@endsection

@section('main')
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
@endsection


