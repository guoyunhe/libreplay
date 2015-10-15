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

Route::get('/', function () {
    $apps = [
        [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'transmission',
            'name' => 'Transmission',
            'icon' => '/img/icon/transmission.png',
            'rate' => 4.1,
        ], [
            'package' => 'freecad',
            'name' => 'FreeCAD',
            'icon' => '/img/icon/freecad.png',
            'rate' => 3.4,
        ], [
            'package' => 'digikam',
            'name' => 'digiKam',
            'icon' => '/img/icon/digikam.png',
            'rate' => 3.1,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ], [
            'package' => 'firefox',
            'name' => 'Firefox',
            'icon' => '/img/icon/firefox.png',
            'rate' => 4.3,
        ],
    ];
    $reviews = [
        [
            'app' => [
                'package' => 'telegram',
                'name' => 'Telegram',
                'icon' => 'img/icon/telegram.png',                
            ],
            'user' => [
                'name' => 'BoomV5',
                'avatar' => 'http://lorempixel.com/64/64/people/2/',
            ],
            'rate' => 4,
            'vote' => 198,
            'date' => '23 Sep 2015',
            'text' => 'Morbi quis nisi sed est rhoncus elementum consectetur id lorem. Proin id orci dapibus risus varius finibus. Morbi sit amet eros eu mi semper posuere. Maecenas viverra, metus ac hendrerit pellentesque, augue risus egestas turpis, at posuere neque odio ac ipsum. Curabitur vel eros id nulla sollicitudin posuere. Praesent odio elit, ullamcorper nec eros aliquam, ultricies dignissim diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras eu nisi ornare, consectetur enim at, eleifend massa.',
        ],[
            'app' => [
                'package' => 'scilab',
                'name' => 'Scilab',
                'icon' => 'img/icon/scilab.png',                
            ],
            'user' => [
                'name' => 'Kaka',
                'avatar' => 'http://lorempixel.com/64/64/people/3/',
            ],
            'rate' => 4,
            'vote' => 198,
            'date' => '23 Sep 2015',
            'text' => 'Maecenas eget ligula diam. Aliquam sed purus vel felis hendrerit euismod. Nulla sit amet erat ipsum. Aliquam venenatis elementum tellus, id iaculis diam elementum non. Fusce elementum lectus ultrices, iaculis justo vitae, ultrices lectus. Integer sagittis orci non imperdiet imperdiet. Nam erat mi, pharetra at elit eu, sollicitudin convallis ante.',
        ],[
            'app' => [
                'package' => 'telegram',
                'name' => 'Telegram',
                'icon' => 'img/icon/telegram.png',                
            ],
            'user' => [
                'name' => 'Sand Tiger',
                'avatar' => 'http://lorempixel.com/64/64/people/4/',
            ],
            'rate' => 4,
            'vote' => 198,
            'date' => '23 Sep 2015',
            'text' => 'Morbi quis nisi sed est rhoncus elementum consectetur id lorem. Proin id orci dapibus risus varius finibus. Morbi sit amet eros eu mi semper posuere. Maecenas viverra, metus ac hendrerit pellentesque, augue risus egestas turpis, at posuere neque odio ac ipsum. Curabitur vel eros id nulla sollicitudin posuere. Praesent odio elit, ullamcorper nec eros aliquam, ultricies dignissim diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras eu nisi ornare, consectetur enim at, eleifend massa.',
        ],[
            'app' => [
                'package' => 'scilab',
                'name' => 'Scilab',
                'icon' => 'img/icon/scilab.png',                
            ],
            'user' => [
                'name' => 'Kaka',
                'avatar' => 'http://lorempixel.com/64/64/people/3/',
            ],
            'rate' => 4,
            'vote' => 198,
            'date' => '23 Sep 2015',
            'text' => 'Maecenas eget ligula diam. Aliquam sed purus vel felis hendrerit euismod. Nulla sit amet erat ipsum. Aliquam venenatis elementum tellus, id iaculis diam elementum non. Fusce elementum lectus ultrices, iaculis justo vitae, ultrices lectus. Integer sagittis orci non imperdiet imperdiet. Nam erat mi, pharetra at elit eu, sollicitudin convallis ante.',
        ],[
            'app' => [
                'package' => 'telegram',
                'name' => 'Telegram',
                'icon' => 'img/icon/telegram.png',                
            ],
            'user' => [
                'name' => 'BoomV5',
                'avatar' => 'http://lorempixel.com/64/64/people/2/',
            ],
            'rate' => 4,
            'vote' => 198,
            'date' => '23 Sep 2015',
            'text' => 'Morbi quis nisi sed est rhoncus elementum consectetur id lorem. Proin id orci dapibus risus varius finibus. Morbi sit amet eros eu mi semper posuere. Maecenas viverra, metus ac hendrerit pellentesque, augue risus egestas turpis, at posuere neque odio ac ipsum. Curabitur vel eros id nulla sollicitudin posuere. Praesent odio elit, ullamcorper nec eros aliquam, ultricies dignissim diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras eu nisi ornare, consectetur enim at, eleifend massa.',
        ],[
            'app' => [
                'package' => 'scilab',
                'name' => 'Scilab',
                'icon' => 'img/icon/scilab.png',                
            ],
            'user' => [
                'name' => 'Kaka',
                'avatar' => 'http://lorempixel.com/64/64/people/3/',
            ],
            'rate' => 4,
            'vote' => 198,
            'date' => '23 Sep 2015',
            'text' => 'Maecenas eget ligula diam. Aliquam sed purus vel felis hendrerit euismod. Nulla sit amet erat ipsum. Aliquam venenatis elementum tellus, id iaculis diam elementum non. Fusce elementum lectus ultrices, iaculis justo vitae, ultrices lectus. Integer sagittis orci non imperdiet imperdiet. Nam erat mi, pharetra at elit eu, sollicitudin convallis ante.',
        ],
    ];
    return View::make('home', ['apps' => $apps, 'reviews' => $reviews]);
});