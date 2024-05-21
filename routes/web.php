<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;
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
    return view('auth.login');
})->name('login');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/userlogin',[UserController::class,'frontend_login'])->name('frontend_login');
Route::post('/user/logout', [LoginController::class, 'userLogout'])->name('user.logout');

Route::get('/create_page',[PageController::class,'creat_a_page'])->name('create_page');
Route::post('/create_page_save',[PageController::class,'save_create_page'])->name('save_page');

Route::post('/login_with_access_code',[UserController::class,'login_with_access_code'])->name('login_with_access_code');
Route::get('/login_with_access_code', function () {
    return redirect('/login');
});
Route::post('/request_with_access_code',[UserController::class,'request_with_access_code'])->name('request_with_access_code');

Route::get('hnotifications',[UserController::class,'hnotifications'])->name('hnotifications');

Route::get('giveaccess/{id}',[UserController::class,'giveaccess'])->name('giveaccess');
//pages footer 


Route::get('/abouts',function(){
    return view('Frontend.about');
})->name('abouts');



Route::get('/vision',function(){
    return view('Frontend.vision');
})->name('vision');


Route::get('/abouts',function(){
    return view('Frontend.about');
})->name('abouts');

Route::get('/mission',function(){
    return view('Frontend.mission');
})->name('mission');

Route::get('/privacy',function(){
    return view('Frontend.privacy');
})->name('privacy');


Route::get('/terms',function(){
    return view('Frontend.terms');
})->name('terms');


Route::get('/faqs',function(){
    return view('Frontend.faqs');
})->name('faqs');



Route::get('/business',function(){
    return view('Frontend.business');
})->name('business');


Route::get('/mediakit',function(){
    return view('Frontend.mediakit');
})->name('mediakit');


Route::get('/charties',function(){
    return view('Frontend.charties');
})->name('charties');


Route::get('/tech',function(){
    return view('Frontend.tech');
})->name('tech');




Route::get('/contact',function(){
    return view('Frontend.contact');
})->name('contact');






Route::group(['middleware' => ['auth', 'honouree']], function(){
    Route::get('/pageone', [PageController::class, 'pageone'])->name('pageone');
    Route::get('/UserProfile',[UserController::class,'profile_honree'])->name('profile_honree');
    Route::post('/update-profile', [UserController::class,'update_profile'])->name('update_profile');
    Route::get('/honreelogout', [LoginController::class, 'userLogout'])->name('honree_logout');

    Route::post('/bannerimage',[PageController::class,'bange_image'])->name('banner_image');

    Route::post('/savequotes/{id}',[PageController::class,'save_quotes'])->name('savequotes');
    Route::post('/videoupload',[PageController::class,'videoupload'])->name('videoupload');

    Route::post('/update-dates',[PageController::class,'update_dates'])->name('update-dates');

    Route::post('/add-quote',[PageController::class,'add_quote'])->name('add_quote');

    Route::post('/add-relation',[PageController::class,'add_relation'])->name('add_relation');

    Route::post('/update-relationship',[PageController::class,'update_relationship'])->name('update_relationship');
    Route::post('/ganeral-setting',[PageController::class,'ganeral_setting'])->name('ganeral_setting');
    Route::post('/add-general-knowledge',[PageController::class,'add_general_knowledge'])->name('add_general_knowledge');
    Route::post('/add-question-answers',[PageController::class,'add_question_answers'])->name('add_question_answers');
    Route::post('/update-faq-content',[PageController::class,'update_faq_content'])->name('update_faq_content');
    Route::post('/add-guestbook',[PageController::class,'add_guestbook'])->name('add_guestbook');
    Route::post('/update-guestbook-content',[PageController::class,'update_guestbook_content'])->name('update_guestbook_content');
    Route::post('/update-generalknowledge-content',[PageController::class,'update_generalknowledge_content'])->name('update_generalknowledge_content');
    Route::post('/add-story',[PageController::class,'add_story'])->name('addstory');
    Route::post('/update-story-content',[PageController::class,'update_story_content'])->name('update_story_content');
    Route::post('/update-story-image',[PageController::class,'update_story_image'])->name('update_story_image');
    Route::post('/add-sounds-clip',[PageController::class,'uploadsoundsclip'])->name('uploadsoundsclip');
    Route::post('/update-soundclip-audio',[PageController::class,'update_soundclip_audio'])->name('update_soundclip_audio');
    Route::post('/update-soundclip-content',[PageController::class,'update_soundclip_content'])->name('update_soundclip_content');
    Route::post('/update-transition-content',[PageController::class,'update_transition_content'])->name('update_transition_content');
    Route::post('/update-obituary-content',[PageController::class,'update_obituary_content'])->name('update_obituary_content');
    Route::post('/obituray-boxesupdate-content',[PageController::class,'obituray_boxesupdate_content'])->name('obituray_boxesupdate_content');
    Route::post('/eulogyupdate-content',[PageController::class,'add_euolgy'])->name('add_euolgy');
    Route::post('/add-download-order-of-service-euolgy',[PageController::class,'add_download_order_of_service_euolgy'])->name('add_download_order_of_service_euolgy');
    Route::post('/add-download-order-video-of-service-euolgy',[PageController::class,'add_download_order_of_service_videoeulogy_euolgy'])->name('add_download_order_of_service_videoeulogy_euolgy');
    Route::post('/add-tributes',[PageController::class,'add_tributes'])->name('addtributes');
    Route::post('/update-tribute-content',[PageController::class,'update_tribute_content'])->name('update_tribute_content');
    Route::post('/add-mesageshonureemodal',[PageController::class,'add_mesageshonureemodal'])->name('add_mesageshonureemodal');
    Route::post('/update-messagehonuree-content',[PageController::class,'update_messagehonuree_content'])->name('update_messagehonuree_content');
    Route::post('/add-donationmodal',[PageController::class,'add_donationmodal'])->name('add_donationmodal');
    Route::post('/update-donation-content',[PageController::class,'update_donation_content'])->name('update_donation_content');
    Route::post('/update-donation-image',[PageController::class,'update_donation_image'])->name('update_donation_image');
    Route::post('/add-relative-and-friends',[PageController::class,'add_relative_and_friends'])->name('add_relative_and_friends');
    Route::post('/update-relationandrelative-text',[PageController::class,'relativeupdateText'])->name('relativeupdateText');
    Route::post('/update-relationandrelative-image',[PageController::class,'relativeupdateImage'])->name('relativeupdateImage');
    Route::post('/add-gallery-images',[PageController::class,'add_galleryimages'])->name('add_galleryimages');


});

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

        Route::get('/admin/category',[CategoryController::class,'display_categories'])->name('admin.categories');
        Route::get('/admin/create-category',function(){
            return view('admin.categories.add_category');
        })->name('admin.add_category');
        Route::post('/admin/create-category',[CategoryController::class,'create_category'])->name('admin.categories.store');
        Route::get('/admin/editcategory/{id}',[CategoryController::class,'display'])->name('admin.editCategory');
        Route::post('/admin/updatecategory/{id}',[CategoryController::class,'update_category'])->name('admin.update_category');
        Route::post('/admin/deletecategory/{id}',[CategoryController::class,'delete_category'])->name('admin.delete_category');
    });
});