<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backsite\OrderController;
use App\Http\Controllers\Backsite\PermissionController;
use App\Http\Controllers\Backsite\PlanController;
use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\TransactionController;
use App\Http\Controllers\Backsite\UserController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckOrderAccess;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login', 'store')->name('auth.login');
});

Route::controller(RegisterController::class)->group(callback: function () {
    Route::get('register', 'index')->name('register');
    Route::post('register', 'store')->name('auth.register');
});

Route::middleware('auth')->group(function () {

    # SUPERADMIN PREFIX
    Route::prefix('backsite')->group(function () {
        Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

        Route::resource('subscription-plan', PlanController::class);
        Route::get('subscription-plan/{id}/features', [PlanController::class, 'features'])->name('subscription-plan.features');
        Route::post('subscription-plan/{id}/features', [PlanController::class, 'storeFeatures'])->name('subscription-plan.store-features');
        Route::delete('subscription-plan/{id}/features/{feature_id}', [PlanController::class, 'destroyFeature'])->name('subscription-plan.delete-feature');

        Route::get('order', [OrderController::class, 'index'])->name('order.index');
        Route::get('transaction', [TransactionController::class, 'index'])->name('transaction.index');

        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('users', UserController::class);
        Route::post('/update-role', [RoleController::class, 'updateRole'])->name('updateRole');
    });

    Route::get('subscribe', [SubscribeController::class, 'detailOrder'])->name('subscribe');
    Route::post('order', [SubscribeController::class, 'order'])->name('subscribe.order');

    Route::middleware(CheckOrderAccess::class)->group(function () {
        Route::get('order/pay/{order_id}', [SubscribeController::class, 'payments'])->name('subscribe.payments');
        Route::post('order/pay/{order_id}', [SubscribeController::class, 'createTransaction'])->name('subscribe.pay');

        Route::get('order/success', [SubscribeController::class, 'midtransWebhook'])->name('subscribe.success');
        Route::get('order/failed/{order_id}', [SubscribeController::class, 'midtransError'])->name('subscribe.failed');

        Route::get('order/{order_id}/status', [SubscribeController::class, 'status'])->name('subscribe.status');
    });


    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::fallback(function () {
    return redirect()->route('home');
});
