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

/* hack to force prefix in testing environment to avoid problems with test suite
   https://github.com/mcamara/laravel-localization/issues/161 */
Route::group(['prefix' =>  (env('APP_ENV') === 'testing' ? 'en' : LaravelLocalization::setLocale()),
              'middleware' => [ 'localeSessionRedirect', 'localizationRedirect']], function()
{
    Route::resource('tasks', 'TasksController');
});

Route::get('/', function() {
   return redirect(route('tasks.index')); 
});