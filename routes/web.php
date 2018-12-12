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
    return view('layouts/welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/settings','SettingsController@index')->name('settings');

Route::get('/projects','ProjectsController@index')->name('projects');

Route::get('/users','UsersController@index')->name('users');

Route::get('/projectsHandler','ProjectsController@indexAdmin')->name('projectsHandler');

Route::delete('users/{user}','UsersController@delete')->name('user.delete');

Route::delete('projects/{project}', 'ProjectsController@delete')->name('project.delete');

Auth::routes();

