<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin;
use Illuminate\Http\Request;

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
Route::get('pass',function(){
    // return response()->json([
    //     'pass'=>'hoanle396',
    //     'hash'=>Hash::make('hoanle396'),
    // ]);
    return view('pages.detailproduct');
});

Route::get('/lang/{locale}',function($locale){
   if(!in_array($locale,['vi','en','jp','ko','cn','pt'])){
    abort(404);
   }
   session()->put('locale',$locale);
   return redirect()->back();
});
Route::get('/',[HomeController::class,'index']);

Route::get('/login',[Admin\AuthenAdmin::class,'index'])->name('login');
Route::post('/login',[Admin\AuthenAdmin::class,'login']);

Route::get('car-all',[HomeController::class,'product']);
Route::get('feed-back',function(){
    return view('pages.contact.feedback');
});

Route::get('news',[HomeController::class,'news']);
Route::get('new/{id}',[HomeController::class,'new']);
Route::get('service/{service}',[HomeController::class,'service']);
Route::get('services/{id}',[HomeController::class,'services']);
Route::get('car/{brand}',[HomeController::class,'car']);
Route::post('car/search',[HomeController::class,'search']);
route::get('car/detail/{id}',[HomeController::class,'detail']);
//Admin

Route::middleware('admin')->group(function () {
    Route::get('/logout', function () {
        if (session()->has('admin')) {
            session()->remove('admin');
            return redirect()->route('login');
        } else return redirect()->route('login');
    })->name('logout');
    Route::prefix('/admin')->group(function () {
        Route::get('/',[App\Http\Controllers\Admin\DashBoard::class,'index'])->name('dashboard');
        Route::get('/settings',[App\Http\Controllers\Admin\DashBoard::class,'getsetting'])->name('getsetting');
        Route::post('settings', [App\Http\Controllers\Admin\DashBoard::class,'settings'])->name('settings');
        Route::resource('brand', Admin\Brand::class);
        Route::resource('car', Admin\CarController::class);
        Route::resource('brand-service', Admin\servicebrand::class);
        Route::resource('service', Admin\Service::class);
        Route::resource('news', Admin\NewsController::class);
        Route::resource('/banner',Admin\Banner::class);
    });
});
