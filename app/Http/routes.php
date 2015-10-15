<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

require_once __DIR__ . '/../../database/test-data.php';

Route::get('/', function () {
    global $test_data;
    
    $data = [
        'apps' => $test_data['apps'],
        'reviews' => $test_data['reviews'],
    ];
    
    return View::make('home', $data);
});

Route::get('/app/{package}', function ($package) {
    global $test_data;
    
    if (!isset($test_data['apps'][$package])) {
        $package = 'firefox';
    }
    $data = $test_data['apps'][$package];
    $data['screenshots'] = $test_data['screenshots'];
    $data['reviews'] = $test_data['reviews'];
    
    return view('app', $data);
});