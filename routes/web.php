<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Collection;

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
    $numbers = Collection::times(200)
        ->transform(function ($number) {
            switch ($number) {
                case $number % 4 == 0 && $number % 7 == 0:
                    return 'XXXYYY';
                    break;
                case $number % 4 == 0:
                    return 'XXX';
                    break;
                case $number % 7 == 0:
                    return 'YYY';
                    break;
                default:
                    return $number;
                    break;
            }
        });

    return Inertia::render('Numbers', [
        'numbers' => $numbers
    ]);
});