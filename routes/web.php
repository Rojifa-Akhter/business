<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirects',[AdminController::class,'index']);



Route::group(['prefix' => 'business_listing'], function () {
    Route::get('/', [MemberController::class, 'index'])->name('form.business_listing');
    Route::get('/add', [MemberController::class, 'create'])->name('member.create');
    Route::put('/store', [MemberController::class, 'store'])->name('member.store');
});

// home
Route::get('/product', [AdminController::class, 'product'])->name('product.product');
Route::get('/home', [AdminController::class, 'home'])->name('home.home');
Route::get('/pricing', [AdminController::class, 'pricing'])->name('pricing.pricing');
Route::get('/update-profile', [AdminController::class, 'update_profile'])->name('update.profile');
Route::get('/communication', [AdminController::class, 'communication'])->name('update.communication');
Route::get('/important', [AdminController::class, 'important'])->name('update.important');
Route::get('/trade-alert', [AdminController::class, 'trade_alert'])->name('update.trade-alert');
Route::get('/support-center', [AdminController::class, 'support_center'])->name('update.support-center');
Route::get('/sent-mail', [AdminController::class, 'sent_mail'])->name('update.sent-mail');
Route::get('/buy-offer', [AdminController::class, 'buy_offer'])->name('update.buy-offer');
Route::get('/brochure', [AdminController::class, 'brochure'])->name('update.brochure');
Route::get('/certificate', [AdminController::class, 'certificate'])->name('update.certificate');
Route::get('/video', [AdminController::class, 'video'])->name('update.video');
Route::get('/alert', [AdminController::class, 'alert'])->name('update.alert');
Route::get('/setting', [AdminController::class, 'setting'])->name('update.setting');
