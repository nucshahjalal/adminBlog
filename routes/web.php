<?php

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
//     return view('welcome');
// });

route::get('/ftest',function(){
  return view('admin.catagory.ftest');
});
Route::get('test','Controller@index');
Route::get('dd','Controller@dd');
Route::get('/aa','testcontroller@html');

Route::get('/sub','testcontroller@sub');

Route::get('/array','testcontroller@showdata');//https://www.youtube.com/watch?v=-F4PNwHFYos
Route::get('/forelse','testcontroller@forelseloop');//https://www.youtube.com/watch?v=SYy4_PWKWC0
Route::get('/elseif','testcontroller@elseif');//https://www.youtube.com/watch?v=SYy4_PWKWC0
Route::get('/loop','testcontroller@loop');



Route::get('/testing',"testcontroller@testing");
Route::get('/html',"testcontroller@html");
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/ppt','testcontroller@myfun');

Route::get('/ppt/{fname}/{lname}/{value}','testcontroller@myfun');//url parameter pass


////route group
route::group(['prefix'=>'account'],function(){


route::get('/profile',function(){
	return 'profile';
});
route::get('/login',function(){
	return 'login';
});
route::get('/logout',function(){
	return 'logoup';
});
route::get('/signup',function(){
	return 'signup';
});
route::get('/updateprofile',function(){
	return 'updateprofile';
});
//https://www.youtube.com/watch?v=uW7wisdan0o
/*route::get('/account/profile',);
route::get('/account/login',);
route::get('/account/logout',);
route::get('/account/signup',);
route::get('/account/updateprofile');
*/

});




//admin template//
Route::get('/home', function () {
    return view('admin.page.dashboard');
});
Route::get('/home2', function () {
    return view('home');
});

route::get('/master',function(){
    return view('admin.master');
   });

route::get('/dashboard',function(){
    return view('admin.page.dashboard');
   });


route::get('/user-login',function(){
    return view('admin.page.user_login');
   });
route::get('/user-register',function(){
    return view('admin.page.user_register');
   });

route::get('/forgot-password',function(){
    return view('admin.page.forgot_password');
   });


// route::get('/user-register',function(){
//     return view('admin.page.user_register');
//    });

//session start 
route::get('/session',function(){
  return view('session.index');
});
//https://www.youtube.com/watch?v=l4_aKx7xk7s
route::get('/userlogin',function(){
  return view('session.userlogin');
});
//sessin end


// admin category start


route::get('/create',"admin\catagoryController@create");
route::post('/save-category',"admin\catagoryController@store");
route::get('/manage-catagory',"admin\catagoryController@index");
route::get('/edit-category/{id}',"admin\catagoryController@edit");
route::post('/update-category','admin\catagoryController@update');
route::get('/delete-category/{id}','admin\catagoryController@destroy');

//  post catagory start
route::get('/add-post','admin\NewpostController@create');
route::post('/save-post',"admin\NewpostController@store");
//route::post('/save-post',"admin\NewpostController@store");