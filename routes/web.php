<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [
'uses' => 'App\Http\Controllers\SchoolMangement@index',
'as'   => '/',
]);

Route::get('/category-teacher/{id}', [
    'uses' => 'App\Http\Controllers\SchoolMangement@category',
    'as'   => 'category-teacher',
    ]);

 Route::get('/admission-form', [
        'uses' => 'App\Http\Controllers\OtherController@admission',
        'as'   => 'admission-form',
        ]);

    Route::get('/dashboard',[
        'uses'        => 'App\Http\Controllers\DashboardController@index',
        'as'          => 'dashboard',
        'middleware'  => ['auth:sanctum','verified']
    ]);

    Route::get('/add-category',[
        'uses'        => 'App\Http\Controllers\CategoryController@category',
        'as'          => 'add-category',
        'middleware'  => ['auth:sanctum','verified']
    ]);

    Route::post('/new-category',[
        'uses'        => 'App\Http\Controllers\CategoryController@create',
        'as'          => 'new-category',
        'middleware'  => ['auth:sanctum','verified']
    ]);

    Route::get('/manage-category',[
        'uses'        => 'App\Http\Controllers\CategoryController@manage',
        'as'          => 'manage-category',
        'middleware'  => ['auth:sanctum','verified']
    ]);

    Route::get('/edit-category/{id}',[
        'uses'        => 'App\Http\Controllers\CategoryController@edit',
        'as'          => 'edit-category',
        'middleware'  => ['auth:sanctum','verified']
    ]);

    Route::post('/update-category',[
        'uses'        => 'App\Http\Controllers\CategoryController@update',
        'as'          => 'update-category',
        'middleware'  => ['auth:sanctum','verified']
    ]);

    Route::get('/delete-category/{id}',[
        'uses'        => 'App\Http\Controllers\CategoryController@delete',
        'as'          => 'delete-category',
        'middleware'  => ['auth:sanctum','verified']
    ]);

    Route::get('/add-details',[
        'uses'        => 'App\Http\Controllers\DetailsController@index',
        'as'          => 'add-details',
        'middleware'  => ['auth:sanctum','verified']
    ]);
    
    Route::post('/new-teacher',[
        'uses'        => 'App\Http\Controllers\DetailsController@create',
        'as'          => 'new-teacher',
        'middleware'  => ['auth:sanctum','verified']
    ]);

    Route::get('/manage-details',[
        'uses'        => 'App\Http\Controllers\DetailsController@manage',
        'as'          => 'manage-details',
        'middleware'  => ['auth:sanctum','verified']
    ]);
    
    Route::get('/view-teacher-detail/{id}',[
        'uses'        => 'App\Http\Controllers\DetailsController@detail',
        'as'          => 'view-teacher-detail',
        'middleware'  => ['auth:sanctum','verified']
    ]);

    Route::get('/edit-teacher/{id}',[
        'uses'        => 'App\Http\Controllers\DetailsController@edit',
        'as'          => 'edit-teacher',
        'middleware'  => ['auth:sanctum','verified']
    ]);

    Route::post('/update-teacher',[
        'uses'        => 'App\Http\Controllers\DetailsController@update',
        'as'          => 'update-teacher',
        'middleware'  => ['auth:sanctum','verified']
    ]);

    Route::get('/delete-teacher/{id}',[
        'uses'        => 'App\Http\Controllers\DetailsController@delete',
        'as'          => 'delete-teacher',
        'middleware'  => ['auth:sanctum','verified',]
    ]);
    