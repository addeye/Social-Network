<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function ()
{
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::post('/signup', [
        'uses' => 'UserController@postSignUp',
        'as' => 'signup'
    ]);

    Route::post('/signin', [
        'uses' => 'UserController@postSignIn',
        'as' => 'signin'
    ]);

    Route::get('/logout',[
        'uses'=>'UserController@getLogout',
        'as' => 'logout'
    ]);

    Route::get('/dashboard',[
       'uses' => 'PostController@getDashboard',
        'as' => 'dashboard',
        'middleware'=>'auth'
    ]);

    Route::post('/createpost',[
        'uses' => 'PostController@postCreatePost',
        'as' => 'post.create'
    ]);

    Route::get('/delete-post/{post_id}',[
        'uses' => 'PostController@getDeletePost',
        'as' => 'post.delete',
        'middleware' => 'auth'
    ]);

    Route::post('/edit',[
        'uses' => 'PostController@postEditPost',
        'as' => 'edit'
    ]);


});

//Mahasiswa

Route::post('/save-mahasiswa',[
    'uses' => 'MahasiswaController@savedata',
    'as' => 'post.savedata'
]);

Route::get('/form-mahasiswa',[
    'uses' => 'MahasiswaController@addForm',
    'as' => 'get.form'
]);

Route::get('/all-mahasiswa',[
    'uses' => 'MahasiswaController@getAll',
    'as' => 'get.all'
]);

Route::put('update-mahasiswa/{id}',[
    'uses' => 'MahasiswaController@update',
    'as' => 'get.update'
]);

Route::get('/listid-mahasiswa/{id}',[
    'uses' => 'MahasiswaController@getById',
]);

Route::get('/delete-mahasiswa/{id}',[
    'uses' => 'MahasiswaController@delete',
]);


//Kamar

Route::post('/save-kamar',[
    'uses' => 'RoomController@savedata',
    'as' => 'post.savedata'
]);

Route::get('/form-kamar',[
    'uses' => 'RoomController@addForm',
    'as' => 'get.form'
]);

Route::get('/kamar',[
    'uses' => 'RoomController@getAll',
    'as' => 'get.kamarall'
]);

Route::put('update-kamar/{id}',[
    'uses' => 'MahasiswaController@update',
    'as' => 'get.update'
]);

Route::get('/listid-kamar/{id}',[
    'uses' => 'MahasiswaController@getById',
]);

Route::get('/delete-kamar/{id}',[
    'uses' => 'MahasiswaController@delete',
]);



