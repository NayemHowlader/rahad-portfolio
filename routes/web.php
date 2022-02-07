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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/','Frontend\MainPagesController@index')->name('home');

Auth::routes(['register' => false,'login' => false]);

Route::group(['namespace' => 'Admin\Auth','prefix'=>'admin','as' => 'admin.'],function(){
   // login controller
   Route::get('/login','LoginController@create')->name('login');
   Route::post('/login/authenticate','LoginController@authenticate')->name('login.authenticate');
   Route::get('/logout','LoginController@logout')->name('logout');

    // forget password
    Route::get('/forget/password','ForgetPasswordController@forget_password')->name('forget.password');
    Route::post('/forget/password/post','ForgetPasswordController@submitForgetPassword')->name('forget.password.post');

    //reset password
    Route::get('reset/password/{token}','ResetPasswordController@index')->name('reset.password');
    Route::post('reset-password/submit','ResetPasswordController@submitResetPasswordForm')->name('reset-password.submit-form');


    // verify user email
    Route::get('user/verify-email/{token}','VerifyUserController@verifyEmail')->name('user.verify_email');

});

Route::group(['namespace' => 'Admin','prefix'=>'admin','middleware' => ['auth','checkStatus','checkRole'],'as' => 'admin.'],function () {
    Route::get('/dashboard','HomeController@index')->name('dashboard');

    // --------------user controller start--------------
    Route::group(['prefix'=>'user','as' => 'user.'],function(){
        Route::get('/all','UserController@index')->name('index');
        Route::get('/create','UserController@create')->name('create');
        Route::post('/store','UserController@store')->name('store');
        Route::get('/edit/{id}','UserController@edit')->name('edit');
        Route::post('/update/{id}','UserController@update')->name('update');
        Route::get('/delete/{id}','UserController@delete')->name('delete');

        Route::get('/email-validate','UserController@emailValidate')->name('email-validate');


        // blog restore
        Route::get('/trash/restore/{email}','UserController@trashRestore')->name('restore');
        Route::get('/parmanent/delete/{email}','UserController@parmanentDelete')->name('permanentDelete');

    });
    // --------------user controller end--------------

      //-------------profile controller start-------
      Route::group(['prefix' => 'profile','as'=>'profile.'],function(){
        Route::get('/index','ProfileController@index')->name('index');
        Route::post('/update/{id}','ProfileController@profileUpdate')->name('update');
        Route::post('/update/password/{id}','ProfileController@update_password')->name('update_password');
    });
    //-------------profile controller end --------


    //Main content controller-////

    Route::group(['prefix' => 'main','as'=>'main.'],function(){
        Route::get('/index','MainContentController@index')->name('index');
        Route::post('/update','MainContentController@update')->name('update');
       
    });


      //About me controller-////

    Route::group(['prefix' => 'about','as'=>'about.'],function(){
        Route::get('/index','AboutMeController@index')->name('index');
        Route::post('/update/{id}','AboutMeController@update')->name('update');
       
    });


    //Portfoliocategory Controller

    Route::group(['prefix' => 'portfolio','as'=>'portfolio.'],function(){
        Route::get('/category/index','PortfolioCategoryController@index')->name('category.index');
        Route::get('/category/create','PortfolioCategoryController@create')->name('category.create');
        Route::post('/category/store','PortfolioCategoryController@store')->name('category.store');
        Route::get('/category/edit/{id}','PortfolioCategoryController@edit')->name('category.edit');
        Route::post('/category/update/{id}','PortfolioCategoryController@update')->name('category.update');
        Route::get('category/delete/{id}','PortfolioCategoryController@delete')->name('category.delete');
       
       
    });


    Route::group(['prefix' => 'portfolio','as'=>'portfolio.'],function(){
        Route::get('/index','PortfolioController@index')->name('index');
        Route::get('/create','PortfolioController@create')->name('create');
        Route::post('/store','PortfolioController@store')->name('store');
        Route::get('/edit/{id}','PortfolioController@edit')->name('edit');
        Route::post('/update/{id}','PortfolioController@update')->name('update');
        
        
       
    });



});






