<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function (){
    return view('landing');
});

Auth::routes([
    'register' => (env('APP_ENV') != 'production') ? true : false, // Registration Routes...
]);

//Order
Route::get('/order', 'OrderController@index');
Route::get('/order/add', 'OrderController@add');
Route::get('/order/edit/{id}', 'OrderController@edit', function (Request $request,$id) {});

//Product
Route::get('/product', 'ProductController@index');
Route::get('/product/add', 'ProductController@add');
Route::get('/product/edit/{id}', 'ProductController@edit', function (Request $request,$id) {});
Route::post('/product/save', 'ProductController@save', function (Request $request) {});


//Brand
Route::get('/brand', 'BrandController@index');
Route::get('/brand/add', 'BrandController@add');
Route::get('/brand/edit/{id}', 'BrandController@edit', function (Request $request,$id) {});
Route::post('/brand/save', 'BrandController@save', function (Request $request) {});

//Customer
Route::get('/customer', 'CustomerController@index');
Route::get('/customer/add', 'CustomerController@add');
Route::get('/customer/edit/{id}', 'CustomerController@edit', function (Request $request,$id) {});
Route::post('/customer/save', 'CustomerController@save', function (Request $request) {});

//Category
Route::get('/category', 'CategoryController@index');
Route::get('/category/add', 'CategoryController@add');
Route::get('/category/edit/{id}', 'CategoryController@edit', function (Request $request,$id) {});
Route::post('/category/save', 'CategoryController@save', function (Request $request) {});

// Company
Route::get('/company', 'CompanyController@index');
Route::get('/company/add', 'CompanyController@add');
Route::get('/company/edit/{id}', 'CompanyController@edit', function (Request $request,$id) {});
Route::post('/company/save', 'CompanyController@save', function (Request $request) {});

// User
Route::get('/user', 'UserController@index');

// Profile
Route::get('/profile', 'UserController@profile');

Route::get('/setting', 'SettingController@index');
Route::get('/home', 'HomeController@index');
