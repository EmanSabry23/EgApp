<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\Vacancies\VacanciesController;
use App\Http\Controllers\User\Contactus\ContactusController;
use App\Http\Controllers\User\NewsLetter\NewsLetterController;
use App\Http\Controllers\LangController;
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

Route::group(['middleware' => 'prevent-back-history'],function(){
    Route::get('home', [LangController::class, 'index']);
    Route::get('change', [LangController::class, 'change'])->name('changeLang');

    ////////////////////////// Eegin Route User ////////////////////
    Route::group(['namespase' => 'User'] , function(){
        Route::get('/' , [HomeController::class , 'index']);
        Route::get('/dashboard' , [HomeController::class , 'dashboard']);
        Route::get('/register' , [HomeController::class , 'register'])->middleware();

        // Route Pages
        Route::get('/about-us' ,[HomeController::class , 'about_us'])->name('pages.user.aboutus');
        Route::get('/team' ,[HomeController::class , 'team'])->name('pages.user.team');
        Route::get('/contact-us' ,[HomeController::class , 'contactus'])->name('pages.user.contactus');
        
        // Route Vacancies
        Route::group(['namespace' => 'Vacancies'] , function(){
            Route::group(['prefix' => 'Vacancies'] , function(){
                Route::get('/show' , [VacanciesController::class , 'show'])->name('user.vacancies.show');
                Route::post('/store' , [VacanciesController::class , 'store'])->name('user.vacancies.store');
            });
        });

        // Route Contact Us
        Route::group(['namespace' => 'Contactus'] , function(){
            Route::group(['prefix' => 'Contactus'] , function(){
                // Route::get('/index' , [ContactusController::class , 'index'])->name('user.contactus.index');
                Route::post('/store' , [ContactusController::class , 'store'])->name('user.contactus.store');
            });
        });

        // Route NewsLetters
        Route::group(['namespace' => 'NewsLetter'] , function(){
            Route::post('/store' , [NewsLetterController::class , 'store'])->name('user.newsletter.store');
        });
        
    });
    ////////////////////////// End Route User ////////////////////



});