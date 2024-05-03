<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PageController;
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
    return view('welcome');
});

Auth::routes();





Route::get('/',[FrontendController::class,'home_page'])->name('home');
Route::get('/login',function(){
    return view('Frontend.login');
})->name('login');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/userlogin',[UserController::class,'frontend_login'])->name('frontend_login');



Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');


Route::get('/create_page',[PageController::class,'creat_a_page'])->name('create_page');
Route::post('/create_page_save',[PageController::class,'save_create_page'])->name('save_page');





// Route::group(['middleware' => ['auth', 'honouree']], function(){
    Route::get('/pageone', [PageController::class, 'pageone'])->name('pageone');
// });



Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::view('/login','admin.login')->name('admin.login');
        Route::post('/login',[AdminController::class, 'authenticate'])->name('admin.auth');
    });
    
    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('/profile',[AdminController::class,'profile'])->name('admin.profile');
        
        Route::get('allusers',[UserController::class,'getallusers'])->name('admin.getallusers');
        Route::get('edit/{id}', [UserController::class, 'display_user'])->name('admin.edit_user');
        Route::post('/updateusers/{id}',[UserController::class,'update_user'])->name('admin.update_user');
        Route::post('delete_users/{id}',[UserController::class,'delete_user'])->name('admin.delete_user');

        //plans
        Route::get('/plans',[PlanController::class,'getPlans'])->name('admin.plans');
        Route::post('/plansdelete/{id}',[PlanController::class,'delete_plan'])->name('admin.delete_plan');
        Route::get('/addPlan',[PlanController::class,'add_plan'])->name('admin.add_plan');
        Route::post('/saveplan',[PlanController::class,'save_plan'])->name('admin.store_plan');
        Route::get('/planedit/{id}',[PlanController::class,'edit_plan'])->name('admin.edit_plan');
        Route::post('/planupdate/{id}',[PlanController::class,'update_plan'])->name('admin.update_plan');


        Route::get('/pages',[UserController::class,'page_created'])->name('admin.getpages_created');
        Route::get('/userpagehistory/{id}',[UserController::class,'userpagehistory'])->name('admin.userpagehistory');
        Route::post('/userpagedelete/{id}',[PageController::class,'delete_page'])->name('admin.delete_page');
        Route::get('/userhistory/{id}',[UserController::class,'page_history'])->name('user.history');





    });
});