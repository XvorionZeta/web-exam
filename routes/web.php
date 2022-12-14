<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;

use App\Http\Livewire\ListTest;
use App\Http\Livewire\ListSoal;
use App\Http\Livewire\AssignTest;
use App\Http\Livewire\CreateTest;
use App\Http\Livewire\CreateSoal;

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

Route::get('/',[LoginController::class, 'show'])->middleware('guest')->name('login');


Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');

// Main Now
Route::group(['middleware' => 'auth'],function () {
    Route::get('dashboard',[HomeController::class, 'index'])
        ->name('home');

    Route::get('profile',  [UserProfileController::class, 'show'])
        ->name('profile');

    // List Test & Soal
        Route::get('list-test',ListTest::class)
            ->name('list-test');
        Route::get('list-soal/{test_id}',ListSoal::class)
            ->name('list-soal');
        Route::get('assign-test/{test_id}',AssignTest::class)
            ->name('assign-test');

    // Buat test dan soal
        Route::get('create-test', CreateTest::class)
            ->name('create-test');
        Route::get('create-soal/{title_id}', CreateSoal::class)
            ->name('create-soal');

    Route::post('logout', [LoginController::class, 'logout'])
        ->name('logout');
});
// Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
// 	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::group(['middleware' => 'auth'], function () {
// 	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
// 	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
// 	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
// 	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
// 	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
// 	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
// 	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
// 	Route::get('/{page}', [PageController::class, 'index'])->name('page');
// 	;
// }
// );
