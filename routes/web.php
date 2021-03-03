<?php
use Illuminate\Support\Facades\Input;
use App\User;
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

Route::get('/','welcomecontroller@index');
Route::get('/img','welcomecontroller@img');
Route::POST('/saveimg','welcomecontroller@saveimg');
Route::get('/category','welcomecontroller@category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/editProfile', 'HomeController@editProfile')->name('home');
Route::POST('/saveProfile', 'HomeController@saveProfile')->name('home');
Route::get('/viewProfile/{teacher_id}', 'HomeController@viewProfile')->name('home');
Route::get('/dashboard', 'HomeController@admin')->name('home');
/*/category info*/
Route::get('/add/category', 'CategoryController@category')->name('home');
Route::POST('/category/save', 'CategoryController@store')->name('home');
Route::get('/manage/category', 'CategoryController@manage')->name('home');
Route::get('/edit/category/{id}', 'CategoryController@edit')->name('home');
Route::POST('/category/update', 'CategoryController@update')->name('home');
Route::get('/delet/category/{id}', 'CategoryController@delet')->name('home');

/*/Search info*/
Route::get ( '/search', 'SearchController@search');
Route::get ( '/search_sub', 'SearchController@search_sub');
Route::POST ( '/searchr', 'SearchController@searchr');
Route::get ( '/index', 'SearchController@index');
/*/techer info*/
Route::get ( '/editsubject', 'SearchController@edit');
Route::get ( '/subjectStore', 'SearchController@subjectStore');
Route::get ( '/index', 'SearchController@index');


