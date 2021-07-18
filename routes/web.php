


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

Auth::routes();
   
// ROUTE HOMEPAGE
Route::get('/', 'MainController@homepage')
        ->name('homepage');

// ROUTE 'CHI SIAMO'
Route::get('info', 'MainController@infoWebPage')
        ->name('infoWebPage');

// ROUTE FAQ
Route::get('faq' , 'MainController@faq')
        ->name('faq');

// ROUTE MENU RESTAURANT
Route::get('/client/restaurant/{id}', 'MainController@clientRestaurant')
->name('clientRestaurant');
        

// ROUTE DASHBOARD
Route::get('/dashBoard/restaurant', 'HomeController@dashBoard')
-> name('dashBoard');
Route::post('/store/restaurant', 'HomeController@storeRestaurant')
->name('storeRestaurant');

// ROUTE DEI PRODUCT DEL RISTORANTE
Route::get('/myProduct/{id}' , 'HomeController@myProduct')
        ->name('myProduct');

Route::get('/myProduct/orders/{id}',  'HomeController@myOrders')
        ->name('myOrders');

// ROUTE AGGIUNGI PRODUCT
Route::get('/product/create/{id}', 'HomeController@createProduct')
        -> name('createProduct');
Route::post('/product/store/{id}', 'HomeController@storeProduct')
        ->name('storeProduct');

// ROUTE EDIT PRODUCT
Route::get('/product/edit/{id}', 'HomeController@editProduct')
        ->name('editProduct');
Route::post('/product/update/{id}', 'HomeController@updateProduct')
        ->name('updateProduct');

// ROUTE DELETE PRODUCT
Route::get('/product/delete/{id}' , 'HomeController@deleteProduct')
        ->name('deleteProduct');

// ROUTE CHECKOUT
Route::get('/client/checkout' , 'MainController@checkout')
        ->name('checkout');
Route::post('/client/payment/' , 'MainController@payment')
        ->name('payment');
        
// ROUTE DELETE RESTAURANT
Route::get('/restaurant/delete/{id}' ,'HomeController@deleteRestaurant')
        ->name('deleteRestaurant');

// ROUTE EDIT RESTAURANT
Route::get('/restaurant/edit/{id}' , 'HomeController@editRestaurant')
        ->name('editRestaurant');
Route::post('/restaurant/update/{id}', 'HomeController@updateRestaurant')
        ->name('updateRestaurant');

// ROUTE TRANSAZIONE ESEGUITA
Route::get('transaction/{id}', 'MainController@transaction')
        ->name('transaction');
























































Route::get('easterEgg' , function() {
        return view('pages.Client.Sainato');

})->name('easterEgg');
         
        


