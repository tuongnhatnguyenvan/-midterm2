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
        $products =[
            ['name' => 'Nordic chair', 'price'=> '50.00$','img'=>'product-1.png'],
            ['name' => 'Nordic chair',  'price'=> '60.00$','img'=>'product-2.png'],
            ['name' => 'Kruzo Aero',  'price'=> '70.00$','img'=>'product-3.png'],
            ['name' => 'Ergonomic Chair', 'price'=> '80.00$','img'=>'product-1.png'],
            
        ];
        return view('shop',['products' => $products]);
});
