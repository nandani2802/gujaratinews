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

View::composer(['*'], function ($view) {
	$Category = DB::select('select * from categories');
	$SubCategory = DB::select('select * from scategories');
	$FooterData = DB::select('select * from newstbls where date_format(created_at, "%Y-%m-%d") = date_format(now(),"%Y-%m-%d") LIMIT 4');
    $MostPData = DB::select('select * from newstbls where date_format(created_at, "%Y-%m-%d") = date_format(now(),"%Y-%m-%d") LIMIT 4');
    $CovidData =  DB::select('select * from covidtbls');
    $view->with('Coviddata',$CovidData);
    $view->with('Mdata',$MostPData);
    $view->with('Catdata',$Category);
    $view->with('Adata',$SubCategory);
    $view->with('FData',$FooterData);    
});


Route::get('/welcome', function () {
    return view('welcome');
});
// Route::get('/index', function () {
//      return view('index');
//  });
// Route::get('/', function () {
//      return view('index');
//  });
//Route::get('/', 'NavController@index');

// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/about', function () {
    return view('about');
});

Route::get('/index', 'BlogController@HomeNews')->name('index');
Route::get('/', 'BlogController@HomeNews');
Route::post('/store', 'ContactController@index')->name('store');
Route::post('/Commentstore', 'CommentController@index')->name('Commentstore');
Route::get('/contact', function () {
     return view('contact');
 });

Route::get('/category', function () {
    return view('category');
});
    
Route::get('/covidarea', 'CovidController@index')->name('covidarea');
 Route::get('/covid', function () {
     return view('covid');
 });


Route::get('/news', 'BlogController@index')->name('news');
Route::get('/CatWiseNews', 'BlogController@CategoryWise')->name('CatWiseNews');
Route::get('/SubCatWiseNews', 'BlogController@SubCategoryWise')->name('SubCatWiseNews');
Route::get('/blogview', 'BlogController@ViewBlog');
// Route::get('/news', function () {
//     return view('news');
// });

Route::get('/index/action', 'NewsController@action')->name('index.action');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
