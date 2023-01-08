<?php

use App\Http\Controllers\Admin\VacanciesAdmin\VacanciesAdminController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Admin\Contactus\ContactusAdminController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\TeamWork\TeamWorkController;
use App\Http\Controllers\Admin\Services\ServiceController;
use App\Http\Controllers\Admin\Services\ServiceCategoryController;
use App\Http\Controllers\Admin\Portfolio\PortfolioController;
use App\Http\Controllers\Admin\NewsLetter\NewsLetterController;
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



    ////////////////////////// Eegin Route Admin ////////////////////
    Route::group(['namespase' => 'Admin'] , function(){
        Route::group(['prefix' => 'Vacancies_Admin'] , function(){
            Route::get('/show' ,[VacanciesAdminController::class , 'show'])->name('admin.vacancies_Admin.show');
            Route::get('/view/{id}' ,[VacanciesAdminController::class , 'view'])->name('admin.vacancies_Admin.view');
        });
        Route::group(['prefix' => 'Users'] , function(){
            Route::get('/index' ,[UserController::class , 'index'])->name('admin.users.index');
            Route::get('/edit/{id}' ,[UserController::class , 'edit'])->name('admin.users.edit');
            Route::post('/update/{id}' ,[UserController::class , 'update'])->name('admin.users.update');
            Route::post('/destroy/{id}' ,[UserController::class , 'destroy'])->name('admin.users.destroy');
        });
        Route::group(['prefix' => 'ContactusAdmin'] , function(){
            Route::get('/index' ,[ContactusAdminController::class , 'index'])->name('admin.contactAdmin.index');
            Route::get('/show/{id}' ,[ContactusAdminController::class , 'show'])->name('admin.contactAdmin.show');
            // Route::post('/update/{id}' ,[UsersController::class , 'update'])->name('admin.users.update');
            Route::get('/destroy/{id}' ,[ContactusAdminController::class , 'destroy'])->name('admin.contactAdmin.destroy');
        });
        // Route Categories
        Route::group(['namespace' => 'Category'] , function(){
            Route::group(['prefix' => 'Category'] , function(){
                Route::get('/create' , [CategoryController::class , 'create'])->name('admin.category.create');
                Route::post('/store' , [CategoryController::class , 'store'])->name('admin.category.store');
                Route::get('/index' , [CategoryController::class , 'index'])->name('admin.category.index');
                Route::get('/edit/{id}' , [CategoryController::class , 'edit'])->name('admin.category.edit');
                Route::post('/update/{id}' , [CategoryController::class , 'update'])->name('admin.category.update');
                Route::get('/destroy/{id}' , [CategoryController::class , 'destroy'])->name('admin.category.destroy');
            });
        });

         // Route Team Work
         Route::group(['namespace' => 'TeamWork'] , function(){
            Route::group(['prefix' => 'TeamWork'] , function(){
                Route::get('/create' , [TeamWorkController::class , 'create'])->name('admin.teamWork.create');
                Route::post('/store' , [TeamWorkController::class , 'store'])->name('admin.teamWork.store');
                Route::get('/index' , [TeamWorkController::class , 'index'])->name('admin.teamWork.index');
                Route::get('/edit/{id}' , [TeamWorkController::class , 'edit'])->name('admin.teamWork.edit');
                Route::post('/update/{id}' , [TeamWorkController::class , 'update'])->name('admin.teamWork.update');
                Route::get('/destroy/{id}' , [TeamWorkController::class , 'destroy'])->name('admin.teamWork.destroy');
            });
        });

        // Route Services
        Route::group(['namespace' => 'Services'] , function(){
            Route::group(['prefix' => 'services'] , function(){
                Route::get('/create' , [ServiceController::class, 'create'])->name('admin.service.create');
                Route::post('/store' , [ServiceController::class, 'store'])->name('admin.service.store');
                Route::get('/index' , [ServiceController::class, 'index'])->name('admin.service.index');
                Route::get('/edit/{id}' , [ServiceController::class, 'edit'])->name('admin.service.edit');
                Route::post('/update/{id}' , [ServiceController::class, 'update'])->name('admin.service.update');
                Route::get('/destroy/{id}' , [ServiceController::class, 'destroy'])->name('admin.service.destroy');
            });
        });
        // Route Services Category
        Route::group(['namespace' => 'Services'] , function(){
            Route::group(['prefix' => 'services-category'] , function(){
                Route::get('/create' , [ServiceCategoryController::class, 'create'])->name('admin.serviceCategory.create');
                Route::post('/store' , [ServiceCategoryController::class, 'store'])->name('admin.serviceCategory.store');
                Route::get('/index' , [ServiceCategoryController::class, 'index'])->name('admin.serviceCategory.index');
                Route::get('/edit/{id}' , [ServiceCategoryController::class, 'edit'])->name('admin.serviceCategory.edit');
                Route::post('/update/{id}' , [ServiceCategoryController::class, 'update'])->name('admin.serviceCategory.update');
                Route::get('/destroy/{id}' , [ServiceCategoryController::class, 'destroy'])->name('admin.serviceCategory.destroy');
            });
        });

        // Route Portfolio
        Route::group(['namespace' => 'Porfolio'] , function(){
            Route::group(['prefix' => 'portfolio'] , function(){
                Route::get('/create' , [PortfolioController::class, 'create'])->name('admin.portfolio.create');
                Route::post('/store' , [PortfolioController::class, 'store'])->name('admin.portfolio.store');
                Route::get('/index' , [PortfolioController::class, 'index'])->name('admin.portfolio.index');
                Route::get('/edit/{id}' , [PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
                Route::post('/update/{id}' , [PortfolioController::class, 'update'])->name('admin.portfolio.update');
                Route::get('/destroy/{id}' , [PortfolioController::class, 'destroy'])->name('admin.portfolio.destroy');
            });
        });

        // Route NewsLetters 
        Route::group(['namespace' => 'NewsLetter'] , function(){
            Route::group(['prefix' => 'newsletter'] , function(){
                Route::get('/index' , [NewsLetterController::class, 'index'])->name('admin.newsletter.index');
                Route::get('/destroy/{id}' , [NewsLetterController::class, 'destroy'])->name('admin.newsletter.destroy');
            });
        });
    });


    Route::middleware(['auth' , 'role:super admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::get('/', [IndexController::class, 'index'])->name('index');
        Route::resource('/roles', RoleController::class);
        Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
        Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');

        Route::resource('/permissions', PermissionController::class);

        Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
        Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
        Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
        Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
        Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
        Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
    });
    ////////////////////////// End Route Admin ////////////////////

});