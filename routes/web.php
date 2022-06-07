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
    return view('auth.login');
});

Auth::routes();

Route::group(['namespace' => 'api', 'prefix' => 'api'], function () {
    Route::post('/v1/login', 'ApiController@login');
    Route::get('/v1/contestant', 'ApiController@contestant');
    Route::post('/v1/scan-qr', 'ApiController@scanQr');
    Route::post('/v1/verify', 'ApiController@verifyPin');
    Route::post('/v1/vote-contestant', 'ApiController@VoteContestant');
    Route::get('/v1/result', 'ApiController@Result');
});

Route::group(['namespace' => 'panel', 'prefix' => 'panel'], function () {
    Route::middleware(['IsAdmin'])->group(function () {

        // dashboard
        Route::resource('/dashboard', "DashboardController");
        // users / admin
        Route::resource('/users', "UserController");
        Route::resource('/admin', "AdminController");
        Route::resource('/post', "PostController");
        Route::resource('/department', "DepartmentController");
        Route::resource('/contestant', "ContestantController");
        Route::resource('/student', "StudentController");
        Route::resource('/result', "ElectionResultController");
        Route::resource('/settings', "SettingsController");
        Route::resource('/student-profile', "MPDFController");

        Route::get('/logout', function () {
            auth()->logout();
            return redirect(route('login'))->with('alert_success', 'You have successfully logged out');
        });

    });
});
