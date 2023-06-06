<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MacsController;
use App\Http\Controllers\IpadsController;
use App\Http\Controllers\IphonesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;



// Fontend side --------------------------------------------------------------

// Show Index
Route::get('/',[ShowController::class, 'show_index']);
Route::get('/index',[ShowController::class, 'show_index']);

// Product page
Route::get('/mac',[ShowController::class, 'get_mac']);
Route::get('/ipad',[ShowController::class, 'get_ipad']);
Route::get('/iphone',[ShowController::class, 'get_iphone']);

// Detail Product
Route::get('/mac-{id}',[ShowController::class, 'show_mac']);
Route::get('/ipad-{id}',[ShowController::class, 'show_ipad']);
Route::get('/iphone-{id}',[ShowController::class, 'show_iphone']);

Route::get('/cart',[CartController::class, 'show']);
Route::get('/contact',[ShowController::class, 'show_contact']);

Route::post('/cart.add.mac',[CartController::class, 'add_cart_mac']);
Route::post('/cart.add.ipad',[CartController::class, 'add_cart_ipad']);
Route::post('/cart.add.iphone',[CartController::class, 'add_cart_iphone']);
Route::delete('/cart-delete-{id}',[CartController::class, 'delete_object']);

Route::post('/order.add',[OrderController::class, 'create_order']);

Route::post('/contact.create', [ContactsController::class, 'create_contact']);


// End Fontend side--------------------------------------------------------------


// backend side --------------------------------------------------------------
Route::get('/login', function () { return view('backend.auth-login'); });
Route::get('/auth-login', function () { return view('backend.auth-login'); });
Route::get('/auth-register', function () { return view('backend.auth-register'); });

Route::post('/register_user',[UserController::class, 'create_user']);
Route::post('/check_login',[UserController::class, 'check_login']);
Route::post('/logout',[UserController::class, 'logout']);

// Check User
Route::middleware('auth')->group(function(){
    // Users
    Route::get('/pages-account-settings-account', [UserController::class, 'view_user']);
    Route::put('/edit-pages-account-settings-account/{id}',[UserController::class, 'edit_user']);

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'view_dashboard']);

    // Mac
    Route::get('/macs', [MacsController::class, 'view_mac']);
    Route::post('/mac.create', [MacsController::class, 'create_mac']);
    Route::put('/mac-edit/{id}',[MacsController::class, 'edit_mac']);
    Route::delete('/mac-delete/{id}',[MacsController::class, 'delete_mac']);
    // iPad
    Route::get('/ipads', [IpadsController::class, 'view_ipad']);
    Route::post('/ipad.create', [IpadsController::class, 'create_ipad']);
    Route::put('/ipad-edit/{id}',[IpadsController::class, 'edit_ipad']);
    Route::delete('/ipad-delete/{id}',[IpadsController::class, 'delete_ipad']);
    // iPhone
    Route::get('/iphones', [IphonesController::class, 'view_iphone']);
    Route::post('/iphone.create', [IphonesController::class, 'create_iphone']);
    Route::put('/iphone-edit/{id}',[IphonesController::class, 'edit_iphone']);
    Route::delete('/iphone-delete/{id}',[IphonesController::class, 'delete_iphone']);
    // Contact
    Route::get('/contacts', [ContactsController::class, 'view_contact']);
    Route::delete('/contact-delete/{id}',[ContactsController::class, 'delete_contact']);

    Route::get('/orders', [OrderController::class, 'view_order']);
    Route::delete('/order-delete/{id}',[OrderController::class, 'delete_order']);

});
// End backend side--------------------------------------------------------------