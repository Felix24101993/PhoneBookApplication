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
    $result = DB::SELECT("SELECT * FROM phoneNumbers");
    return view('phoneNumbers', ["result" => $result]);
});

Route::get('phoneNumbers/{phoneId}', function($phoneId){
    $result = DB::SELECT("SELECT * FROM phoneNumbers WHERE phoneId=?", array($phoneId));
    return view("phoneNumber", ["phoneNumber"=>$result[0]]);
});
