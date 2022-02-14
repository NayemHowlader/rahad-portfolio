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
Route::get('/','Frontend\MainPagesController@index')->name('home');

Route::post('/contact/store','Frontend\ContactController@store')->name('contact.store');
//frontend end//
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

     //Portfoliocategory Controller end

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



 //NewsCategory Controller

 Route::group(['prefix' => 'news','as'=>'news.'],function(){
  Route::get('/category/index','NewsCategoryController@index')->name('category.index');
  Route::get('/category/create','NewsCategoryController@create')->name('category.create');
  Route::post('/category/store','NewsCategoryController@store')->name('category.store');
  Route::get('/category/edit/{id}','NewsCategoryController@edit')->name('category.edit');
  Route::post('/category/update/{id}','NewsCategoryController@update')->name('category.update');
  Route::get('category/delete/{id}','NewsCategoryController@delete')->name('category.delete');
 
 
});

//NewsCategory Controller end


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
  Route::group(['prefix' => 'about','as' => 'about.'],function(){
    Route::get('/interest/index','InterestController@index')->name('interest.index');
    Route::get('/interest/create','InterestController@create')->name('interest.create');
    Route::post('/interest/store','InterestController@store')->name('interest.store');
    Route::get('/interest/edit/{id}','InterestController@edit')->name('interest.edit');
    Route::post('/interest/update/{id}','InterestController@update')->name('interest.update');
    Route::get('/interest/destroy/{id}','InterestController@destroy')->name('interest.destroy');
});
//--------------------interest controller end--------------------


  //--------------------programming controller stat--------------------
  Route::group(['prefix' => 'about','as' => 'about.'],function(){
    Route::get('/programming/index','ProgrammingController@index')->name('programming.index');
    Route::get('/programming/create','ProgrammingController@create')->name('programming.create');
    Route::post('/programming/store','ProgrammingController@store')->name('programming.store');
     Route::get('/programming/edit/{id}','ProgrammingController@edit')->name('programming.edit');
     Route::post('/programming/update/{id}','ProgrammingController@update')->name('programming.update');
     Route::get('/programming/destroy/{id}','ProgrammingController@destroy')->name('programming.destroy');
});
//--------------------programming controller end--------------------


  //--------------------programming controller stat--------------------
     Route::group(['prefix' => 'about','as' => 'about.'],function(){
     Route::get('/language/index','LanguageController@index')->name('language.index');
     Route::get('/language/create','LanguageController@create')->name('language.create');
     Route::post('/language/store','LanguageController@store')->name('language.store');
     Route::get('/language/edit/{id}','LanguageController@edit')->name('language.edit');
     Route::post('/language/update/{id}','LanguageController@update')->name('language.update');
     Route::get('/language/destroy/{id}','LanguageController@destroy')->name('language.destroy');
});
//--------------------programming controller end--------------------


  //--------------------education controller stat--------------------
  Route::group(['prefix' => 'about','as' => 'about.'],function(){
    Route::get('/education/index','EducationController@index')->name('education.index');
    Route::get('/education/create','EducationController@create')->name('education.create');
    Route::post('/education/store','EducationController@store')->name('education.store');
    Route::get('/education/edit/{id}','EducationController@edit')->name('education.edit');
    Route::post('/education/update/{id}','EducationController@update')->name('education.update');
    Route::get('/education/destroy/{id}','EducationController@destroy')->name('education.destroy');
});
//--------------------education controller end--------------------


 //--------------------experience controller stat--------------------
 Route::group(['prefix' => 'about','as' => 'about.'],function(){
  Route::get('/experience/index','ExperienceController@index')->name('experience.index');
  Route::get('/experience/create','ExperienceController@create')->name('experience.create');
  Route::post('/experience/store','ExperienceController@store')->name('experience.store');
  Route::get('/experience/edit/{id}','ExperienceController@edit')->name('experience.edit');
  Route::post('/experience/update/{id}','ExperienceController@update')->name('experience.update');
  Route::get('/experience/destroy/{id}','ExperienceController@destroy')->name('experience.destroy');
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
          Route::group(['prefix' => 'contact.replay','as' => 'contact.replay.'],function(){
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






