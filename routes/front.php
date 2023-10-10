<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;

Route::get('/front',function(){
    return view('front-agency');// call view : fornt-agency.blade.php
});


// Route::get('/home',function() {
//     return view('front_home');
// });

Route::get('/',[FrontPageController::class,'index'])->name('front.home');
Route::get('/about',[FrontPageController::class,'about'])->name('front.about');
Route::get('/services',[FrontPageController::class,'services'])->name('front.services');
Route::get('/package',[FrontPageController::class,'package'])->name('front.package');
Route::get('/contact',[FrontPageController::class,'contact'])->name('front.contact');
Route::get('/destination',[FrontPageController::class,'destination'])->name('front.destination');
Route::get('/booking',[FrontPageController::class,'booking'])->name('front.booking');
Route::get('/travelguides',[FrontPageController::class,'travelguides'])->name('front.travelguides');
Route::get('/testimonial',[FrontPageController::class,'testimonial'])->name('front.testimonial');
Route::get('/error',[FrontPageController::class,'error'])->name('front.error');





Route::get('/master',function(){
    return view('front_master');
});