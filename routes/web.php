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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/tentang','AboutsController@index')->name('tentang');
Route::get('/berita',"NewsController@index")->name('berita');
Route::get('/berita/detail/{id}',"NewsController@detail")->name('detail-berita');
Route::get('/pengumuman',"AnnouncementsController@index")->name('pengumuman');
Route::get('/pengumuman/detail/{id}',"AnnouncementsController@detail")->name('detail-pengumuman');

// ADMIN
// ->middleware(['auth','admin'])
Route::prefix('admin')    
    ->namespace('Admin')        
    ->group(function(){
        Route::get('/','DashboardController@index')->name('admin-dashboard');
        Route::resource('data-pengumuman','AnnouncementController');
        Route::get('dataPengumuman/{id}','AnnouncementController@detail')->name('dataPengumuman');        
        Route::resource('data-berita','NewsAdminController');
});


// Route::get('/data/pengumuman-admin','Admin\AnnouncementsController@index')->name('pengumuman-admin');
// Route::get('/data/pengumuman-admin/details/{id}','Admin\AnnouncementsController@details')->name('pengumuman-admin-details');
// Route::get('/data/pengumuman-admin/edits/{id}','Admin\AnnouncementsController@edits')->name('pengumuman-admin-edits');

// Route::get('/data/berita-admin','Admin\NewsController@index')->name('berita-admin-acc');
// Route::get('/data/berita-admin/edits/{id}','Admin\NewsController@edits')->name('berita-admin-edits-acc');
// Route::get('/data/berita-admin/details/{id}','Admin\NewsController@details')->name('berita-admin-details-acc');

// Route::get('/data/kuisioner-admin','Admin\QuisionerController@index')->name('kuisioner-admin-acc');
// Route::get('/data/kuisioner-admin/edits/{id}','Admin\QuisionerController@edits')->name('kuisioner-admin-edits');

// Route::get('/data/responden-admin','Admin\RespondenController@index')->name('responden-admin');
// Route::get('/data/responden-admin/details/{id}','Admin\RespondenController@details')->name('responden-admin-details');

// Route::get('/data/user-admin','Admin\UserController@index')->name('user-admin');
// Route::get('/data/user-admin/edits/{id}','Admin\UserController@edits')->name('user-admin-edits');
// Route::get('/data/user-admin/details/{id}','Admin\UserController@details')->name('user-admin-details');

// Route::get('/admin/setting','Admin\AccountController@setting')->name('setting-admin');
// Route::get('/account/ubah-password','Admin\AccountController@changePassword')->name('user-change-password');




// User
// Route::get('/dashboard-user','User\DashboardController@index')->name('dashboard-user');
// Route::get('/quisioner/one','User\QuisionerController@quisionerOne')->name('quisionerOne-user');
// Route::get('/quisioner/two','User\QuisionerController@quisionerTwo')->name('quisionerTwo-user');
// Route::get('/quisioner/three','User\QuisionerController@quisionerThree')->name('quisionerThree-user');
// Route::get('/quisioner/four','User\QuisionerController@quisionerFour')->name('quisionerFour-user');

// Route::get('/user/setting','User\AccountController@setting')->name('setting-user');
// Route::get('/account/password','User\AccountController@changePassword')->name('password-user');

// Route::get('/success','User\AccountController@success')->name('success-user');

Auth::routes(['verify' => true]);


