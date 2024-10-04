<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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


Route::view('/', 'index')
       ->name('index');

Route::view('/login', 'auth.login')
        ->name('login');

Route::view('/logout', 'logout')
        ->name('logout');        

Route::view('/register', 'auth.register')
        ->name('register');

Route::view('/faq', 'faq')
        ->name('faq');

Route::view('/checkout', 'checkout')
        ->name('checkout');

Route::view('/create_event', 'event.create_event')
        ->name('create_event');




Route::view('/profile', 'profile.user_profile')
        ->name('profile');



Route::view('/user', 'profile.user.user')
        ->name('user');
        
Route::view('/user/history', 'profile.user.history')
        ->name('user_history');

Route::view('/user/modify', 'profile.user.modify')
        ->name('user_modify');




Route::view('/promoter', 'profile.promoter.promoter')
        ->name('promoter');
        
Route::view('/promoter/create_events', 'profile.promoter.create_events')
        ->name('create_events');

Route::view('/promoter/manage_events', 'profile.promoter.manage_events')
        ->name('manage_events');

Route::view('/promoter/show_events', 'profile.promoter.show_events')
        ->name('show_events');



Route::view('/admin', 'profile.admin.admin')
        ->name('admin');
        
Route::view('/admin/delete_users', 'profile.admin.delete_users')
        ->name('delete_users');

Route::view('/admin/manage_promoters', 'profile.admin.manage_promoters')
        ->name('manage_promoters');

Route::view('/admin/show_promoters', 'profile.admin.show_promoters')
        ->name('show_promoters');

Route::view('/admin/manage_faq', 'profile.admin.manage_faq')
        ->name('manage_faq');


Route::get('/catalog', [Controllers\PublicController::class, 'showEvent'])
        ->name('catalog');

Route::get('/catalog/{eventCat}', [Controllers\PublicController::class, 'showEventByCat'])
        ->name('eventCat');

Route::get('/event/{eventID}', [Controllers\PublicController::class, 'showEventByID'])
        ->name('eventID');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
