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
//frontend start//

Auth::routes(['register' => false,'login' => false]);

Route::get('/','Frontend\MainPagesController@index')->name('home');

Route::post('/contact/store','Frontend\ContactController@store')->name('contact.store');
//frontend end//


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


        // user restore
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


   // --------------Main Content controller start--------------

    Route::group(['prefix' => 'main','as'=>'main.'],function(){
        Route::get('/index','MainContentController@index')->name('index');
        Route::post('/update','MainContentController@update')->name('update');
       
    });

  // --------------Main Content controller end--------------

    // --------------About me controller start--------------

    Route::group(['prefix' => 'about','as'=>'about.'],function(){
        Route::get('/index','AboutMeController@index')->name('index');
        Route::post('/update/{id}','AboutMeController@update')->name('update');
       
    });

     // --------------About me controller end--------------

    
 // --------------Portfoliocategory  controller start--------------
    Route::group(['prefix' => 'portfolio/category','as'=>'portfolio.category.'],function(){
        Route::get('/index','PortfolioCategoryController@index')->name('index');
        Route::get('/create','PortfolioCategoryController@create')->name('create');
        Route::post('/store','PortfolioCategoryController@store')->name('store');
        Route::get('/edit/{id}','PortfolioCategoryController@edit')->name('edit');
        Route::post('/update/{id}','PortfolioCategoryController@update')->name('update');
        Route::get('/delete/{id}','PortfolioCategoryController@delete')->name('delete');
       
       
    });

     // --------------Portfoliocategory  controller end--------------
 

      //-------------portfolio controller start --------

    Route::group(['prefix' => 'portfolio','as'=>'portfolio.'],function(){
        Route::get('/index','PortfolioController@index')->name('index');
        Route::get('/create','PortfolioController@create')->name('create');
        Route::post('/store','PortfolioController@store')->name('store');
        Route::get('/edit/{id}','PortfolioController@edit')->name('edit');
        Route::post('/update/{id}','PortfolioController@update')->name('update');
        Route::get('/destroy/{id}','PortfolioController@destroy')->name('destroy');      
       
    });


 //-------------portfolio controller end --------



  //-------------NewsCategory controller start --------
 Route::group(['prefix' => 'news','as'=>'news.'],function(){
  Route::get('/category/index','NewsCategoryController@index')->name('category.index');
  Route::get('/category/create','NewsCategoryController@create')->name('category.create');
  Route::post('/category/store','NewsCategoryController@store')->name('category.store');
  Route::get('/category/edit/{id}','NewsCategoryController@edit')->name('category.edit');
  Route::post('/category/update/{id}','NewsCategoryController@update')->name('category.update');
  Route::get('category/delete/{id}','NewsCategoryController@delete')->name('category.delete');
 
 
});
  //-------------NewsCategory controller end --------


 //-------------news controller start --------

 Route::group(['prefix' => 'news','as'=>'news.'],function(){
  Route::get('/index','NewsController@index')->name('index');
  Route::get('/create','NewsController@create')->name('create');
  Route::post('/store','NewsController@store')->name('store');
  Route::get('/edit/{id}','NewsController@edit')->name('edit');
  Route::post('/update/{id}','NewsController@update')->name('update');
  Route::get('/destroy/{id}','NewsController@destroy')->name('destroy');      
 
});


//-------------news controller end --------

  //--------------------service controller stat--------------------
  Route::group(['prefix' => 'service','as' => 'service.'],function(){
    Route::get('/index','ServiceController@index')->name('index');
    Route::get('/create','ServiceController@create')->name('create');
    Route::post('/store','ServiceController@store')->name('store');
    Route::get('/edit/{id}','ServiceController@edit')->name('edit');
    Route::post('/update/{id}','ServiceController@update')->name('update');
    Route::get('/destroy/{id}','ServiceController@destroy')->name('destroy');
});
//--------------------service controller end--------------------


  //--------------------interest controller stat--------------------
  Route::group(['prefix' => 'about/interest','as' => 'about.interest.'],function(){
    Route::get('/index','InterestController@index')->name('index');
    Route::get('/create','InterestController@create')->name('create');
    Route::post('/store','InterestController@store')->name('store');
    Route::get('/edit/{id}','InterestController@edit')->name('edit');
    Route::post('/update/{id}','InterestController@update')->name('update');
    Route::get('/destroy/{id}','InterestController@destroy')->name('destroy');
});
//--------------------interest controller end--------------------


  //--------------------programming controller stat--------------------
  Route::group(['prefix' => 'about/programming','as' => 'about.programming.'],function(){
    Route::get('/index','ProgrammingController@index')->name('index');
    Route::get('/create','ProgrammingController@create')->name('create');
    Route::post('/store','ProgrammingController@store')->name('store');
     Route::get('/edit/{id}','ProgrammingController@edit')->name('edit');
     Route::post('/update/{id}','ProgrammingController@update')->name('update');
     Route::get('/destroy/{id}','ProgrammingController@destroy')->name('destroy');
});
//--------------------programming controller end--------------------


  //--------------------programming controller stat--------------------
     Route::group(['prefix' => 'about/language','as' => 'about.language.'],function(){
     Route::get('/index','LanguageController@index')->name('index');
     Route::get('/create','LanguageController@create')->name('create');
     Route::post('/store','LanguageController@store')->name('store');
     Route::get('/edit/{id}','LanguageController@edit')->name('edit');
     Route::post('/update/{id}','LanguageController@update')->name('update');
     Route::get('/destroy/{id}','LanguageController@destroy')->name('destroy');
});
//--------------------programming controller end--------------------


  //--------------------education controller stat--------------------
  Route::group(['prefix' => 'about/education','as' => 'about.education.'],function(){
    Route::get('/index','EducationController@index')->name('index');
    Route::get('/create','EducationController@create')->name('create');
    Route::post('/store','EducationController@store')->name('store');
    Route::get('/edit/{id}','EducationController@edit')->name('edit');
    Route::post('/update/{id}','EducationController@update')->name('update');
    Route::get('/destroy/{id}','EducationController@destroy')->name('destroy');
});
//--------------------education controller end--------------------


 //--------------------experience controller stat--------------------
 Route::group(['prefix' => 'about/experience','as' => 'about.experience.'],function(){
  Route::get('/index','ExperienceController@index')->name('index');
  Route::get('/create','ExperienceController@create')->name('create');
  Route::post('/store','ExperienceController@store')->name('store');
  Route::get('/edit/{id}','ExperienceController@edit')->name('edit');
  Route::post('/update/{id}','ExperienceController@update')->name('update');
  Route::get('/destroy/{id}','ExperienceController@destroy')->name('destroy');
});
//--------------------experience controller end--------------------


 //--------------------partner controller stat--------------------
 Route::group(['prefix' => 'partner','as' => 'partner.'],function(){
  Route::get('/index','PartnerController@index')->name('index');
  Route::get('/create','PartnerController@create')->name('create');
  Route::post('/store','PartnerController@store')->name('store');
  Route::get('/edit/{id}','PartnerController@edit')->name('edit');
  Route::post('/update/{id}','PartnerController@update')->name('update');
  Route::get('/destroy/{id}','PartnerController@destroy')->name('destroy');
});
//--------------------partner controller end--------------------


 //--------------------testimonial controller stat--------------------
 Route::group(['prefix' => 'testimonial','as' => 'testimonial.'],function(){
  Route::get('/index','TestimonialController@index')->name('index');
  Route::get('/create','TestimonialController@create')->name('create');
  Route::post('/store','TestimonialController@store')->name('store');
  Route::get('/edit/{id}','TestimonialController@edit')->name('edit');
  Route::post('/update/{id}','TestimonialController@update')->name('update');
  Route::get('/destroy/{id}','TestimonialController@destroy')->name('destroy');
});
//--------------------testimonial controller end--------------------


//--------------------Contact controller stat--------------------
Route::group(['prefix' => 'contact','as' => 'contact.'],function(){
    Route::get('/index','ContactController@index')->name('index');
    Route::get('/view/{id}','ContactController@view')->name('view');
    Route::get('/destroy/{id}','ContactController@destroy')->name('destroy');
});
//--------------------contact controller end--------------------//



          //--------------------Contact replay controller stat--------------------
          Route::group(['prefix' => 'contact/replay','as' => 'contact.replay.'],function(){
            Route::get('/index/{id}','ReplayMessageController@index')->name('index');
            Route::get('/replay/{id}','ReplayMessageController@replay')->name('replay');
            // Route::get('/create','ServiceController@create')->name('create');
             Route::post('/store','ReplayMessageController@store')->name('store');
            // Route::get('/edit/{id}','ServiceController@edit')->name('edit');
            // Route::post('/update/{id}','ServiceController@update')->name('update');
            // Route::get('/destroy/{id}','ReplayMessageController@destroy')->name('destroy');
        });
        //-------------------Contact replay end--------------------
    
    


});






