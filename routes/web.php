<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('comic');
})->name('home');

Route::get('/comics', function () {
    $data = [
        'comics_array' => config("comics"),
        'shopListItems' => [
            [
                'text' => 'Digital Comics',
                'image' => '/img/buy-comics-digital-comics.png',
                'url' => '#'
            ],
            [
                'text' => 'DC Merchandise',
                'image' => '/img/buy-comics-merchandise.png',
                'url' => '#'
            ],
            [
                'text' => 'Subscription',
                'image' => '/img/buy-comics-subscriptions.png',
                'url' => '#'
            ],
            [
                'text' => 'Comic Shop Locator',
                'image' => '/img/buy-comics-shop-locator.png',
                'url' => '#'
            ],
            [
                'text' => 'DC Power Visa',
                'image' => '/img/buy-dc-power-visa.svg',
                'url' => '#'
            ],
        ]
    ];
    // dd($data);

    return view('comics', $data);
})->name('comics');

Route::get('/comic/{id}', function ($id) {
    
    $comics_array = config('comics');
    $current_comic = [];

    foreach($comics_array as $comic){
        if ($comic['id'] == $id) {
            $current_comic = $comic;
        }
    }

    $data = [
        'current_comic' => $current_comic
    ];
    return view('single_comic', $data);
})->name('single_comic');