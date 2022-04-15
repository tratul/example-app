<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;

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

Route::get('/', [LoginController::class, 'show']);

Route::group(['middleware' => ['guest']], function() {
    /**
     * Register Routes
     */
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

    /**
     * Login Routes
     */
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

    /**
     * Reset Routes
     */
    Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

    /**
     * Social Login Routes
     */
    // Route::get('auth/social', 'Auth\LoginController@show')->name('social.login');
    Route::get('oauth/{driver}', [LoginController::class, 'redirectToProvider'])->name('social.oauth');
    Route::get('oauth/{driver}/callback', [LoginController::class, 'handleProviderCallback'])->name('social.callback');

});

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Routes
     */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
});

Route::group(['middleware' => ['auth','verified']], function() {  
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/news-ticker', [AdminController::class, 'newsTicker'])->name('admin.news_ticker');
    Route::get('/image-message', [AdminController::class, 'imageMessage'])->name('admin.image_message');
    Route::get('/important-links', [AdminController::class, 'importantLink'])->name('admin.important_link');
    Route::get('/other-services', [AdminController::class, 'otherService'])->name('admin.other_service');

    Route::get('/post', [PostController::class, 'index'])->name('admin.post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('admin.post.create');
    Route::get('/post/category', [PostController::class, 'category'])->name('admin.post.category');

    Route::get('/page', [PageController::class, 'index'])->name('admin.page.index');
    Route::get('/page/create', [PageController::class, 'create'])->name('admin.page.create');

    Route::get('/media', [MediaController::class, 'index'])->name('admin.media.index');
    Route::get('/media/create', [MediaController::class, 'create'])->name('admin.media.create');

    Route::get('/user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::get('/user/profile', [UserController::class, 'profile'])->name('admin.user.profile');
    Route::get('/user/role', [UserController::class, 'role'])->name('admin.user.role');

    Route::get('/setting', [SettingController::class, 'index'])->name('admin.setting.index');
});
