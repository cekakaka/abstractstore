<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Routing\RouteRegistrar;
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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/detail/{id}', 'DetailController@index')->name('detail');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@index')->name('success');

// Auth
Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');
Route::get('/login/success', 'Auth\LoginController@success')->name('login-success');

// Dashboard
Route::get('/dashboard', 'DashboardController@index')
    ->name('dashboard');
Route::get('/dashboard/product', 'DashboardProductController@index')
    ->name('dashboard-product');
Route::get('/dashboard/product/create', 'DashboardProductController@create')
    ->name('dashboard-product');
Route::get('/dashboard/product/{id}', 'DashboardProductController@details')
    ->name('dashboard-product-details');
Route::get('/dashboard/transactions', 'DashboardTransactionController@index')
    ->name('dashboard-transaction');
Route::get('/dashboard/transactions/{id}', 'DashboardTransactionController@detail')
    ->name('dashboard-transaction-details');

// Dashboard Setting
Route::get('/dashboard/settings', 'DashboardSettingController@store')
    ->name('dashboard-settings-store');
Route::get('/dashboard/account', 'DashboardSettingController@account')
    ->name('dashboard-settings-account');

// Route::get('/admin', 'Admin\DashboardController@index')
//     ->name('admin-dashboard');

//ADMIN Setting
//->middleware(['auth','admin'])

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('category','CategoryController');
    });

Route::get('/debug-sentry', function () {
    throw new Exception('Hi CK! This is first Sentry !');
});

Auth::routes();

