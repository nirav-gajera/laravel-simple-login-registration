<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
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

//login
Route::get('login', 'auth\AuthController@index')->name('login');
Route::post('post-login', 'auth\AuthController@postLogin')->name('login.post');

//registration
Route::get('registration', 'auth\AuthController@registration')->name('register');
Route::post('post-registration','auth\AuthController@postRegistration')->name('register.post');

//dashboard
Route::get('dashboard', 'auth\AuthController@dashboard'); 

//logout
Route::get('logout', 'auth\AuthController@logout')->name('logout');

//welcome
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
