<?php
Route::get('/', array(
    'as' => 'home',
    'uses' => 'HomeController@home'
));

// Route::get('/', function()
// {
//     return View::make('hello');
// });