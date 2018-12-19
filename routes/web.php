<?php

Auth::routes();


// Guest Routes

Route::get('/', function () {
    return view('index');
});


// Lecturer & Student & Admin Routes

Route::get('/schedule', 'ScheduleController@index')->name('schedule');
Route::post('/schedule/create', 'ScheduleController@store')->name('schedule.store');
Route::get('/schedule/view', 'ScheduleController@view')->name('schedule.view');
Route::get('/schedule/search', 'ScheduleController@searchEvent')->name('schedule.search');
Route::get('/schedule/destroy/{id}', 'ScheduleController@destroyEvent')->name('schedule.destroy');

Route::get('/feedback', 'FeedbackController@index')->name('feedback');
Route::post('/feedback/create', 'FeedbackController@store')->name('feedback.store');

// Admin Routes

Route::get('/feedback/view', 'ViewFeedbackController@index')->name('feedback.view');
Route::get('/ping-test', 'PingController@index')->name('ping');


Route::get('/home', 'EventController@index');
//Route::get('events', 'EventController@index');
