<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();


//admin login
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('admin');


Route::get('/survey', 'SurveyController@index')->name('survey')->middleware('admin');

/***=======News Category Section=======***/
Route::get('/categories', 'CategoryController@index')->name('categories')->middleware('admin');
Route::post('/categories/save','CategoryController@saveCategory')->name('CategorySave');
Route::post('/categories/update/{id}','CategoryController@updateCategory')->name('CategoryUpdate');
Route::get('/categories/delete/{id}','CategoryController@deleteCategory')->name('CategoryDelete');
/***=======End News Category Section=======***/



/***======News Section=========***/
Route::get('/news', 'NewsController@index')->name('news')->middleware('admin');
 Route::get('/news/add','NewsController@addNews')->name('newsAdd');
Route::post('/news/save','NewsController@saveNews')->name('newsSave');
 Route::get('/news/edit/{id}','NewsController@editNews')->name('newsEdit');
Route::post('/news/update/{id}','NewsController@updateNews')->name('newsUpdate');
Route::get('/news/view/{id}','NewsController@viewNews')->name('newsView');
Route::post('/news/delete/{id}','NewsController@deleteNews')->name('newsDelete');
/***======End News Section=========***/

/***======Ads Section=========***/
Route::get('/ads', 'AdsController@index')->name('ads')->middleware('admin');
Route::post('/ads/save','AdsController@saveAds')->name('adsSave');

/***======End Ads Section=========***/

/***======Logo Section=========***/
Route::get('/logos', 'LogosController@index')->name('logos')->middleware('admin');

Route::post('/logos/save','LogosController@saveLogo')->name('addLogo');

/***======End Logo Section=========***/

/***======Footer Section=========***/
Route::get('/footer', 'FooterController@index')->name('footer')->middleware('admin');

Route::post('/footer/save','FooterController@saveFooter')->name('addFooter');

/***======End Footer Section=========***/

/***======Footer Section=========***/
Route::get('/live', 'LiveController@index')->name('live')->middleware('admin');

Route::post('/live/save','LiveController@savelive')->name('addLive');

/***======End Footer Section=========***/


/***======Survey Section=========***/
// Route::get('/live', 'LiveController@index')->name('live')->middleware('admin');

// Route::post('/live/save','LiveController@savelive')->name('addLive');

/***======End survey Section=========***/


/***======Follow Section=========***/


Route::get('/follow', 'FollowController@index')->name('follow')->middleware('admin');
Route::post('/follow/save','FollowController@saveLink')->name('addLink');
// Route::post('/follow/edit','FollowController@saveEditLink')->name('addEditLink');


/***======End Follow Section=========***/
//ads price
Route::get('/favicon', 'FaviconController@index')->name('favicon')->middleware('admin');

Route::post('/favicon/save','FaviconController@saveFavicon')->name('addFavicon');
//front end
Route::get('/', 'HomeController@index')->name('home') ;
 Route::get('/allnews','HomeController@allNews')->name('allnews');
 Route::get('/news/show/{id}', 'HomeController@newsShow')->name('newsshow');
 Route::get('/news/cat/show/', 'HomeController@catshow')->name('catnews');
