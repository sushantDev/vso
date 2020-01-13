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

Route::get('/', 'FrontendController@homepage')->name('homepage');
Route::get('/about-us', 'FrontendController@aboutUs')->name('about-us');
Route::get('/our-courses', 'FrontendController@ourCourses')->name('our-courses');
Route::get('/faq', 'FrontendController@faq')->name('faq');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/tnc', 'FrontendController@tnc')->name('tnc');
Route::get('/physics', 'FrontendController@physics')->name('physics');
Route::get('/chemistry', 'FrontendController@chemistry')->name('chemistry');
Route::get('/biology', 'FrontendController@biology')->name('biology');

Route::post('contact', 'ContactController@store')->name('contact.store');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Auth::routes();

/*
|--------------------------------------------------------------------------
| ALL Routes
|--------------------------------------------------------------------------
*/
Route::group([ 'middleware' => 'auth' ], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/students', 'HomeController@students')->name('students');

    Route::group([ 'prefix' => 'user', 'as' => 'user.' ], function () {
        Route::get('', 'UserController@index')->name('index');
        Route::get('create', 'UserController@create')->name('create');
        Route::get('{user}/profile', 'UserController@profile')->name('profile');
        Route::post('{user}/change-password', 'UserController@changePassword')->name('change-password');
        Route::post('', 'UserController@store')->name('store');
        Route::get('{user}', 'UserController@edit')->name('edit');
        Route::put('{user}', 'UserController@update')->name('update');
        Route::delete('{user}', 'UserController@destroy')->name('destroy');
    });

    Route::group([ 'prefix' => 'chat' ], function () {
        Route::get('', 'ChatsController@index');
        Route::get('messages/{session}', 'ChatsController@fetchMessages');
        Route::post('messages', 'ChatsController@sendMessage');
    });

    Route::group([ 'prefix' => 'qna', 'as' => 'qna.' ], function () {
        Route::get('{session}', 'QnaController@fetchQna')->name('fetch');
        Route::post('{session}', 'QnaController@sendQna')->name('send');
    });

    Route::group([ 'prefix' => 'course', 'as' => 'course.' ], function () {
        Route::get('', 'CourseController@index')->name('index');
        Route::get('create', 'CourseController@create')->name('create');
        Route::post('', 'CourseController@store')->name('store');
        Route::get('{course}', 'CourseController@edit')->name('edit');
        Route::get('{course}/users', 'CourseController@users')->name('users');
        Route::post('{course}/users', 'CourseController@addUsers')->name('add.users');
        Route::delete('{course}/{user}/destroy', 'CourseController@destroyUser');
        Route::put('{course}', 'CourseController@update')->name('update');
        Route::delete('{course}', 'CourseController@destroy')->name('destroy');
    });

    Route::group([ 'prefix' => 'session', 'as' => 'session.' ], function () {
        Route::get('', 'SessionController@index')->name('index');
        Route::get('create', 'SessionController@create')->name('create');
        Route::get('start/{session}', 'SessionController@start')->name('start');
        Route::get('join/{session}', 'SessionController@join')->name('join');
        Route::post('', 'SessionController@store')->name('store');
        Route::get('{session}', 'SessionController@edit')->name('edit');
        Route::put('{session}', 'SessionController@update')->name('update');
        Route::post('{session}/stream-id', 'SessionController@updateStreamId')->name('update.stream-id');
        Route::delete('{session}', 'SessionController@destroy')->name('destroy');
    });

    Route::group([ 'prefix' => 'center', 'as' => 'center.' ], function () {
        Route::get('', 'CenterController@index')->name('index');
        Route::get('create', 'CenterController@create')->name('create');
        Route::post('', 'CenterController@store')->name('store');
        Route::get('{center}', 'CenterController@edit')->name('edit');
        Route::get('{center}/students', 'StudentController@index')->name('students');
        Route::get('{center}/student/create', 'StudentController@create')->name('student.create');
        Route::post('{center}/student/store', 'StudentController@store')->name('student.store');
        Route::get('{center}/{student}/edit', 'StudentController@edit')->name('student.edit');
        Route::put('{center}/{student}/update', 'StudentController@update')->name('student.update');
        Route::delete('{center}/{student}/destroy', 'StudentController@destroy')->name('student.destroy');
        Route::put('{center}', 'CenterController@update')->name('update');
        Route::delete('{center}', 'CenterController@destroy')->name('destroy');
    });

    Route::group([ 'prefix' => 'contact', 'as' => 'contact.' ], function () {
        Route::get('index', 'ContactController@index')->name('index');
        Route::get('{contact}', 'ContactController@show')->name('show');
    });
});
