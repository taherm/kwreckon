<?php
use App\Service;
use App\Menu;
use App\Slider;
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
    $slider=Slider::all();
    $ser=Service::all();

    return view('index',compact('slider','ser'));
});

Route::get('/home-ar', function () {
    $slider=Slider::all();
    $ser=Service::all();

    return view('ar.index',compact('slider','ser'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about-ar', function () {
    return view('ar.about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/contact-ar', function () {
    return view('ar.contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/cfo-en', function () {
    return view('services.cfo');
});

Route::get('/cfo-ar', function () {
    return view('services.cfo-ar');
});


Route::get('/services/bookkeeping', function () {
    return view('services.bookkeeping');
});

Route::get('/services/financial-analysis', function () {
    return view('services.financial-analysis');
});



Route::get('services_en/{id}', function ($id) {
    $ser=Service::find($id);
        return view('service-layout-en',compact('ser'));
});

Route::get('services_ar/{id}', function ($id) {
    $ser=Service::find($id);
        return view('service-layout-ar',compact('ser'));
});

Route::get('admin','AdminController@index')->middleware('auth');
Route::post('admin/slider','AdminController@add_slider')->middleware('auth');
Route::post('admin/album','AdminController@add_album')->middleware('auth');
Route::delete('admin/del-slider','AdminController@delete_slider')->middleware('auth');
Route::delete('admin/del-album','AdminController@delete_album')->middleware('auth');
Route::get('admin/delete-slider',function () {
    return view('admin.delete-slider');
})->middleware('auth');
Route::get('admin/delete-album',function () {
    return view('admin.delete-album');
})->middleware('auth');
Route::get('admin/add-slider',function () {
    return view('admin.add-slider');
})->middleware('auth');
Route::get('admin/add-album',function () {
    return view('admin.add-album');
})->middleware('auth');
Route::get('admin/page','AdminController@show')->middleware('auth');
Route::get('admin/create-page', function () {
    return view('admin.create-page');
})->middleware('auth');

Route::post('sub-menu','AdminController@submenu')->middleware('auth');
Route::post('main-menu','AdminController@mainmenu')->middleware('auth');
Route::post('admin','AdminController@store')->middleware('auth');
Route::delete('admin/{id}','AdminController@destroy')->middleware('auth');
Route::get('admin/{id}/edit','AdminController@edit')->middleware('auth');
Route::get('admin/{id}/edit_menu','AdminController@edit_menu')->middleware('auth');

Route::post('admin/{id}','AdminController@update')->middleware('auth');
Route::post('admin_edit/{id}','AdminController@updatemenu')->middleware('auth');

Route::get('admin/sub-menu', function () {
    return view('admin.sub-menu');
})->middleware('auth');
Route::get('admin/menu', function () {
    $cat =Menu::all();
    return view('admin.menu',compact('cat'));
})->middleware('auth');
Route::get('admin/delete-menu', function () {
    return view('admin.delete-menu');
})->middleware('auth');
Route::delete('admin/delete-menu/{id}','AdminController@del')->middleware('auth');
Route::delete('admin/submenu_edit','AdminController@editsub')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
