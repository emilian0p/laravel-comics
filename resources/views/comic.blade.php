@extends('layout.app')

@section('main_content')
<section class="comics-list">
    <div class="container">

        <div class="series">
            CURRENT SERIES
        </div>

        <div class="products-list">
            
            <div class="product-card">
                @foreach ($comics_array as $comic)
                    <div class="col">
                        <div class="comic-card">
                            <a href="{{ route('single_comic', ['id' => $comic['id']]) }}">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                                <h3 class="series">{{ $comic['series'] }}</h3>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="more">
            <a href="#">LOAD MORE</a>
        </div>
    </div>
</section>

<section class="merch">
    <div class="container-merch">
        <span>
            <img src={{asset('img/buy-comics-digital-comics.png')}} alt="Dc logo">

            <a href="#">DIGITAL COMICS</a>
        </span>

        <span>
            <img src={{asset('img/buy-comics-merchandise.png')}} alt="Dc logo">

            <a href="#">DIGITAL COMICS</a>
        </span>

        <span>
            <img src={{asset('img/buy-comics-subscriptions.png')}} alt="Dc logo">

            <a href="#">DIGITAL COMICS</a>
        </span>

        <span>
            <img src={{asset('img/buy-comics-shop-locator.png')}} alt="Dc logo">

            <a href="#">DIGITAL COMICS</a>
        </span>

        <span>
            <img src={{asset('img/buy-dc-power-visa.svg')}} alt="Dc logo">

            <a href="#">DIGITAL COMICS</a>
        </span>
    </div>
</section>
@endsection