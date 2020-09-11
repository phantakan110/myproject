<?php

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
    return view('welcome');
    });

Route::get("/home", function() {
    return "<h1>This is home page</h1>" ;
    });

    Route::get("/blog/{id}", function($id) {
return "<h1>This is blog page : {$id} </h1>" ;
    });

Route::get( "/blog/{id}/edit" , function($id) {
    return "<h1>This is blog page : {$id} for edit</h1>" ;
    });

Route::get("/product/{a}/{b}/{c}", function($a, $b, $c) {
return "<h1>This is product page </h1><div>{$a} , {$b}, {$c}</div>" ;
    });

Route::get("/hello", function () {
    return view("hello");
    });

Route::get('/greeting', function () {
    $name = 'James';
    $last_name = 'Mars';
    return view('greeting', compact('name','last_name') );
    });
    
Route::get( "/gallery" , function(){
        $ant = url("images/ant.jpg");
        $bird = url("images/bird.jpg");
        $cat =url("images/cat.jpg");
        $god = url("images/god.jpg");
        $spider = url("images/spider.jpg");

        return view("test/index", compact("ant","bird","cat","god","spider") );
});

Route::get( "/gallery/ant" , function(){
    $ant = url("images/ant.jpg");
    
    return view("test/ant", compact("ant") );
});

Route::get( "/gallery/bird" , function(){
    $bird = url("images/bird.jpg");
    
    return view("test/bird", compact("bird") );
});

Route::get( "/gallery/cat" , function(){
    $cat = url("images/cat.jpg");
    
    return view("test/cat", compact("cat") );
});
Route::get("/myprofile/create","MyProfileController@create");

Route::get("/myprofile/{id}/edit", "MyProfileController@edit");

Route::get("/myprofile/{id}", "MyProfileController@show");

Route::get( "/newgallery" , "MyProfileController@gallery" );

Route::get( "/newgallery/ant" , "MyProfileController@ant" );

Route::get( "/newgallery/bird" , "MyProfileController@bird" );


Route::get("/staff/create", "StaffController@create");

Route::get("/staff/{id}/edit", "StaffController@edit");

Route::get('/staff', 'StaffController@index');

Route::post('/staff', 'StaffController@store');

Route::get('/staff/{id}', 'StaffController@show');

Route::get('/staff/{id}/edit', 'StaffController@edit');

Route::patch('/staff/{id}', 'StaffController@update');

Route::delete('/staff/{id}', 'StaffController@destroy');



Route::resource('post', 'PostController');
Route::resource('post', 'PostController');
Route::resource('book', 'BookController');
Route::resource('book', 'BookController');
Route::resource('street', 'StreetController');