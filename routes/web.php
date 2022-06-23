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
    $data = [
        'name' => 'Red',
        'class' => 'Champion',
        'teams' => [
            [
                'name' => 'Charizard',
                'type' => 'Fire/Flying'
            ],
            [
                'name' => 'Lapras',
                'type' => 'Water/Ice'
            ],
            [
                'name' => 'Pikachu',
                'type' => 'Electric'
            ]
        ]
    ];
    return view('home', $data);
});
