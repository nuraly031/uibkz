<?php


/******* Main page *******/
Route::group([
    'middleware' => 'web'
], function() {
    Route::post('image/upload', 'ImageController@uploadImage');
    Route::get('media/{file_name}', 'ImageController@getImage')->where('file_name', '.*');
});


/******* Index *******/
Route::group([
    'middleware' => 'web',
    'namespace' => 'Index',
], function() {
    
    Route::get('/', 'IndexController@index');
    Route::get('contacts', 'IndexController@contact');
    Route::get('about_us', 'IndexController@about');
    Route::get('product_list', 'IndexController@products');
    Route::get('p10826648-strahovka-zelenaya-karta.html', 'IndexController@service1');
    Route::get('p10826675-strany-uchastnits-dogovora.html', 'IndexController@service2');
    Route::get('p45259524-strahovka-osago.html', 'IndexController@service3');
    Route::get('a22313-chto-takoe-zelenaya.html', 'IndexController@service4');

});



/******* Admin page *******/
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'web'
], function() {

    Route::any('/login', 'AuthController@login');
    Route::get('/logout', 'AuthController@logout');

    Route::post('info/is_show', 'InfoController@changeIsShow');
    Route::resource('info', 'InfoController');
    
    Route::get('user/reset/{id}', 'UsersController@resetPassword');
    Route::post('user/is_show', 'UsersController@changeIsBan');
    Route::resource('user', 'UsersController');
    Route::any('password', 'UsersController@password');

    Route::get('index', 'IndexController@index');
});
