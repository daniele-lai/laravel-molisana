@extends('layouts.main')

@section('pageTitle')
    Prodotti
@endsection

@section('main')
<section class="product">
    <div class="container">
        <h1>{{$formato['titolo']}}</h1>
        <img src="{{$formato['src-h']}}">
        <img src="{{$formato['src-p']}}">
        <p>{!!$formato['descrizione']!!}</p>
    </div>
</section>
@endsection