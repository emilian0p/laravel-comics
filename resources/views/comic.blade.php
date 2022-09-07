@extends('layout.app')

@section('main_content')
<section class="comics-list">
    <div class="container">

        <div class="series">
            CURRENT SERIES
        </div>

        <div class="products-list">
            
            <div class="product-card">
                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                <h3>TITOLO</h3>
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