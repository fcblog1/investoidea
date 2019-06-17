<?php

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
Route::post('login.custom','LoginController@login')->name('login.custom');
Route::get('/','Auth\LoginController@showLoginForm')->name('login');

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
  /*
  *****
  ****
  ***
  **
  AdminPagesController
  */
  Route::get('pendinginvestor','InvestmentController@pendinginvestor')->name('pendinginvestor');

  Route::get('approvalsend/{id}' ,'MailController@approvalsend')->name('approvalsend');

  Route::get('/','AdminPagesController@listproject')->name('listproject');
  Route::get('addproject','AdminPagesController@addproject')->name('addproject');
  Route::post('insertproject','AdminPagesController@insertproject')->name('insertproject');

  Route::get('listproject','AdminPagesController@listproject')->name('listproject');

  Route::get('editproject/{id}','AdminPagesController@editproject')->name('editproject');

  Route::get('img_delete/{id}/{img}','AdminPagesController@img_delete')->name('img_delete');

  Route::post('delete/{id}','AdminPagesController@delete')->name('delete');

  Route::post('updateproject/{id}','AdminPagesController@updateproject')->name('updateproject');

  Route::get('viewinvestor','AdminPagesController@viewinvestor')->name('viewinvestor');

  Route::get('investordetails/{id}','AdminPagesController@investordetails')->name('investordetails');

  Route::get('viewsetting','SettingController@viewsetting')->name('viewsetting');

  Route::post('updatesetting','SettingController@updatesetting')->name('updatesetting');
  /*
  *****
  ****
  ***
  **
  /. AdminPagesController
  */
});



Route::middleware(['verified','user','userverify'])->prefix('user')->group(function () {
  /*
  *****
  ****
  ***
  **
  UserPagesController
  */
  Route::get('/','UserPagesController@viewproject')->name('viewproject');

  Route::get('readmore/{id}','UserPagesController@readmore')->name('readmore');

  Route::get('userinvestment','UserPagesController@userinvestment')->name('userinvestment');

  /*
  *****
  ****
  ***
  **
  /.UserPagesController
  */
  Route::post('storeinvest','InvestmentController@store')->name('storeinvest');

});


Auth::routes(['verify' => true]);
Route::get('adminverify',function(){
  return view('adminverify');
})->name('adminverify');

Route::get('logout','LoginController@logout')->name('logout');
