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

Auth::routes();


Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'DashboardController@show');
    Route::get('/forgetpass', 'ForgetpassController@forget');
    Route::get('/followusers', 'UserController@following');
    Route::get('/followers', 'UserController@followers');
    Route::get('user/follow/{id}', 'UserController@follow');
    Route::get('user/unfollow/{id}', 'UserController@unfollow');
    Route::get('/userprofile/{id}', 'UserController@userProfile');
    Route::get('/editprofile', 'UserController@edit');
    Route::get('/profile', 'ImageController@inputimage');
    Route::get('/image', 'ImageController@view');
    Route::get('/delete', 'UserController@confirm');
    Route::get('/index', 'UserController@index');
    Route::post('/editprofile/delete', 'UserController@delete');
    Route::post('/updateProfile' , 'UserController@update');
});


    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home', 'DashboardController@logout');
    Route::get('/categories', 'CategoryController@category');
    Route::post('/categories','AdminController@updatelesson');
    Route::get('/category/{categoryId}/take','QuestionController@questionpage');
    Route::get('/result','ResultController@showresult');
    Route::post('/{takenId}/nextquestion','QuestionController@nextquestion');
    Route::get('/{takenId}/showresult','QuestionController@showresult');
    
    Route::get('/createlesson','AdminController@createlesson')->middleware('admin');
    Route::get('/editlesson/{category_id}','AdminController@editlesson')->middleware('admin');
    Route::post('/createlesson','AdminController@savelesson');
    Route::get('/newquestion/{categoryId}','AdminController@newquestion');
    Route::get('/updatequestion/{id}','AdminController@updatequestion');
    Route::post('/submitupdate/{id}','AdminController@storeupdate');
    Route::get('/allquestions/{categoryId}','AdminController@allquestions')->middleware('admin');
    Route::post('/createnewquestion/{categoryId}','AdminController@createnewquestion');
    