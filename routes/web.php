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

Route::get('liqpay', 'LiqpayController@index');
//Route::get('events/{event}/edit', 'EventController@edit');

Route::resource('events', 'EventController');
//Route::resource('schedule_items', 'ScheduleItemController');

Route::get('schedule_items', 'ScheduleItemController@index')
    ->name('schedule_items.index');

Route::get('schedule_items/create/{event?}', 'ScheduleItemController@create')
    ->name('schedule_items.create');

Route::post('schedule_items/store', 'ScheduleItemController@store')
    ->name('schedule_items.store');

Route::get('schedule_items/{schedule_item}', 'ScheduleItemController@show')
    ->name('schedule_items.show');

Route::get('schedule_items/{schedule_item}/edit', 'ScheduleItemController@edit')
    ->name('schedule_items.edit');


Route::get('orders/create', 'OrderController@create')
    ->name('orders.create');

Route::model('event', App\Event::class);
Route::model('schedule_item', App\ScheduleItem::class);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
