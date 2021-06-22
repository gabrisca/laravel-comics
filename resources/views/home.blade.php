{{-- extend di main: fondamnetalmente ne prende tutte le sue caratteristiche --}}
@extends('layouts/main')

{{-- sezione content presa da main --}}
@section('content')
    <main>
        <div id="jumbotron"></div>
        <div id="cards">
            <div class="btn">
                current series
            </div>
            <div class="main-wrapper">
                @foreach ($products as $product)
                    <div class="card">
                        <img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}">
                        <span>{{$product['series']}}</span>
                    </div>
                @endforeach
            </div>

            <div class="btn-load">
                <a href="#">
                    load more
                </a>
            </div>
        </div>

    </main>
@endsection
